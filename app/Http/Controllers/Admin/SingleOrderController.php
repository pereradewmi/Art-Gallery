<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Order;

class SingleOrderController extends Controller
{
    public function new_orders($id)
    {
        $order = Order::with('customer','ordered_books.book', 'paymentDetails')->where('id', $id)->first();
        
        return view('admin.orders.single_order', ['order' => $order]);
    }


}
