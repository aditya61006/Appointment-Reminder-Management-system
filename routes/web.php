<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    if (!Auth::guard('admin')->check()) {
        return redirect()->route('admin.login');
        
    }else{
        return redirect()->route('admin.dashboard');
    }
});

// Route::get('/about/{name}',function($name){
//    return view('/about',['name'=> $name]);
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// // route::redirect('/{anything}','/home');


// Route::get('user',[UserController::class,'getUser']);




Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/authenticate', [AdminController::class, 'authenticate'])->name('admin.authenticate');


Route::middleware('admin')->group(function (){
    
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
    Route::get('/admin/appointments', [AppointmentController::class, 'index'])->name('admin.appointments.index');
    Route::get('/admin/appointment/create',[AppointmentController::class,'create'])->name('admin.appointments.create');
    Route::post('/admin/appointments', [AppointmentController::class, 'store'])->name('admin.appointments.store');
    Route::get('/admin/appointments/{id}/edit',[AppointmentController::class,'edit'])->name('admin.appointments.edit');
});

