<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Carusel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminHomeController extends Controller
{
    public function carousel()
    {
        $carousels = Carusel::get();
        return view('backend.carousel.carousel',compact('carousels'));
    }

    public function carouselCreate()
    {
        return view('backend.carousel.carousel_create');
    }

    public function carouselCreateProcess(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'sort_description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $path = 'uploads/carousel';
        $request->image->move($path, $imageName);

        Carusel::create([
            'title'=>$request->title,
            'sort_description' => $request->sort_description,
            'image' => $imageName,
        ]);
        return redirect('/admin/carousel')->with('message', 'carousel Created Successfully');
    }

    public function carouselEdit($id)
    {
        $carousels = Carusel::find($id);
        return view('backend.carousel.carousel_edit',compact('carousels'));
    }

    public function carouselUpdate(Request $request, $id)
    {
        $carouselData = Carusel::find($id);
        $validate = $request->validate([
            'title' => 'required',
            'sort_description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif',
        ]);

        if(isset($request->image)){
        $imageName = time().'.'.$request->image->extension();
        $path = 'uploads/carousel';
        $request->image->move($path, $imageName);
        $carouselData->image = $imageName;
        }

        $carouselData->title =$request->title;
        $carouselData->sort_description = $request->sort_description;
        $carouselData->save();
        return redirect('/admin/carousel')->with('message', 'carousel update Successfully');
    }


    public function carouselDelete($id)
    {
        $delete = Carusel::find($id);
        $delete->delete();
        return redirect('/admin/carousel')->with('message', 'carousel items delete Successfully');
    }
}
