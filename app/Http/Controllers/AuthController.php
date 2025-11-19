<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function showRegister ()
    {
        return view('auth.register');
    }

    public function showLogin()
    {
        return view('auth.login');
    }

    public function showResetPassword()
    {
        return view('auth.resetPassword');
    } 

    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'max:25', 'unique:users,name'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8'],
            'role_id' =>['required']
        ]);

        $user = User::create($validated);
        
        if ($user) // successfully created
        {
            Auth::login($user);
            return redirect()->route('home');
        }
        else
        {
            return back();
        }
    }


    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($validated)) 
        {
            $request->session()->regenerate(); //regenerate session id
            $user = Auth::user();
            return redirect()->route('home')->with('user', $user);
        }
        else
        {
            return back()->withErrors('These credentials do not match our records.');
        }        
    }


    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('showLogin');
    }
    
    
    public function ResetPassword(Request $request) {
        $validated = $request->validate([
            'name' => ['required', 'max:25'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $userEmail = User::where('name', $validated['name'])->value('email');
        if ($userEmail != $validated['email'])
        {
            return back()->withErrors(['email' => 'Email does not match your username']);
        }

        $user_id = User::where('name', $validated['name'])->value('id');
        $user = User::find($user_id);

        $user->forceFill([
            'password' => Hash::make($validated['password'])
        ])->setRememberToken(Str::random(60));

        $status = $user->save();
        
        if ($status)  // if successful
        {
            return redirect()->route('login')->with('message', 'Password Updated Successfully.');
        }
        else
        {
            return back();
        }
    }
}
