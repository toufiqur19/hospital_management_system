<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function faqs()
    {
        return view('backend.faqs');
    }

    public function faqsCreate()
    {
        return view('backend.faqs_create');
    }

    // work process
    public function workProcess()
    {
        return view('backend.work_process');
    }

    public function workProcessCreate()
    {
        return view('backend.work_process_create');
    }
}
