<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function blog()
    {
        $blogs = Blog::get();
        return view('backend.blog.blog',compact('blogs'));
    }

    public function blogCreate()
    {
        return view('backend.blog.blog_create');
    }

    public function blogCreateProcess(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
        ]);

        if($request->has('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/blog';
            $file->move($path, $filename);
        }

        Blog::create([
            'name' => $request->name,
            'date' => $request->date,
            'description' => $request->description,
            'image' => $filename,
        ]);
        return redirect('/admin/blog')->with('message','Blog Create Successfully');
    }

    public function blogEdit($id)
    {
        $blogs = Blog::find($id);
        return view('backend.blog.blog_edit',compact('blogs'));
    }

    public function blogUpdate(Request $request, $id)
    {
        $blogUpdate = Blog::find($id);
        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif',
        ]);
        if($request->has('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/blog';
            $file->move($path, $filename);

            $file_path = public_path('uploads/blog/'.$blogUpdate->image);
            if(File::exists($file_path))
            {
                File::delete($file_path);
            }
            $blogUpdate->image = $filename;
        }
        else
        {
            $filename = $blogUpdate->image;
        }
        $blogUpdate->update([
            'name' => $request->name,
            'date' => $request->date,
            'description' => $request->description,
        ]);
        return redirect('/admin/blog')->with('message','Blog Update Successfully');
    }
    public function blogDelete($id)
    {
        $blogDelete = Blog::find($id);
        $file_path = public_path('uploads/blog/'.$blogDelete->image);
        if(File::exists($file_path))
        {
            File::delete($file_path);
        }
        $blogDelete->delete();
        return redirect('/admin/blog')->with('message','Blog Delete Successfully');
    }
}