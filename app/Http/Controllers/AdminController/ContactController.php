<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    public function index() { 
        $contacts = Contact::all(); 
        return view('admin.contacts.index', compact('contacts'));
     }
}
