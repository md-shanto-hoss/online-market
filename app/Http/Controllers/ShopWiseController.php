<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopWiseController extends Controller
{
   public function index()
   {
       return view('website.home.index', ['products' => Product::where('status', 1)->get()]);
   }
   public function detail($id)
   {
       return view('website.detail.index', ['product' => Product::find($id)]);
   }
   public function category($id)
   {
       return view('website.category.index', ['products' => Product::where('sub_category_id', $id)->get()]);
   }
}
