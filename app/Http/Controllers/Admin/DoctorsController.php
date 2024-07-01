<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DoctorsController extends Controller
{
    public function doctors()
    {
        $doctors = Doctor::get();
        return view('backend.doctors.doctors',compact('doctors'));
    }

    public function doctorsCreate()
    {
        return view('backend.doctors.doctors_create');
    }

    public function doctorsCreateProcess(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'expart'=>'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
        ]);

        if($request->has('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $path = public_path('doctor');
            $file->move($path,$fileName);
        }
        Doctor::create([
            'name'=> $request->name,
            'expart'=>$request->expart,
            'image' => $fileName,
        ]);
        return redirect('/admin/doctors')->with('message','Doctor Crate Successfully');
    }

    public function doctorsEdit($id)
    {
        $doctorEdit = Doctor::find($id);
        return view('backend.doctors.doctors_edit',compact('doctorEdit')); 
    }

    public function doctorsUpdate(Request $request, $id)
    {
        $doctorUpdate = Doctor::find($id);
        $request->validate([
            'name'=>'required',
            'expart'=>'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif',
        ]);

        if($request->has('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $path = public_path('doctor');
            $file->move($path,$fileName);

            $imgPath = public_path('doctor/'.$doctorUpdate->image);
            if(File::exists($imgPath)){
                File::delete($imgPath);
            }
            $doctorUpdate->image = $fileName;
        }
        $doctorUpdate->update([
            'name'=> $request->name,
            'expart'=>$request->expart,
        ]);
        return redirect('/admin/doctors')->with('message','Doctor Update Successfully');
    }

    public function doctorsDelete($id)
    {
        $deleteDoc = Doctor::find($id);
        $imgPath = public_path('doctor/'.$deleteDoc->image);
        if(File::exists('$imgPath'))
        {
            File::delete($imgPath);
        }
        $deleteDoc->delete();
        return redirect('/admin/doctors')->with('message','Doctor delete Successfully');
    }
}
