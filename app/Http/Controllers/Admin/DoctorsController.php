<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    public function doctors()
    {
        return view('backend.doctors');
    }

    public function doctorsCreate()
    {
        return view('backend.doctors_create');
    }
}
