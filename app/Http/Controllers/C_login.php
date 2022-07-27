<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class C_login extends Controller
{
    public function index(){
        return view('adminView.login',[
            'title'=>'login'
        ]);
    }

    public function store(Request $request){
        $message = $request->validate([
            'email'=>'required|email:dns',
            'password'=>'required'
        ]);


        if(Auth::attempt($message)){
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->with("error", "Login failed");
    }
    
    public function update(Request $request){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}