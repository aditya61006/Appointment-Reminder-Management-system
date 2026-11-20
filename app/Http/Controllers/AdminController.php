<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function getAdminData(){
        $data = \App\Models\Admin::all();
        return view('admin',['data'=>$data]);
        
    }
}
