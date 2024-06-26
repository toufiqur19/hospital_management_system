<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function service()
    {
        $services = Service::get();
        return view('backend.service.service',compact('services'));
    }

    public function serviceCreate()
    {
        return view('backend.service.service_create');
    }

    public function serviceCreateProcess(Request $request)
    {
        $request->validate([
            'icon' => 'required',
            'department' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
        ]);

        if($request->has('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $path = public_path('uploads/service');
            $file->move($path,$fileName);
        }

        Service::create([
            'icon' => $request->icon,
            'department' => $request->department,
            'description' => $request->description,
            'image' => $fileName,
        ]);
        return redirect('/admin/service')->with('message','Service Create Successfully');
    }

    public function serviceEdit($id)
    {
        $services = Service::find($id);
        return view('backend.service.service_edit',compact('services'));
    }

    public function serviceUpdate(Request $request, $id)
    {
        $serviceUpdate = Service::find($id);
        $request->validate([
            'icon' => 'required',
            'department' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif',
        ]);

        if($request->has('image'))
        {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $path = public_path('uploads/service');
            $file->move($path,$fileName);

            $imgPath = public_path('uploads/service/'.$serviceUpdate->image);
            if(File::exists($imgPath))
            {
                File::delete($imgPath);
            }
            $serviceUpdate->image = $fileName;
        }

        $serviceUpdate->update([
            'icon' => $request->icon,
            'department' => $request->department,
            'description' => $request->description,
        ]);
        return redirect('/admin/service')->with('message','Service Update Successfully');
    }

    public function serviceDelete($id)
    {
        $servicesDelete = Service::find($id);
        $imgPath = public_path('uploads/service/'.$servicesDelete->image);
        if(File::exists($imgPath))
        {
            File::delete($imgPath);
        }
        $servicesDelete->delete();
        return redirect('/admin/service')->with('message','Service Delete Successfully');
    }
}
