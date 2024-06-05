<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{
    public function appoinment()
    {
        return view('backend.appoinment.appoinment');
    }

    public function appoinmentCreate()
    {
        return view('backend.appoinment.appoinment_create');
    }
    //schedules
    public function schedules()
    {
        return view('backend.appoinment.schedules');
    }

    public function schedulesCreate()
    {
        return view('backend.appoinment.schedules_create');
    }

    //details
    public function details()
    {
        return view('backend.appoinment.details');
    }

    public function detailsCreate()
    {
        return view('backend.appoinment.details_create');
    }
}
