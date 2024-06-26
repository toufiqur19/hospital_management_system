<?php

namespace App\Http\Controllers\Admin;

use App\Models\WorkProces;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

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
}
