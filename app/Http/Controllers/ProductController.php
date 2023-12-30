<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\OtherImages;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $product;
    public function index()
    {
        return view('admin.product.index', [
            'subCategories' => SubCategory::where('status', 1)->get(),
            'units' => Unit::where('status', 1)->get(),
            'brands' => Brand::where('status', 1)->get(),
        ]);
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'unit_id' => 'required',
            'brand_id' => 'required',
            'name' => 'required',
            'code' => 'required',
            'stoke_amount' => 'required',
            'regular_price' => 'required',
            'selling_price' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'image' => 'required',
            'other_image' => 'required',
        ], [
            'category_id.required' => 'The category field is required. ',
            'sub_category_id.required' => 'The sub category field is required. ',
            'unit_id.required' => 'The unit field is required. ',
            'brand_id.required' => 'The brand field is required. ',
        ]);
        $this->product = Product::newProduct($request);
        OtherImages::newOtherImage($request, $this->product->id);
        return back()->with('message', 'Product info create successful');
    }
    public function manage()
    {
        return view('admin.product.manage', [
            'products' => Product::where('status', 1)->get(),
            'subCategories' => SubCategory::where('status', 1)->get(),
            'units' => Unit::where('status', 1)->get(),
            'brands' => Brand::where('status', 1)->get()
        ]);
    }
    public function edit($id)
    {
        return view('admin.product.edit', [
            'product' => Product::find($id),
            'subCategories' => SubCategory::where('status', 1)->get(),
            'units' => Unit::where('status', 1)->get(),
            'brands' => Brand::where('status', 1)->get()
        ]);
    }
    public function detail($id)
    {
        return view('admin.product.detail', ['product' => Product::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Product::updateProduct($request, $id);
        if ($request->file('other_image'))
        {
            OtherImages::updateOtherImage($request, $id);
        }
        return redirect('/product/manage')->with('message', 'Product info Create successful');
    }
    public function delete($id)
    {
        Product::deleteProduct($id);
        OtherImages::deleteOtherImage($id);
        return back()->with('message', 'Product info delete successful');
    }
}
