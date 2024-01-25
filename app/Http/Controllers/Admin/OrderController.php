<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Mail;

class OrderController extends Controller
{
    public function new_orders()
    {
        $table = Order::with('customer')->where('status', 1)->get();
        return view('admin.orders.new_orders', ['table' => $table]);
    }

    public function processing_orders()
    {
        $table = Order::with('customer')->where('status', 2)->get();
        return view('admin.orders.processing_orders', ['table' => $table]);
    }

    public function distpached_orders()
    {
        $table = Order::with('customer')->where('status', 3)->get();
        return view('admin.orders.dispatched_orders', ['table' => $table]);
    }

    public function completed_orders()
    {
        $table = Order::with('customer')->where('status', 4)->get();
        return view('admin.orders.completed_orders', ['table' => $table]);
    }




    /********************new-orders***************** */

// type Delete
    public function New_orderDelete($id)
    {
        $order = Order::where('id', $id)->update([
            'status' => 0
        ]);
        return redirect()->back()->with('success', 'Order Rejected');
    }

// Status
    public function New_orderStatus($id, $status)
    {
        if ($status == 1) {
            $status = 2;
        } else {
            $status = 0;
        }
        $obj = Order::where('id', $id)->update([
            'status' => $status
        ]);

        $this->sendStateuMail($id,  'Your order is being processed.');
        return redirect()->back()->with('success', 'Order Reday To Process');
    }



    /***************Processing-orders******************** */

// type Delete
    public function Processing_orderDelete($id)
    {

        $order = Order::where('id', $id)->update([
            'status' => 0
        ]);
        return redirect()->back()->with('success', 'Order Rejected');
    }

// Status
    public function Processing_orderStatus($id, $status)
    {
        if ($status == 2) {
            $status = 3;
        } else {
            $status = 1;
        }
        $obj = Order::where('id', $id)->update([
            'status' => $status
        ]);
        $this->sendStateuMail($id,  'Your order is ready to dispatch.');
        return redirect()->back()->with('success', 'Order Ready To Dispatch');
    }

    /*****************distpached-orders**************** */

    // type Delete
    public function Distpached_orderDelete($id)
    {

        $order = Order::where('id', $id)->update([
            'status' => 0
        ]);
        return redirect()->back()->with('success', 'Order Rejected');
    }

// Status
    public function Distpached_orderStatus($id, $status)
    {
        if ($status == 3) {
            $status = 4;
        } else {
            $status = 1;
        }
        $obj = Order::where('id', $id)->update([
            'status' => $status
        ]);
        $this->sendStateuMail($id,  'Your order has been completed.');
        return redirect()->back()->with('success', 'Order Completed Successfully');
    }

        /*****************Completed_-orders**************** */

    // type Delete
    public function Completed_orderDelete($id)
    {

        $order = Order::where('id', $id)->update([
            'status' => 0
        ]);
        return redirect()->back()->with('success', 'Order Rejected');
    }

// Status
    public function Completed_orderStatus($id, $status)
    {
        if ($status == 4) {
            $status = 4;
        } else {
            $status = 1;
        }
        $obj = Order::where('id', $id)->update([
            'status' => $status
        ]);
        return redirect()->back()->with('success', 'Order Completed Successfully');
    }

    function sendStateuMail($orderId, $status)  {

        try {
            $order = Order::with('customer','ordered_books.book', 'paymentDetails')->where('id', $orderId)->first();
            $data["to"] =  $order->customer->email;
            //$data["from"] =  'info@heena.lk';
            $data["admin"] =  'info@heena.lk';
            $data["subject"] = 'Congratulations! '.$status.' - '. 'ORD' . str_pad(number_format($order->id + 100000, 0, '', ''), 6, '0', STR_PAD_LEFT);
            $data["body"] =  (object)array('order'=>$order, 'status'=>$status);

            Mail::send('layouts.emali.order-state', $data, function ($message) use ($data) {
                $message->to($data["to"]);
                //$message->cc($data["from"]);
                $message->cc($data["admin"]);
                $message->subject($data["subject"]);
            });

            return view('layouts.emali.order-confirmation',$data);
        } catch (\Throwable $th) {
            //throw $th;
            
        }

    }
}
