<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $user = User::create(request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:3', 'max:255', Rule::unique('users', 'username')],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => ['required', 'min:7', 'max:255'],
        ]));

        session()->regenerate();
        Auth::login($user);

        return redirect('/')->with('success', 'User Has Been Created Successfully!');
    }
}
