<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerManage()
    {
        return view('admin.customer.customer-manage',[
            'customers' => Customer::all()
        ]);
    }

    public function detail($id)
    {
        return view('admin.customer.customer-detail', [
            'customer' => Customer::find($id)
        ]);
    }
}
