<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }
    public function connect(LoginRequest $request){
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('dashboard')->withSuccess('Login');
        }
        return redirect()->route('auth.login')->with('error', 'Invalid credentials');
    }
    public function show_change_password(){
        return view('pages.settings.change-password');
    }
    public function change_password(Request $request)
    {
        // Validate data

        $validateData = $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:8'
        ]);

        // Select current user connected
        $user = Auth::user();

        // Check if the old password entered is correct
        if(!Hash::check($request->old_password, $user->password)){
            return redirect()->route('change-password-settings')->with('error', 'Invalid old password');
        }

        // Update password
        $user->update([
            'password' => Hash::make($validateData['password'])
        ]);
        return redirect()->route('change-password-settings')->with('success', 'Password updated');
    }
    public function forget()
    {
        return view('pages.auth.forgot');
    }
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
