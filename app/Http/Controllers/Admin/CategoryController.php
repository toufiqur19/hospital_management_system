<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
        $categories = Categorie::all();
        return view('backend.category.department',compact('categories'));
    }

    public function categoryCreate()
    {
        return view('backend.category.department_create');
    }

    public function categoryCreateProcess(Request $request)
    {
        $request->validate([
            'department_name' => 'required',
            'tags' => 'required',
        ]);

        Categorie::create([
            'department_name' => $request->department_name,
            'tags' => $request->tags,
        ]);

        return redirect('/admin/category')->with('message','Department Create Successfully');
        
    }

    public function categoryEdit($id)
    {
        $categories = Categorie::find($id);
        return view('backend.category.department_edit',compact('categories'));
    }

    public function categoryUpdate(Request $request, $id)
    {
        $category = Categorie::find($id);
        $request->validate([
            'department_name' => 'required',
            'tags' => 'required',
        ]);
        
        $category->update([
            'department_name' => $request->department_name,
            'tags' => $request->tags,
        ]);
        return redirect('/admin/category')->with('message', 'Updated Successfully');
    }

    public function categoryDelete($id)
    {
        Categorie::find($id)->delete();
        return redirect('/admin/category')->with('message', 'Deleted Successfully');
    }
}
