<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('app.landing');
});


Route::get('/about', function () {
    return view('app.pages.about');
});


Route::get('/contact', function () {
    return view('app.pages.contact');
});

Route::get('/service', function () {
    return view('app.pages.service');
});
Route::get('/book', function () {
    return view('app.pages.bookapp');
});

Route::prefix('/admin')->group(function(){
    Route::get('/',function(){return redirect()->back();});
    Route::get("/login",[AuthController::class ,'index']);
    Route::post("/login",[AuthController::class ,'login'])->name('login');
    Route::get("/logout",[AuthController::class ,'logout'])->name('logout');
    
    Route::get('/dashboard',function(){
        return view('admin.dashboard');
    });
});

