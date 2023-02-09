<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }
    public function logout(){
        Auth::logout();
        return redirect("/");
    }
    public function login(Request $request){
        $data = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);
        // $request->validate([
        //     'code' => ['required'],
        // ]);

       // dd($data);
        if(Auth::attempt($data))
            return response(Auth::user()->name);

        return back()->with("error" , "Wrong E-mail or Password");
    }
}
