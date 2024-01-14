<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    public function create()
    {
        return view('session.create');
    }

    public function store()
    {
        $attributes = \request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!auth()->attempt($attributes))
            throw ValidationException::withMessages(['email' => 'Your provided credentials could\'t be verified!']);

        // return back()->withErrors(['email' => 'Your can\'t login bro!']);

        /* why we use 'session()->regenerate()'?
          ******************************************************************
          Session Fixation is a web attack technique.
          The attacker tricks the user into using a specific session ID.
          After user logs in to the web application using
          the provided session ID, the attacker uses this valid session ID
          to gain access to the user's account.
          ******************************************************************
        */

        session()->regenerate();
        return redirect('/')->with('success', 'Your are login now!');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Your are logout');
    }

}
