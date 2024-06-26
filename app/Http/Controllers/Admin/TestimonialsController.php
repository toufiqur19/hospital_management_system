<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class TestimonialsController extends Controller
{
    public function testimonials()
    {
        $testimonials = Testimonial::all();
        return view('backend.testimonials.testimonials',compact('testimonials'));
    }

    public function testimonialsCreate()
    {
        return view('backend.testimonials.testimonials_create');
    }

    public function testimonialsCreateProcess(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'star' => 'required',
            'expert' => 'required',
            'comment' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
        ]);

        if($request->has('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $path = public_path('uploads/testimonial');
            $file->move($path,$fileName);
        }

        Testimonial::create([
            'name' => $request->name,
            'star' => $request->star,
            'expert' => $request->expert,
            'comment' => $request->comment,
            'image' => $fileName,
        ]);
        return redirect('/admin/testimonials')->with('message','Testimonial Crate Successfully');
    }

    public function testimonialsEdit($id)
    {
        $testimonials = Testimonial::find($id);
        return view('backend.testimonials.testimonials_edit',compact('testimonials'));
    }

    public function testimonialsUpdate(Request $request, $id)
    {
        $testimonialsUpdate = Testimonial::find($id);
        $request->validate([
            'name' => 'required',
            'star' => 'required',
            'expert' => 'required',
            'comment' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif',
        ]);
        if($request->has('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $path = public_path('uploads/testimonial');
            $file->move($path,$fileName);
            
            $imgPath = public_path('uploads/testimonial/'.$testimonialsUpdate->image);
            if(File::exists($imgPath)){
                File::delete($imgPath);
            }
            $testimonialsUpdate->image = $fileName;
        }

        
        $testimonialsUpdate->update([
            'name' => $request->name,
            'star' => $request->star,
            'expert' => $request->expert,
            'comment' => $request->comment,
        ]);
        return redirect('/admin/testimonials')->with('message','Testimonial Update Successfully');
    }

    public function testimonialsDelete($id)
    {
        $testimonialsDelete = Testimonial::find($id);
        $imgPath = public_path('uploads/testimonial/'.$testimonialsDelete->image);
        if(File::exists($imgPath)){
            File::delete($imgPath);
        }
        $testimonialsDelete->delete();
        return redirect('/admin/testimonials')->with('message','Testimonial Delete Successfully');
    }
}
