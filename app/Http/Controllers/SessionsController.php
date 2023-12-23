<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        $attributes = request()->validate([
           'email' => ['required', 'email', 'max:255'],
           'password' => ['required', 'min:7', 'max:255']
        ]);

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your Provided credentials could not be verified.'
            ]);
        }

        session()->regenerate();
        return redirect('/')->with('success', 'Welcome Back!');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/')->with('success', 'GOOD BYE!');
    }
}
