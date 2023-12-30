<?php

namespace App\Http\Controllers;

use App\Mail\EmailMail;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;

class AuthCustomerController extends Controller
{
    private $customer;

    public function signIn()
    {
        return view('website.auth.sign-in');
    }
    public function signUp()
    {
        return view('website.auth.sign-up');
    }
    public function registration(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8|max:16',
            'mobile' => 'required'
        ]);

        $this->customer = new Customer();
        $this->customer->name = $request->name;
        $this->customer->email = $request->email;
        $this->customer->password = bcrypt($request->password);
        $this->customer->mobile = $request->mobile;
        $this->customer->save();

        $data = [
            'name' => $this->customer->name,
            'subject' => 'Registration Successful',
            'title' => 'Shop Wise registration was successful',
            'body' => 'Your registration was successful to Shop Wise. When you will need some
                           product from online you can visit here <a>daraz.com</a>',
        ];
        Mail::to($this->customer->email)->send(new EmailMail($data));

        return redirect('/')->with('message', 'Register Successful');
    }
    public function login(Request $request)
    {
        $this->customer = Customer::where('email', $request->email)->first();
        if ($this->customer)
        {
            if (password_verify($request->password, $this->customer->password))
            {
                Session::put('customer_id', $this->customer->id);
                Session::put('customer_name', $this->customer->name);
                return redirect('/');
            }
            else{
                return back()->with('password', 'Wrong password.');
            }
        }else{
            return back()->with('email', "This email didn't match in our record.");
        }
    }
    public function logout()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');
        return back();
    }
}
