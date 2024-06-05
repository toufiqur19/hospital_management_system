<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function testimonials()
    {
        return view('backend.testimonials');
    }

    public function testimonialsCreate()
    {
        return view('backend.testimonials_create');
    }
}
