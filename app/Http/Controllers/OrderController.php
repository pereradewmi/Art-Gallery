<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index() 
    {
        $orders = Order::with('ordered_books', 'ordered_books.book', 'deliveryMethod')->where('customer_id', auth()->guard('customers')->user()->id)->get();
        
        return view('my_orders', ['orders'=>$orders]);
    }
    
    public function orderDetails($id) 
    {
        $order = Order::with('ordered_books', 'ordered_books.book', 'deliveryMethod', 'paymentDetails', 'customer', 'customer.billingCity', 'customer.billingCountry')->find($id);
        return json_encode($order);
    }
}
