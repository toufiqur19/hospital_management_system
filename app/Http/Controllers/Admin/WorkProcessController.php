<?php

namespace App\Http\Controllers\admin;

use App\Models\WorkProces;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class WorkProcessController extends Controller
{
    // work process
    public function workProcess()
    {
        $works = WorkProces::get();
        return view('backend.work.work_process',compact('works'));
    }

    public function workCreate()
    {
        return view('backend.work.work_process_create');
    }

    public function workProcessCreate(Request $request)
    {
        $validate = $request->validate([
            'sort_description'=>'required',
            'number'=>'required',
            'description'=>'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif',
        ]);

        if($request->has('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $path = public_path('work');
            $file->move($path,$fileName);
        }

        WorkProces::create([
            'sort_description'=> $request->sort_description,
            'number'=> $request->number,
            'description'=> $request->description,
            'image' => $fileName,
        ]);

        return redirect('/admin/work-process')->with('message','work process create Successfully');
    }
    public function workProcessEdit($id)
    {
        $workProcess = WorkProces::find($id);
        return view('backend.work.work_process_edit',compact('workProcess'));
    }

    public function workProcessUpdate(Request $request, $id)
    {
        $workProcessUpdate = WorkProces::find($id);
        $validate = $request->validate([
            'sort_description'=>'required',
            'number'=>'required',
            'description'=>'required',
            'image' => 'nullable|mimes:jpeg,jpg,png,gif',
        ]);

        if($request->has('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $path = public_path('work');
            $file->move($path,$fileName);

            $imgPath = public_path('work/'.$workProcessUpdate->image);
            if(File::exists($imgPath))
            {
                File::delete($imgPath);
            }
            $workProcessUpdate->image = $fileName;
        }

        $workProcessUpdate->update([
            'sort_description'=> $request->sort_description,
            'number'=> $request->number,
            'description'=> $request->description,
        ]);

        return redirect('/admin/work-process')->with('message','work process Update Successfully');
    }

    public function workProcessDelete($id)
    {
        $workDelete = WorkProces::find($id);
        $imgPath = public_path('work/'.$workDelete->image);
        if(File::exists($imgPath))
        {
            File::delete($imgPath);
        }
        $workDelete->delete();
        return redirect('/admin/work-process')->with('message','work process item delete Successfully');
    }
}
