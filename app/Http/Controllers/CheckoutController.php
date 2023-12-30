<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Session;
class CheckoutController extends Controller
{
    private $order, $customer, $email,  $result = [];

    public function index()
    {
        return view('website.checkout.index');
    }
    public function newOrder(Request $request)
    {

        if (Session::get('customer_id'))
        {
            $this->customer = Customer::find(Session::get('customer_id'));
        }else{

            $this->validate($request, [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'confirm_password' => 'required',
                'phone' => 'required',
                'delivery_address' => 'required',
            ]);
            $this->customer = Customer::newCustomer($request);
        }

        if ($request->payment_method == 1 )
        {

            $this->order =  Order::newOrder($request, $this->customer->id);
            OrderDetail::newOrderDetail($this->order->id);
        }else{
            return  view('website.checkout.exampleHosted', [
                'customer' => $this->customer,
                'address' => $request->delivery_address
            ]);
        }

       return redirect('/complete-order');
    }

    public function completeOrder()
    {
        return view('website.checkout.complete-order');
    }

    public function check()
    {
        $this->email = Customer::where('email', $_GET['email'])->first();
        if ($this->email)
        {
            $this->result = ['This email already exists', true];
        }else{
            $this->result = ['', false];
        }

        return response()->json($this->result);
    }
}

