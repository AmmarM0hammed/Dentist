<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppoenmitController;

//Website
Route::get('/', function () { return view('app.landing'); });
Route::get('/about', function () { return view('app.pages.about'); });
// Route::get('/contact', function () { return view('app.pages.contact'); });
Route::get('/service', function () { return view('app.pages.service'); });
Route::get('/book', function () { return view('app.pages.bookapp'); });
Route::post('/bookapp',[AppoenmitController::class , 'create'])->name('bookapp');


//Admin Panel
Route::prefix('/admin')->group(function(){
    //Login
    Route::get('/',function(){return redirect()->back();});
    Route::get("/login",[AuthController::class ,'index']);
    Route::post("/login",[AuthController::class ,'login'])->name('login');
    Route::get("/logout",[AuthController::class ,'logout'])->name('logout');

    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard',function(){
            return view('admin.dashboard');
        })->name('dashboard');
        Route::get('/users' , [UserController::class , 'index'])->name('admin.user');
        Route::post('/user' , [UserController::class , 'create'])->name('admin.user.add');
        Route::post('/user-delete',[UserController::class , 'delete'])->name('admin.user.delete');
        Route::get('/request',[AppoenmitController::class , 'index'])->name('admin.request');

        Route::post('/request',[AppoenmitController::class , 'done'])->name('admin.request.done');
        Route::post('/request-delete',[AppoenmitController::class , 'delete'])->name('admin.request.delete');

        Route::get('/list',[AppoenmitController::class , 'list_view'])->name('admin.list');
        Route::post('/request-restore',[AppoenmitController::class , 'restore'])->name('admin.request.restore');
    
    });
   
});

