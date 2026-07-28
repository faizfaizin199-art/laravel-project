<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    //

    public function login()
    {
        return view('admin.login');
    }

    public function actionLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        // Auth::attempt: ngecek email dan password betul
        if (Auth::attempt($credentials)){
            // Authentication passed...
            $request->session()->regenerate();
            $user = Auth::user();
            session(['user_id' => $user->id, 'user_name' => $user->name]);
            return redirect()->intended('/admindashboard');
        }

        return redirect()->back()->withErrors([
            'email' => 'invalid credentials.']);

    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
