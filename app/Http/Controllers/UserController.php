<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function register(Request $request) {
        $inputs = $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email' )],
            'password' => ['required', 'min:6', 'confirmed'],
        ]);

        $inputs['password'] = bcrypt($inputs['password']);

        $user = User::create($inputs);

        auth()->login($user);

        return redirect('/');
    }

    public function login(Request $request) {
        $inputs = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if(auth()->attempt(['email' => $inputs['email'], 'password' => $inputs['password']])) {
            return redirect('/');
        } else {
            return redirect('/login')->with('error', 'Login Failed!');
        }
    }

    public function logout(Request $request) {
        auth()->logout();
        return redirect('/login');
    }
}