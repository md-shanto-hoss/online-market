<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use function Brick\Math\shiftedLeft;
use function Symfony\Component\HttpFoundation\setFile;
use Cart;
class OrderDetail extends Model
{
    use HasFactory;
    private static $orderDetail, $product;

    public static function newOrderDetail($id)
    {
        foreach (Cart::getContent() as $cartProduct)
        {
            self::$orderDetail = new OrderDetail();
            self::$orderDetail->order_id = $id;
            self::$orderDetail->product_id = $cartProduct->id;
            self::$orderDetail->name = $cartProduct->name;
            self::$orderDetail->price = $cartProduct->price;
            self::$orderDetail->quantity = $cartProduct->quantity;
            self::$orderDetail->save();

            self::$product = Product::find($cartProduct->id);
            self::$product->stoke_amount = self::$product->stoke_amount - $cartProduct->quantity;
            self::$product->save();

            Cart::remove($cartProduct->id);
        }

    }
    public static function deleteOrderDetail($id)
    {
       self::$orderDetail = OrderDetail::where('order_id', $id);
        foreach (self::$orderDetail as $item)
        {
            $item->delete();
       }
    }
}
