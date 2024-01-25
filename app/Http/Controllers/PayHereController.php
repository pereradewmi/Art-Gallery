<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Book;
use App\Models\Order;
use App\Models\OrderedBook;
use App\Models\Payment;
use Mail;

use Carbon\Carbon;
use Session;

class PayHereController extends Controller
{
    public function handlePaymentNotification(Request $request)
    {
        Log::channel('payment')->info('PayHere notify response');

        $merchant_id = $request->merchant_id;
        $payhere_order_id = $request->order_id;
        $payment_id = $request->payment_id;
        $captured_amount = $request->captured_amount;
        $payhere_amount = $request->payhere_amount;
        $payhere_currency = $request->payhere_currency;
        $status_code = $request->status_code;
        $md5sig = $request->md5sig;
        $status_message = $request->status_message;
        $method = $request->method;
        $card_holder_name = $request->card_holder_name;
        $card_no = $request->card_no;
        $card_expiry = $request->card_expiry;

        $merchant_secret = env("PAYHERE_MERCHANT_SECRET");

        $local_md5sig = strtoupper(
            md5(
                $merchant_id .
                $payhere_order_id .
                $payhere_amount .
                $payhere_currency .
                $status_code .
                strtoupper(md5($merchant_secret))
            )
        );

        if (($local_md5sig === $md5sig) AND ($status_code == 2) ){
            $payment = new Payment();
            $payment->payhere_order_id = $payhere_order_id;
            $payment->payment_id = $payment_id;
            $payment->payhere_amount = $payhere_amount;
            $payment->payhere_currency = $payhere_currency;
            $payment->status_code = $status_code;
            $payment->md5sig = $md5sig;
            $payment->method = $method;
            $payment->card_holder_name = $card_holder_name;
            $payment->card_no = $card_no;
            $payment->card_expiry = $card_expiry;
            $payment->status_message = $status_message;
            $payment->save();

            $this->sendPaymentConfirmationMail($payhere_order_id);
            Log::channel('payment')->info('Payment Success', ['payment_id'=>$payment_id, 'status_code'=>$status_code]);

        } else {
            Log::channel('payment')->error('Payment Fail', ['payment_id'=>$payment_id, 'status_code'=>$status_code]);
        }

        return response('OK', 200);
    }

    public function handlePaymentReturn(Request $request)
    {
        if ($request->order_id)
        {
            Log::channel('payment')->info('PayHere return response', ['order_id'=>$request->order_id]);

            $subTotal = 0;
            $weight = 0;
            foreach(session('cart') as $id => $details)
            {
                $subTotal += $details['price'] * $details['quantity'];
                $weight += $details['weight'] * $details['quantity'];
            }

            $deliveryFee = session('cart_amount')['delivery_fee'];
            $deliveryMethod = session('cart_amount')['delivery_method'];

            $netTotal = $subTotal + $deliveryFee;
            $processingFee = $netTotal / 100 * 3.42;

            $netTotal = round($netTotal, 2);
            $processingFee = round($processingFee, 2);

            $totalAmount = $netTotal + $processingFee;

            $order = new Order();
            $order->payhere_order_id = $request->order_id;
            $order->ordered_date = Carbon::now()->format('Y-m-d H:i:s');
            $order->customer_id = auth()->guard('customers')->user()->id;
            $order->sub_total = $subTotal;
            $order->delivery_fee = $deliveryFee;
            $order->processing_fee = $processingFee;
            $order->net_total = $totalAmount;
            $order->delivery_method = $deliveryMethod;
            $order->status = 1;
            $order->save();

            foreach(session('cart') as $id => $details)
            {
                $ob = new OrderedBook();
                $ob->order_id = $order->id;
                $ob->book_id = $details['id'];
                $ob->quantity = $details['quantity'];
                $ob->total_price = $details['price'];
                $ob->save();

                $currentBookQty = Book::where('id', $details['id'])->first();

                $rb = Book::where('id', $details['id'])
                        ->update(['stock_quantity'=>$currentBookQty->stock_quantity - $details['quantity']]);
            }

        } else {
            Log::channel('payment')->error('PayHere return response received without order id');
        }

        Session::pull('cart');
        Session::pull('cart_amount');
        $cartSummary = (object)['cartTotal'=>0, 'cartCount'=>0];

        session()->put('cartSummary', $cartSummary);

        return redirect()->route('orders.my_orders');
    }


    function sendPaymentConfirmationMail($payhere_order_id)  {

        try {
            $order = Order::with('customer','ordered_books.book', 'paymentDetails')->where('payhere_order_id', $payhere_order_id)->first();

            $data["to"] =  $order->customer->email;
            //$data["from"] =  'test@yuhang.enricharcane.info';
            //$data["from"] =  'nimesh.enrich@gmail.com';
            $data["admin"] =  'info@heena.lk';
            $data["subject"] = 'Congratulations! Your order is confirmed! - '. 'ORD' . str_pad(number_format($order->id + 100000, 0, '', ''), 6, '0', STR_PAD_LEFT);
            $data["body"] =  (object)array('order'=>$order);

            Mail::send('layouts.emali.order-confirmation', $data, function ($message) use ($data) {
                $message->to($data["to"]);
                //$message->cc($data["from"]);
                $message->cc($data["admin"]);
                $message->subject($data["subject"]);
            });

        } catch (\Throwable $th) {
            //throw $th;
            
        }

    }



}
