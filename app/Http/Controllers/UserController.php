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
            return redirect('/login')->with('error', 'Incorrect Credentials!');
        }
    }

    public function admins(Request $request) {
        $admin = User::orderBy("id","desc")->get();
        return view("admins", ['admins' => $admin]);
    }

    public function addAdmin(Request $request) {
        $inputs = $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email', Rule::unique('users', 'email' )],
            'password' => ['required', 'min:6', 'confirmed'],
        ]);

        $inputs['password'] = bcrypt($inputs['password']);

        User::create($inputs);

        return redirect('/addAdmin')->with('success', 'Admin has been created');
    }   

    public function editProfile(User $admin,  Request $request) {
        $inputs = $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6', 'confirmed'],
        ]);

        $inputs['password'] = bcrypt($inputs['password']);

        $admin->update($inputs);

        auth()->login($admin);

        return redirect('/profile')->with('success', 'Profile saved');
    }   


    public function getAdmin(User $admin) {
        return view('singleAdmin', ['user'=> $admin]);
    }

    public function editAdmin(User $admin, Request $request) {
        $inputs = $request->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
            'email' => ['required', 'email'],
        ]);

        $admin->update($inputs);

     
        return redirect('/admins/'.$admin->id )->with('success', 'Admin has been edited!');
    }

    public function search(Request $request) {
        $inputs = $request->validate([
            'text' => [],
        ]);

        $admin = User::search($inputs['text'])->get();
        return view("admins", ['admins' => $admin]);
    }

    public function deleteAdmin (User $admin) {
        $admin->delete();
        return redirect('/admins')->with('success', 'User has been deleted!');
    }

    public function logout(Request $request) {
        auth()->logout();
        return redirect('/login');
    }
}