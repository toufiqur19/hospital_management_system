<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminAboutController extends Controller
{
    public function adminAbout()
    {
        $about = About::get();
        return view('backend.about.about',compact('about'));
    }

    public function adminAboutCreate()
    {
        return view('backend.about.about_create');
    }
    public function AboutCreateProcess(Request $request)
    {
        $validate = $request->validate([
            'heading' => 'required',
            'title' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'service_time' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
        ]);
    

        if($request->has('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'about';
            $file->move($path, $filename);
        }

        About::create([
            'heading' => $request->heading,
            'title' => $request->title,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'service_time' => $request->service_time,
            'description' => $request->description,
            'image' => $filename,
        ]);
        return redirect('/admin/about')->with('message', 'About Created Successfully');

    }

    public function AboutEdit($id)
    {
        $abouts = About::find($id);
        return view('backend.about.about_edit',compact('abouts'));
    }

    public function AboutUpdate(Request $request, $id)
    {
        $AboutUpdate = About::find($id);
        $validate = $request->validate([
            'heading' => 'required',
            'title' => 'required',
            'email' => 'required|email',
            'mobile' => 'required',
            'service_time' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif',
        ]);
    
        if($request->has('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'about';
            $file->move($path, $filename);

            $image_path = public_path('about/'.$AboutUpdate->image);
            if(File::exists($image_path))
            {
                File::delete($image_path);
            }
            $AboutUpdate->image = $filename;
        }

        $AboutUpdate->update([
            'heading' => $request->heading,
            'title' => $request->title,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'service_time' => $request->service_time,
            'description' => $request->description,
        ]);
        return redirect('/admin/about')->with('message', 'About item update Successfully');

    }

    public function AboutDelete($id)
    {
        $destroy = About::find($id);
        $image_path = public_path('about/'.$destroy->image);
        if(File::exists($image_path))
        {
            File::delete($image_path);
        }
        $destroy->delete();
        return redirect('/admin/about')->with('message', 'About item detele Successfully');
    }
}
