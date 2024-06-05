<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function title()
    {
        return view('backend.contact.title');
    }

    public function titleCreate()
    {
        return view('backend.contact.title_create');
    }
    //contact info
    public function contactInfo()
    {
        return view('backend.contact.contact_info');
    }

    public function contactInfoCreate()
    {
        return view('backend.contact.contact_info_create');
    }

    //contact details
    public function contactDetails()
    {
        return view('backend.contact.contact_details');
    }

    public function detailsCreate()
    {
        return view('backend.contact.contact_details_create');
    }
}
