<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store() // store(Request $request)
    {
        // $request->validate(
        $attributes = \request()->validate([
           'name' => 'required|min:3|max:100',
           'username' => 'required|min:3|max:100|unique:users,username',
           'email' => 'required|email|unique:users,email',
           'password' => 'required|min:4|max:100',
           'profile' => 'image'
        ]);

        if (\request()->file('profile'))
            $attributes['profile'] = \request()->file('profile')->store('profiles');

        $user = User::create($attributes);
        \auth()->login($user);
//        session()->flash('success', 'Your account has been created');
        return redirect('/')->with('success', 'Your account has been created!');
    }
}
