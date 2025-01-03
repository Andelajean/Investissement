<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConversationController extends Controller
{
    public function index()
    {
        $conversations = Conversation::where('user_id', Auth::id())
                                        ->orWhere('admin_id', Auth::id())
                                        ->with('messages')
                                        ->get();

        return view('conversations.index', compact('conversations'));
    }

    public function store(Request $request)
    {
        $conversation = Conversation::create([
            'user_id' => Auth::id(),
            'admin_id' => $request->admin_id,
        ]);

        return redirect()->route('conversations.show', $conversation);
    }

    public function show(Conversation $conversation)
    {
        $messages = $conversation->messages()->get();

        return view('conversations.show', compact('conversation', 'messages'));
    }

    public function adminMessages()
    {
        $conversations = Conversation::where('admin_id', Auth::id())->with('user')->get();
        return view('conversations.index', compact('conversations'));
    }

}
