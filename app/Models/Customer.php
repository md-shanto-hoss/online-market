<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;
class Customer extends Model
{
    use HasFactory;
    private static $customer;

    public static function newCustomer($request)
    {
        self::$customer = new Customer();
        self::$customer->name = $request->name;
        self::$customer->email = $request->email;
        self::$customer->password = bcrypt($request->password);
        self::$customer->phone = $request->phone;
        self::$customer->save();


        Session::put('customer_id', self::$customer->id);
        Session::put('customer_name', self::$customer->name);


        return self::$customer;
    }
}
