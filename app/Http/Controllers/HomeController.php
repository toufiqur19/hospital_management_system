<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Doctor;
use App\Models\Carusel;
use App\Models\Service;
use App\Models\WorkProces;
use App\Models\BannerImage;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $carousels = BannerImage::get();
        $carouselsData = Carusel::get();
        $abouts = About::get();
        $workProcess = WorkProces::get();
        $doctors = Doctor::get();
        $services = Service::get();
        $testimonials = Testimonial::get();
        return view('fontend.home',compact(
            "carousels",
            "carouselsData",
            "abouts",
            "workProcess",
            "doctors",
            "services",
            "testimonials"
        ));
    }
    
}
