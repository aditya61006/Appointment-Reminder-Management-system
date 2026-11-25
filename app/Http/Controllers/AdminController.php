<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

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
        $totalAppointments = Appointment::count();

        $todaysAppointments = Appointment::where('appointment_date',today())->count();
        $pendingAppointments = Appointment::where('status','pending')->count();
        $completedAppointments = Appointment::where('status','completed')->count();
        $recentAppointments = Appointment::latest()->limit(3)->get();
        return view('admin.dashboard',compact('totalAppointments','todaysAppointments','pendingAppointments','completedAppointments','recentAppointments'));


    }

    public function logout(Request $request){
      Auth::guard('admin')->logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return  redirect()->route('admin.login');
    }

}

