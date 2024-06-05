<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAboutController extends Controller
{
    public function adminAbout()
    {
        return view('backend.about');
    }

    public function adminAboutCreate()
    {
        return view('backend.about_create');
    }
}
