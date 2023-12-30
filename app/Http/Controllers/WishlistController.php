<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Session;

class WishlistController extends Controller
{
    public function index()
    {
        return view('website.wishlist.index');
    }

    public function create($id)
    {
        Wishlist::newWishlist($id);

        return back()->with('message', 'Wishlist added successful');
    }
    public function remove($id)
    {
        $wishlists = Wishlist::where('customer_id', Session::get('customer_id'))->get();
        foreach ($wishlists as $wishlist)
        {
            if ($wishlist->product_id == $id)
            {
                $wishlist->delete();
            }
        }

        return back()->with('message', 'Wishlist remove successful.');
    }
}
