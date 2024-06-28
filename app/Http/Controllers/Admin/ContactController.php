<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        $contacts = Contact::all();
        return view('backend.contact.contact_info',compact('contacts'));
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
