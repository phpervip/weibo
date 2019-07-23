<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function create()
    {
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
                'name'=>'require|max:50',
                'email'=>'require|email|unique:users|max:255',
                'password'=>'require|confirmed|min:6',

        ]);
        return;
    }
}
