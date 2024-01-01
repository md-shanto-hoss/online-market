<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
   public function index()
   {
       $customer = [];
       $email = Customer::where('email', $_GET['email'])->first();

       if ($email)
       {
           $customer = ['email already exists.', true];
       }else{
           $customer = ['', false];
       }

       return json_encode($customer);
   }
}
