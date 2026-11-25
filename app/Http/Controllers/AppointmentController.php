<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AppointmentController extends Controller
{
    public function index(){
        $appointments = Appointment::all(); // getting all records from db table appointments
        return  view('admin.appointments.index',compact('appointments'));
    }

    public function create(){
         return view('admin.appointments.create');
    }
    public function store(Request $request)
    {
       $validate = $request->validate([
        'customer_name'=>  'required|string|max:225',
         'customer_email'=> 'required|email',
         'phone'=> 'required|string|max:10',
         'appointment_date'=> 'required|date',
          'appointment_time'=> 'required',
          'description'=> 'nullable|string',
       ]);

       Appointment::create($validate); // create query from appointment model 
       return redirect()->route('admin.appointments.index')->with('success','Appointment created successfully');
       

    }

    public function edit($id){
        $appointment = Appointment::findOrFail($id);
        return view('admin.appointments.edit',compact('appointment'));
    }

    public function update(Request $request, $id ){
        $appointment = Appointment::findOrFail($id);
        $validate = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email'=> 'required|email',
            'phone' => 'required|string|max:10',
            'appointment_date' => 'required|date',
            'appointment_time' => 'required',
            'description' => 'nullable|string',
        ]);

        // error_log($appointment); 
        $appointment->update($validate);  

        return redirect()->route('admin.appointments.index')->with('success','Appointment update successfully!');
    }

    public function view($id){
        $appointment = Appointment::findOrFail($id);
        return view('admin.appointments.show',compact('appointment'));
    }

    public function delete($id){
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();

        return redirect()->route('admin.appointments.index')->with('success','Appointment cancelled successfully!');
    }
}
