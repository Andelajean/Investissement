<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Conversation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function store(Request $request, Conversation $conversation)
    {
        $message = Message::create([
            'conversation_id' => $conversation->id,
            'sender_id' => Auth::id(),
            'message' => $request->message,
        ]);

        return redirect()->route('conversations.show', $conversation);
    }

    public function adminRespond(Request $request, Message $message)
    {
        $conversation = $message->conversation;

        $response = Message::create([
            'conversation_id' => $conversation->id,
            'sender_id' => Auth::id(),
            'message' => $request->response,
        ]);

        return redirect()->route('admin.message')->with('success', 'Message envoyé avec succès.');
    }

}
