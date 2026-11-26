<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Reminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function index(Request $request){
        $reminders = Reminder::with('appointment')->latest()->get();
        return view('admin.reminders.index',compact('reminders'));
    }

    public function create(){
        $appointments = Appointment::where('status','pending')->orderBy('appointment_date')->get();
        return view('admin.reminders.create',compact('appointments'));
    }
}
