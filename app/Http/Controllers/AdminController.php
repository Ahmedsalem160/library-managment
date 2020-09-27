<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginAdmin;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function resetPassword(){
        return view('admin.auth.resetPassword');
    }
    public function reset(Request $request){

        $this->validate($request,['current'=>'required',
            'new'=>'required|min:8',
            'confirmNew'=>'required|min:8']);
        if ($request->new == $request->confirmNew){//
            $admin=Admin::find($request->current);
            $admin->password=Hash::make($request->new);
            $admin->save();
            return redirect()->route('adminLogin');
        }
        return "new Password doesn't match with other";
    }

    public function dash(){
        return view('admin.dashboard.index');
    }
}
