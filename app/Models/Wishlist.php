<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Session;

class Wishlist extends Model
{
    use HasFactory;

    public static $wishlist;

    public static function newWishlist($id)
    {
        self::$wishlist = new Wishlist();
        self::$wishlist->customer_id = Session::get('customer_id');
        self::$wishlist->product_id = $id;
        self::$wishlist->save();
    }

    public function product(): BelongsTo
    {
        return  $this->belongsTo(Product::class);
    }
}
