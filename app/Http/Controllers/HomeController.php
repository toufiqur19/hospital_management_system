<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\About;
use App\Models\Doctor;
use App\Models\Carusel;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Working;
use App\Models\WorkProces;
use App\Models\Appointment;
use App\Models\BannerImage;
use App\Models\Categorie;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $carousels = BannerImage::get();
        $carouselsData = Carusel::get();
        $categories = Categorie::get();
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
            "categories"
        ));
    }

    public function abouts(){
        $categories = Categorie::get();
        $abouts = About::get();
        $faqs = Faq::get();
        $workingHoures = Working::get();
        return view('fontend.about',compact('abouts','faqs','workingHoures','categories'));
    }
    public function departments(){
        $departments = Service::get();
        $categories = Categorie::get();
        return view('fontend.departments',compact('departments','categories'));
    }

    public function doctors()
    {
        $doctors = Doctor::get();
        return view('fontend.doctors',compact('doctors'));
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

    public function appointment()
    {
        $categories = Categorie::get();
        return view('fontend.appointment',compact('categories'));
    }

    public function blog()
    {
        $departments = Categorie::get();
        $tags = Categorie::get();
        $blogs = Blog::get();
        $recentBlogs = Blog::latest()->get();
        return view('fontend.blog',compact('blogs','departments','tags','recentBlogs'));
    }

    public function blogDetails($id)
    {
        $departments = Categorie::get();
        $tags = Categorie::get();
        $blogDetails = Blog::find($id);
        $recentBlogs = Blog::latest()->get();
        return view('fontend.blog_details',compact('departments','tags','blogDetails','recentBlogs'));
    }

    public function departmentsDetails($id)
    {
        $categories = Categorie::get();
        $faqs = Faq::get();
        $workingHoures = Working::get();
        $departmentsDetails = Service::find($id);
        $doctors = Doctor::where('expart', '=', 'medicine')->get();
        return view('fontend.departments_details',compact('categories','faqs','workingHoures','departmentsDetails','doctors'));
    }
}
