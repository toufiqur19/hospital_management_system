<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    public function schedules()
    {
        $appoinments = Appointment::all();
        return view('backend.appoinment.schedules',compact('appoinments'));
    }
}
