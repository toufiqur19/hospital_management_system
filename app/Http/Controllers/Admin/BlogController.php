<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        return view('backend.blog');
    }

    public function blogCreate()
    {
        return view('backend.blog_create');
    }
}
