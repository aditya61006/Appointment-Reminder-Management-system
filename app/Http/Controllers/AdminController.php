<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    // login method  
   public function login(){
    return view('admin.login');
   }

    //  admin authentication to check login credentials 
   public function authenticate(Request $request){
          
        $credentials = $request->validate([
            'email'=> ['required', 'email'],
            'password'=> ['required', 'string'],
        ]);


        if(Auth::guard('admin')->attempt($credentials)){
            return redirect('/admin/dashboard');
        }
        else{
            return back()->with('error','Invalid Email or Password');
            
        }
   }


    //  admin dashboard method 
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function logout(Request $request){
      Auth::guard('admin')->logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return  redirect()->route('admin.login');
    }

}

