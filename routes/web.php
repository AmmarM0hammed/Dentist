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
    Route::get("/login",[AuthController::class ,'index']);
});

