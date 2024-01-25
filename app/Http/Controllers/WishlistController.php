<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Maize\Markable\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function wishlist()
    {
        // $products = Book::whereHasFavorite(auth()->guard('customers')->user())->get(); 
        if (Auth::guard('customers')->check()){
            $products = Favorite::with('book')->where('user_id', auth()->guard('customers')->user()->id)->get(); 
            return view('favourites',compact('products'));
        } 
        else {
            return view('login');
        }
    }

    public function favoriteAdd($id)
    {
        // $product = Book::find($id);
        // $user = auth()->guard('customers')->user();
        // Favorite::add($product, $user);

        $favourite = new Favorite();
        $favourite->user_id = auth()->guard('customers')->user()->id;
        $favourite->markable_type = "App\Models\Book";
        $favourite->markable_id = $id;
        $favourite->save();

        session()->flash('success', 'Product is Added to Favorite Successfully !');

        return redirect()->route('wishlist');
    }

    public function favoriteRemove($id)
    {
        // $product = Book::find($id);
        // $user = auth()->guard('customers')->user();
        // Favorite::remove($product, $user);

        $product = Favorite::find($id);
        $product->delete();


        session()->flash('success', 'Product is Remove to Favorite Successfully !');

        return redirect()->route('wishlist');
    }
}
