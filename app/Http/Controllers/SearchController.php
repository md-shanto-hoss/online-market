<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public $product;

    public  function index(Request $request)
    {
        $query = $request->query;

        $products = Product::where('name', 'like', '%'.$request->query.'%')
            ->orWhere('description', 'like', "%$request->query%")
            ->get();
        if ($products)
        {
            return redirect()->route('product.search', ['products' =>  $products]);
        }else{
            return back()->with('message', 'search not found');
        }
    }
    public function product()
    {
        return view('website.search.index');
    }
}
