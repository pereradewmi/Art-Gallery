<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\VehicleDetail;
use App\Models\VehicleOption;
use App\Models\MasterType;
use Illuminate\Http\Request;
use App\Models\Accessory;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::whereIn('status', [0, 1])->with('bookAuthor.author')->orderby('created_at', 'DESC')->get();
        return view(
            'books',
            [
                'books' => $books
            ]
        );
    }


    public function bookDetails($id)
    {
        $book = Book::with('bookImage')->with('bookAuthor.author')->where('id', $id)->get();

        return view('book-details', ['book' => $book]);
    }


}
