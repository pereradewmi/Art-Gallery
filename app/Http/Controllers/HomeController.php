<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\MasterCategory;
use App\Models\MasterAuthor;
use App\Models\MasterLanguage;
use App\Models\Banner;
use App\Models\Order;
use App\Models\Customer;

use Illuminate\Http\Request;

use Schema;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */


    public function index()
    {
        $bookTitles = Book::where('status', 1)->get();
        $categories = MasterCategory::where('status', 1)->get();
        $authors = MasterAuthor::where('status', 1)->get();
        $languages = MasterLanguage::where('status', 1)->get();

        $newArrivals = Book::with('bookAuthor.author')->where('status', 1)->orderby('created_at', 'DESC')->limit(6)->get();

        $total_book = Book::whereIn('status',[0,1])-> count();
        $total_sold = Order::whereIn('status',[1, 2, 3, 4])-> count();
        $total_users = Customer::where('status', 1)-> count();
        
         $banners_view = Banner::where('status', 1)->get();

        return view('home', [
            'bookTitles' => $bookTitles,
            'categories' => $categories,
            'authors' => $authors,
            'languages' => $languages,

            'newArrivals' => $newArrivals,

            'total_book' => $total_book,
            'total_sold' => $total_sold,
            'total_users' => $total_users,
            
             'banners_view' =>  $banners_view,
        ]);
    }


    public function search(Request $request)
    {
        $searchResults = Book::when($request->title, function ($query, $title) {
            return $query->where('id', $title);
        })
            ->when($request->category, function ($query, $category) {
                return $query->where('category_id', $category);
            })
            ->when($request->author, function ($query, $author) {
                $query->whereHas('bookAuthor.author', function ($query) use ($author) {
                    $query->where('author_id', $author);
                });
            })
            ->when($request->language, function ($query, $language) {
                return $query->where('language_id', $language);
            })
            ->where('status', 1)->paginate(50)->appends($request->query());

        return view('search-results', compact('searchResults'));

    }



}
