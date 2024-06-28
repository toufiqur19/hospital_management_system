<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use App\Models\WorkProces;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class FaqsController extends Controller
{
    public function faqs()
    {
        $faqs = Faq::all();
        return view('backend.faqs.faqs', compact('faqs'));
    }

    public function faqsCreate()
    {
        return view('backend.faqs.faqs_create');
    }

    public function faqsCreateProcess(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        
        Faq::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
        return redirect()->route('admin.faqs')->with('message', 'Created Successfully');
    }

    public function faqsEdit($id)
    {
        $faqs = Faq::find($id);
        return view('backend.faqs.faqs_edit',compact('faqs'));
    }

    public function faqsUpdate(Request $request, $id)
    {
        $faq = Faq::find($id);
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);
        
        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);
        return redirect()->route('admin.faqs')->with('message', 'Updated Successfully');
    }

    public function faqsDelete($id)
    {
        $faq = Faq::find($id);
        $faq->delete();
        return redirect()->route('admin.faqs')->with('message', 'Deleted Successfully');
    }
}
