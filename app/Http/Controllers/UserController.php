<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::get();
        return view('admin.users' , compact('users'));
    }

    public function create(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255|email',
            'phone' => 'required|min:11|numeric',
            'password'=> "required|max:255|min:8",
            'retype-password'=> "required|max:255|same:password",
        ]);
        $create = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=>$request->phone,
            'roll'=>$request->roll,
            'password'=> Hash::make($request->password),
        ])->save();
        
        return back()->with("success" , "Add User Done");
    }


    public function delete(Request $request){
        if(auth()->user()->roll == "admin" && auth()->user()->id != $request->id){
            if($request->id != 1){
                $res=User::where('id',$request->id)->delete();
                return redirect()->back();
            }
            else
                 return redirect()->back()->with('Error-manager',"Can't Delete Manager");
        }
        return redirect()->back()->with('del-error',"Error! Task failed successfully.");
    }
}
