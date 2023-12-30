<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $user;

    public function index()
    {
        return view('admin.user.index');
    }
    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'user_type' => 'required',
        ]);

        User::newUser($request);
        return back()->with('message', 'User info create successful');
    }
    public function manage()
    {
        return view('admin.user.manage', [
            'users' => User::all()
        ]);
    }

    public function edit($id)
    {
        return view('admin.user.edit', [
            'user' => User::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        User::updateUser($request, $id);
        return redirect('/user/manage');
    }

    public function delete($id)
    {
       User::deleteUser($id);
       return back()->with('message', 'User delete successful');
    }
}
