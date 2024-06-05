<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {
        return view('backend.service');
    }

    public function serviceCreate()
    {
        return view('backend.service_create');
    }
}
