<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\MasterCourier;
use App\Models\MasterCourierWeightCharge;
use App\Models\MasterCourierCityCharge;
use App\Models\Order;
use App\Models\OrderedBook;
use Illuminate\Support\Facades\Log;

use Carbon\Carbon;
use Session;

class CartController extends Controller
{

  public function cart()
  {
      return view('cart');
  }


  public function addToCart($id,Request $request)
  {
      $product = Book::findOrFail($id);

      $cart = session()->get('cart', []);

      if(isset($cart[$id])) {
          $cart[$id]['quantity']+=$request->quantity ?? 1;
      } else {
          $cart[$id] = [
              "id" => $product->id,
              "name" => $product->title,
              "quantity" => $request->quantity ?? 1,
              "price" => $product->price,
              "weight" => $product->weight,
              "image" => $product->cover_image_path
          ];
      }

        $cartSummary = (object)['cartTotal'=>0, 'cartCount'=>0];
        foreach ($cart as $key => $item) {

            $cartSummary->cartTotal += ($item['quantity'] ?? 1) * $item['price'];
            $cartSummary->cartCount += ($item['quantity'] ?? 1);

        }
        session()->put('cartSummary', $cartSummary);

      session()->put('cart', $cart);
      return redirect()->back()->with('success', 'Book added to cart successfully!');
  }



  public function update(Request $request)
  {
      if($request->id && $request->quantity){
          $cart = session()->get('cart');
          $cart[$request->id]["quantity"] = $request->quantity;
          session()->put('cart', $cart);
          session()->flash('success', 'Cart updated successfully');

          $cartSummary = (object)['cartTotal'=>0, 'cartCount'=>0];
          foreach ($cart as $key => $item) {

              $cartSummary->cartTotal += ($item['quantity'] ?? 1) * $item['price'];
              $cartSummary->cartCount += ($item['quantity'] ?? 1);

          }
          session()->put('cartSummary', $cartSummary);


      }
  }


  public function remove(Request $request)
  {
      if($request->id) {
          $cart = session()->get('cart');
          if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
          }


          $cartSummary = (object)['cartTotal'=>0, 'cartCount'=>0];
          foreach ($cart as $key => $item) {

              $cartSummary->cartTotal += ($item['quantity'] ?? 1) * $item['price'];
              $cartSummary->cartCount += ($item['quantity'] ?? 1);

          }
          session()->put('cartSummary', $cartSummary);


          session()->flash('success', 'Product removed successfully');
      }
  }



    public function checkout()
    {
        $shippingMethods = MasterCourier::where('status', 1)->get();

        $payhereOrderId = uniqid();

        $merchantId = env("PAYHERE_MERCHANT_ID");

        $currency = 'LKR';

        return view('checkout', [
            'shippingMethods' => $shippingMethods,
            'payhereOrderId' => $payhereOrderId,
            'merchantId' => $merchantId,
            'currency' => $currency
        ]);
    }

    public function getDeliveryFee($courierId, $weight, $cityId, $payhereOrderId)
    {
       $cart_amount = session()->get('cart_amount', []);

        if ($courierId == 1) {
            $total = 0;
            $weight = 0;
            foreach(session('cart') as $id => $details) {
                $total += $details['price'] * $details['quantity'];
                $weight += $details['weight'] * $details['quantity'];
            }

            $data = MasterCourierWeightCharge::select('id','courier_id','min_weight','max_weight','rate')
                                            ->where('courier_id', $courierId)
                                            ->whereRaw('? between min_weight and max_weight', $weight)
                                            ->first();
            $rate = $data->rate;

            $merchantId = env("PAYHERE_MERCHANT_ID");

            $currency = 'LKR';

            $netTotal = $total + $rate;
            $processingFee = $netTotal / 100 * 3.42;

            $subtotal = round($total, 2);
            $netTotal = round($netTotal, 2);
            $processingFee = round($processingFee, 2);

            $totalAmount = $netTotal + $processingFee;

            $cart_amount = [
                "sub_total" => $subtotal,
                "delivery_fee" => $rate,
                "processing_fee" => $processingFee,
                "net_amount" => $totalAmount,
                "delivery_method" => $courierId,
            ];

            session()->put('cart_amount', $cart_amount);

            $hash = strtoupper(
                md5(
                    $merchantId .
                    $payhereOrderId .
                    number_format($totalAmount, 2, '.', '') .
                    $currency .
                    strtoupper(md5(env("PAYHERE_MERCHANT_SECRET")))
                )
            );

            return response()->json([$rate, $hash, $totalAmount]);

        } else {
            $total = 0;
            $weight = 0;
            foreach(session('cart') as $id => $details) {
                $total += $details['price'] * $details['quantity'];
                $weight += $details['weight'] * $details['quantity'];
            }

            $weightRate = MasterCourierWeightCharge::select('id','courier_id','min_weight','max_weight','rate')
                                                    ->where('courier_id', $courierId)
                                                    ->whereRaw('? between min_weight and max_weight', $weight)
                                                    ->first();

            $cityDeliveryFee = MasterCourierCityCharge::select('id','courier_id','city_id','delivery_fee')
                                                    ->where('courier_id', $courierId)
                                                    ->where('city_id', $cityId)
                                                    ->first();

            $rate = $weightRate->rate + $cityDeliveryFee->delivery_fee;

            $merchantId = env("PAYHERE_MERCHANT_ID");

            $currency = 'LKR';

            $netTotal = $total + $rate;
            $processingFee = $netTotal / 100 * 3.42;

            $subtotal = round($total, 2);
            $netTotal = round($netTotal, 2);
            $processingFee = round($processingFee, 2);

            $totalAmount = $netTotal + $processingFee;

            $cart_amount = [
                 "sub_total" => $subtotal,
                 "delivery_fee" => $rate,
                 "processing_fee" => $processingFee,
                 "net_amount" => $totalAmount,
                 "delivery_method" => $courierId,
            ];

            session()->put('cart_amount', $cart_amount);

            $hash = strtoupper(
                md5(
                    $merchantId .
                    $payhereOrderId .
                    number_format($totalAmount, 2, '.', '') .
                    $currency .
                    strtoupper(md5(env("PAYHERE_MERCHANT_SECRET")))
                )
            );

            return response()->json([$rate, $hash, $totalAmount]);
        }
    }

    public function placeOrder(Request $request)
    {
        $order = new Order();
        $order->ordered_date = Carbon::now()->format('Y-m-d H:i:s');
        $order->customer_id = auth()->guard('customers')->user()->id;
        $order->sub_total = $request->sub_total;
        $order->delivery_fee = $request->total_delivery_fee;
        $order->net_total = $request->net_total;
        $order->status = 1;
        $order->save();

        foreach($request->book_id as $key => $orderedBook)
        {
            $ob = new OrderedBook();
            $ob->order_id = $order->id;
            $ob->book_id = $request->book_id[$key];
            $ob->quantity = $request->book_quantity[$key];
            $ob->total_price = $request->book_subtotal[$key];
            $ob->save();
        }

        foreach($request->book_id as $key => $reducedBook)
        {
            $currentBookQty = Book::where('id', $request->book_id[$key])->first();

            $rb = Book::where('id',$request->book_id[$key])
                    ->update(['stock_quantity'=>$currentBookQty->stock_quantity - $request->book_quantity[$key]]);
        }

        Session::pull('cart');

        return redirect()->route('books')->with('success', 'Order Placed Successfully !!!');
    }
}
