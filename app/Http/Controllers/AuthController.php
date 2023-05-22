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
        $request->validate([
            'old'=>'required',
            'new'=>'required|min:6',
            'conf'=> 'required|min:6'
        ]);
        $credentials = $request->only('old');
        if(Auth::attempt($credentials)){
            if($request->new == $request->conf){
                User::updated([ 'password' => Hash::make($request->new)]);
            }
        }
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
