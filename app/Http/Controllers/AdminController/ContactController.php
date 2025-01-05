<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Message;
use App\Models\Conversation;

class ContactController extends Controller
{
    //
    public function index() { 
        $contacts = Contact::all(); 
        return view('admin.contacts.index', compact('contacts'));
     }
     public function message(){
        $messages = Message::orderBy('created_at', 'desc')->get(); // Récupérer tous les messages
    $conversations = Conversation::with('user', 'messages')->get(); // Charger les relations nécessaires

    return view('admin.navbar', compact('messages', 'conversations'));
     }
}
