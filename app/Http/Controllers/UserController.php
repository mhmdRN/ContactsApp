<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $formFields=$request->validate([
            'name'=>['required','min:3'],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>['required','confirmed','min:6']
        ]);
        $formFields['password']=\bcrypt($formFields['password']);
        $user=User::create($formFields);
        auth()->login($user);
        return \redirect('/')->with('message','User created and logged in.');
    }

    public function login()
    {
        return view('user.login');
    }

    public function logout()
    {
            auth()->logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();

            return redirect('/login')->with('message','You have been logged out.');
    }

    public function authenticate(Request $request)
    {
        $formFields=$request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);
       
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/')->with('message','You are logged in');
        }
       return back()->withErrors(['email','Wrong Credentials!'])->onlyInput('email');
       
    }
}
