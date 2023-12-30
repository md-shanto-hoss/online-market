<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Session;
class SocialController extends Controller
{
    private $user, $newUser, $customer;

    public  function redirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callbackGoogle()
    {
        $user = Socialite::driver('google')->user();
        $this->customer = Customer::where('email', $user->email)->first();
        if (!$this->customer)
        {
            $this->newUser = new Customer();
            $this->newUser->name = $user->name;
            $this->newUser->email = $user->email;
            $this->newUser->image = $user->avatar;
            $this->newUser->password = bcrypt(rand(8, 20));
            $this->newUser->mobile = rand(0,11);
            $this->newUser->save();

            Session::put('customer_id', $this->newUser->id);
            Session::put('customer_name', $this->newUser->name);

            return redirect('/');
        }else{
           Session::put('customer_id', $this->customer->id);
           Session::put('customer_name', $this->customer->name);
           return redirect('/');
        }
    }
}
