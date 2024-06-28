<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\About;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Carusel;
use App\Models\Service;
use App\Models\WorkProces;
use App\Models\BannerImage;
use App\Models\Contact;
use App\Models\Testimonial;
use App\Models\Working;
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
        $blogs = Blog::get();
        $workingHoures = Working::get();
        return view('fontend.home',compact(
            "carousels",
            "carouselsData",
            "abouts",
            "workProcess",
            "doctors",
            "services",
            "testimonials",
            "blogs",
            "workingHoures",
        ));
    }

    public function appointmentCreateProcess(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'department' => 'required',
        ]);
       

        Appointment::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'time' => $request->time,
            'department' => $request->department,
        ]);

        return redirect()->back()->with('message','Appointment Create Successfully');
    }

    public function contact()
    {
        return view('fontend.contact');
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
        return redirect()->back()->with('message','Contact Create Successfully');
    }
}
