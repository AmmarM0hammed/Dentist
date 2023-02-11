<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        if(!auth()->check())
            return view('auth.login');
        return view('admin.dashboard');
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
            return redirect()->route("dashboard");

       return redirect()->back()->with('error',"Wrong E-mail or Password");
    }
}
