<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator; 

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('pages_login');
    }

    public function login(Request $request)
    {
        //dd('saswawa');
        $credentials = $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);
        //dd($credentials);
        // Retrieve the user based on the email provided
       if(Auth::attempt($credentials))
       {
        return redirect()->intended('home')->withSuccess('login sucessfull');
       }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
   public function logout(Request $request)
    {
        // Log the user out
        Auth::logout();

        // Clear the session data
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirect the user to the desired location after logout
        return redirect('/login');
    }
    
}