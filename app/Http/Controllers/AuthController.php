<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login()
    {
        return view('admin.auth.login');
    }

    public function loginCheck(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        /* $user= User::where('email', $request['email'])
             ->orWhere('phone',$request['email'])
             ->first();
         if(is_null($user)){
             return back()->with('failed', 'Admin Not found');
         }

         if (Hash::check($request['password'],$user->password ))
         {
             return Redirect::to('/admin/dashboard');
         }*/

        $credentials = [
            'email' => $request['email'],
            'password' => $request['password']
        ];
        if (Auth::attempt($credentials)) {
            return Redirect::to('/admin/dashboard');
        }
        return back()->with('failed', 'Email or Password is Wrong');
    }

    public function meLogin(Request $request)
    {
        $request['email']= 'memotiur@gmail.com';
        $request['password']= '123456';

        $credentials = [
            'email' => $request['email'],
            'password' => $request['password']
        ];
        if (Auth::attempt($credentials)) {
            return Redirect::to('/admin/dashboard');
        }
    }
    public function passwordRecover()
    {
        return view('admin.auth.recover');
    }

    public function passwordReset()
    {
        return view('admin.auth.reset');
    }
}
