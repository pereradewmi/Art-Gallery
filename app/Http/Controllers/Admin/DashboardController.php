<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Book;
use App\Models\MasterCategory;
use App\Models\Customer;
use App\Models\Order;

class DashboardController extends Controller
{
    public function all (){
        $booksCount = Book::whereIn('status',[0,1])-> count();
        $bookCategoriesCount = MasterCategory::where('status', 1)-> count();
        $customersCount = Customer::where('status', 1)-> count();
        $ordersCount = Order::whereIn('status',[1, 2, 3, 4])-> count();

        return view('admin.dashboard',compact('booksCount','bookCategoriesCount','customersCount','ordersCount'));

    }

}
