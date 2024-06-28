<?php

namespace App\Http\Controllers;

use App\Models\Working;
use Illuminate\Http\Request;

class WorkingHoursController extends Controller
{

    public function workingHours()
    {
        $workingHours = Working::all();
        return view('backend.working_houre.working_houre',compact('workingHours'));
    }

    public function workingHoursCreate()
    {
        return view('backend.working_houre.working_houre_create');
    }

    public function workingHoursCreateProcess(Request $request)
    {
        $request->validate([
            'week_name' => 'required',
            'time' => 'required',
        ]);
        Working::create([
            'week_name' => $request->week_name,
            'time' => $request->time,
        ]);

        return redirect()->route('admin.workingHours')->with('message', 'Created Successfully');
    }

    public function workingHoursEdit($id)
    {
        $workingHours = Working::find($id);
        return view('backend.working_houre.working_houre_edit',compact('workingHours'));
    }

    public function workingHoursUpdate(Request $request, $id)
    {
        $workingHours = Working::find($id);
        $request->validate([
            'week_name' => 'required',
            'time' => 'required',
        ]);

        $workingHours->update([
            'week_name' => $request->week_name,
            'time' => $request->time,
        ]); 

        return redirect()->route('admin.workingHours')->with('message', 'Updated Successfully');
    }

    public function workingHoursDelete($id)
    {
        $workingHours = Working::find($id);
        $workingHours->delete();
        return redirect()->route('admin.workingHours')->with('message', 'Deleted Successfully');
    }
}
