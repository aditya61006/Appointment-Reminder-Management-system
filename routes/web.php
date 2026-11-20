<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

Route::get('/home', function () {
    return view('home');
});

Route::get('/about/{name}',function($name){
   return view('/about',['name'=> $name]);
});

Route::get('/', function () {
    return view('welcome');
});

// route::redirect('/{anything}','/home');


Route::get('user',[UserController::class,'getUser']);



Route::get('/admin',[AdminController::class,'getAdminData']);