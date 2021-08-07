<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');

    }
    //user/1 依赖注入
    public function show(User $user)
    {

        return view('users.show',compact('user'));
    }

    public function store(Request $request)
    {
        var_dump($request->post());
        $this->validate($request,[
            'name'=>'required|unique:users|max:50|min:4',
            'email'=>'required|email|unique:users|max:50',
            'password'=>'required|confirmed|min:6'
        ]);

    }
}
