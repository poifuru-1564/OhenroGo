<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Pest\Mutate\Mutators\Visibility\FunctionPublicToProtected;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{


    public function showRegister ()
    {
        return view('register');
    }

    public function showLogin()
    {
        return view('login');
    }

    public function showRequestReset()
    {
        return view('requestReset');
    }

    public function showResetPassword(string $token)
    {
        return view('resetPassword', ['token' => $token]);
    } 

    public function register(Request $request)
    {
        $requestUser = $request->validate([
            'name' => ['required', 'unique:users,name'],
            'email' => ['requied', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::default()],
        ]);

        $user = User::create($requestUser);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function login(Request $request)
    {
        $requestUser = $request->validate([
            'name' => ['required', 'unique:users,name'],
            'email' => ['requied', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'confirmed', Rules\Password::default()],
        ]);

        if (Auth::attempt($requestUser)) 
        {
            $request->session()->regenerate(); //regenerate session id
            return redirect()->route('home');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('showLogin');
    }

    public function requestReset(Request $request)
    {
        $request->validate(['email' => ['required', 'email']]);
    
        $status = Password::sendResetLink(
            $request->only('email')
        );
    
        return $status === Password::ResetLinkSent // check if link was sent successfully
            ? back()->with(['status' => __($status)]) //sends status (success) message to the session -> show inside requestReset.blade
            : back()->withErrors(['email' => __($status)]); // otherwise show an error

    }
    
    
    function ResetPassword(Request $request) {
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8','confirmed'],
        ]);
    
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
    
                $user->save();
    
                event(new PasswordReset($user));  //send email to notify that password was changed
            }
        );
    
        return $status === Password::PasswordReset //if password was successfully reset
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }
    
}
