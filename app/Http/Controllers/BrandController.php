<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        return view('admin.brand.index');
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        Brand::newBrand($request);
        return back()->with('message', 'Brand info create successful');
    }
    public function manage()
    {
        return view('admin.brand.manage', ['brands' => Brand::where('status', 1)->get()]);
    }
    public function edit($id)
    {
        return view('admin.brand.edit', ['brand' => Brand::find($id)]);
    }
    public function update(Request $request, $id)
    {
        Brand::updateBrand($request, $id);
        return redirect('/brand/manage')->with('message', 'Brand info update successful');
    }
    public function delete($id)
    {
        Brand::deleteBrand($id);
        return back()->with('message', 'Brand info delete successful');
    }
}
