<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appoenmit;
class AppoenmitController extends Controller
{
    public function index(){
        $appoenmits = Appoenmit::where('state' , "=" , "1")->orderBy('id', 'desc')->paginate(30);
        return view('admin.request' , compact('appoenmits'));
    }
    public function create(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|email',
            'phone' => 'required|min:11|numeric',
            'select'=> "required|max:255|",
            'description'=> "required|max:255",
        ]);
        $create = Appoenmit::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=>$request->phone,
            'vist-type'=>$request->select,
            'bio'=> $request->description,
        ])->save();

        return back()->with("success" , "تم حجز موعد سوف يتم الاتصال بكم قريباً");
    }

    //============== Action Button ==============

    public function Done(Request $request){
        if(!empty($request->id)){
            Appoenmit::where('id','=',$request->id)
            ->update(['state'=>0]);
            return redirect()->back()->with('success',"Done ");
        }
        return redirect()->back()->with('error',"");
    }
    public function delete(Request $request){
        if(!empty($request->id)){
            Appoenmit::where('id','=',$request->id)
            ->delete();
            return redirect()->back()->with('success',"Done");
        }
        return redirect()->back()->with('error',"");
    }

    public function restore(Request $request){
        if(!empty($request->id)){
            Appoenmit::where('id','=',$request->id)
            ->update(['state'=>1]);
            return redirect()->back()->with('success',"Done ");
        }
        return redirect()->back()->with('error',"");
    }
    //============== Action Button ==============


    public function list_view(){
        $appoenmits = Appoenmit::where('state' , "=" , "0")->orderBy('id', 'desc')->paginate(30);
        return view('admin.list' , compact('appoenmits'));
    }
}
