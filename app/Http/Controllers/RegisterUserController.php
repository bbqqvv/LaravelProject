<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;


class RegisterUserController extends Controller
{
    //
    public function register()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'min:5'],
            'email' => 'required|email|unique:users',
            'password' => ['required', 'string', 'min:8', 'confirmed', Password::defaults()],
        ]);
        // Create the user...
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // Log the user in...
        auth()->login($user);
        // Redirect to the posts index...
        return to_route('posts.index');
    }
}
