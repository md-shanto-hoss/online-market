<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    private $product;

    public function index(Request $request, $id)
    {
        $this->product = Product::find($id);

        Cart::add([
            'id' => $id,
            'name' => $this->product->name,
            'price' => $this->product->selling_price,
            'quantity' => $request->quantity,
            'attributes' => [
                'image' => $this->product->image
            ],
        ]);
        return redirect('/cart/show-item');
    }
    public function show()
    {
        return view('website.cart.index');
    }
    public function update(Request $request, $id)
    {
        Cart::update($id, [
            'quantity' => [
                'relative' => false,
                'value' => $request->quantity
            ],
        ]);
        return back()->with('message', 'Cart item update successful');
    }
    public function remove($id)
    {
        Cart::remove($id);
        return redirect('/cart/show-item')->with('message', 'Cart item remove successful');
    }
    public function headerCartRemove($id)
    {
        Cart::remove($id);
        return back();
    }
}
