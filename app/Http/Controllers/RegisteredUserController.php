<?php

namespace App\Http\Controllers;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // request()->validate([
        //     'first_name' => ['required', 'min:3'],
        //     'last_name' => ['required', 'min:3'],
        //     'email' => ['required', 'email'],
        //     'password' => ['required', 'min:8'],
        //     'password_confirmation' => ['required', 'min:8', 'password_confirmation'],
        // ]);

        // User::create([
        //     'first_name' => request('first_name'),
        //     'last_name' => request('last_name'),
        //     'email' => request('email'),
        //     'password' => request('password'),
        // ]);

        // return redirect('/');

        dd(request()->all());
    }
}
