<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisterController extends Controller
{
    //user registration - create
    public function create()
    {
        return view('register.create');
    }

    //user registration - store
    public function store()
    {
        $attributes = request()->validate([
            'name'  => 'required',
            'username'  => 'required|min:5|max:255|unique:users,username',
            'email'  => 'required|email|unique:users,email',
            'password'  => 'required|min:5|max:255',

        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'You have successfully created your account!');
    }

}
