<?php

namespace App\Http\Controllers;


class SessionsController extends Controller

{

    public function create()
    {
        return view('sessions.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email'  => 'required',
            'password'  => 'required',

        ]);


        if (auth()->attempt($attributes)) {

        return redirect('/')->with('success', 'Wellcome Back!');
    }

        return back()->withErrors(['email' =>'Provided credentionals could not be verified']);

    }
    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}

