<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class RegisterController extends Controller
{
    public function index()
    {
        return view("Auth.Register");
    }

    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),

            'account_type' => 'user',
            'position' => 'عضو من الاكبادس',
            'likes_count' => 0,
        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->route('home')->with('success', 'مبروك يا كبدس! بقيت واحد من الاكبادس 😂');
    }
}
