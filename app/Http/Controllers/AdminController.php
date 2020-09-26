<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginAdmin;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function logged(LoginAdmin $request){

        if(auth()->guard('admin')->attempt(['email'=>$request->input("email") , 'password'=>$request->input("password")])){
            return redirect()->route('dash');//intended('/index');
        }

        return redirect()->back()->withInput($request->only('email'));
    }


    public function dash(){
        return view('admin.dashboard.index');
    }
}
