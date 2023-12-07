<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
use Laravel\Fortify\Rules\Password;

class AppAuthController
{
    public function login()
    {
        if(Auth::guard()->check()) // this means that the admin was logged in.
        {
            if(Auth::user()->role_type == 'admin'){
                return redirect()->intended('/admin/dashboard');
            }elseif(Auth::user()->role_type == 'user'){
                return redirect()->intended('/admin/panel');
            }else{
                Auth::guard()->logout();
                return redirect()->route('admin.login');
            }
        }
        return view('auth.app.login');
    }

    public function loginAction(Request $request)
    {
//        $request->validate($request, [
//            'email'   => 'required|email',
//            'password' => 'required|min:6'
//        ]);
        if (Auth::guard()->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            if(Auth::user()->role_type == 'admin'){
                return redirect()->intended('/admin/dashboard');
            }elseif(Auth::user()->role_type == 'user'){
                return redirect()->intended('/admin/panel');
            }else{
                Auth::guard()->logout();
                return redirect()->route('admin.login');
            }
        }
        return redirect()->route('admin.login');
    }

    public function logout()
    {
        if(Auth::guard()->check()) // this means that the admin was logged in.
        {
            Auth::guard()->logout();
            return redirect()->route('admin.login');
        }
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerAction(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'string|max:20',
            'country' => 'string|max:20',
            'password' => 'required|string|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }

    protected function passwordRules()
    {
        return ['required', 'string', 'confirmed'];
    }
}
