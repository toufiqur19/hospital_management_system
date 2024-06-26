<?php

namespace App\Http\Controllers\Admin;

use App\Models\Carusel;
use App\Models\BannerImage;
use Illuminate\Http\Request;
use App\Models\CarouselImage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class AdminHomeController extends Controller
{
    public function carousel()
    {
        $carousels = BannerImage::get();
        return view('backend.carousel.carousel',compact('carousels'));
    }

    public function carouselCreate()
    {
        return view('backend.carousel.carousel_create');
    }

    public function carouselCreateProcess(Request $request)
    {
        $validate = $request->validate([
            'image' => 'required|mimes:jpeg,jpg,png,gif',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $path = 'uploads/carousel';
        $request->image->move($path, $imageName);

        BannerImage::create([
            'image' => $imageName,
        ]);
        return redirect('/admin/carousel')->with('message', 'carousel image Created Successfully');
    }

    public function carouselEdit($id)
    {
        $carousels = BannerImage::find($id);
        return view('backend.carousel.carousel_edit',compact('carousels'));
    }

    public function carouselUpdate(Request $request, $id)
    {
        $carouselData = BannerImage::find($id);
        $validate = $request->validate([
            'image' => 'nullable|mimes:jpeg,jpg,png,gif',
        ]);

        if(isset($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $path = 'uploads/carousel';
            $request->image->move($path, $imageName);
           
            $image_path = public_path('uploads/carousel/'.$carouselData->image);
            if(File::exists($image_path))
            {
                File::delete($image_path);
            }

            $carouselData->image = $imageName;
        }

        $carouselData->save();
        return redirect('/admin/carousel')->with('message', 'carousel image update Successfully');
    }


    public function carouselDelete($id)
    {
        $delete = BannerImage::find($id);
        $image_path = public_path('uploads/carousel/'.$delete->image);
        if(File::exists($image_path))
        {
            File::delete($image_path);
        }
        $delete->delete();
        return redirect('/admin/carousel')->with('message', 'carousel items delete Successfully');
    }
}
