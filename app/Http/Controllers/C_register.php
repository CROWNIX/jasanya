<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class C_register extends Controller
{
    public function index(){
        return view('adminView.register' ,[
            'title'=>'Register'
        ]);
    }

    public function store(Request $request){
        $message = $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email:rfc,dns|unique:users',
            'password'=>'required'
        ]);

        $message['password'] = Hash::make($message['password']);
        User::create($message);
        return redirect('/admin')->with('success','register berhasil');
    }
}