<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function fetchMessages()
    {
        $conversation = Conversation::where('user_id', Auth::id())->first();
        if ($conversation) {
            $messages = $conversation->messages()->with('sender')->get();
            return response()->json($messages);
        }
        return response()->json([]);
    }

    public function sendMessage(Request $request)
    {
        $conversation = Conversation::firstOrCreate(
            ['user_id' => Auth::id(), 'admin_id' => 1] // Remplacez 1 par l'ID réel de l'administrateur
        );

        $message = $conversation->messages()->create([
            'sender_id' => Auth::id(),
            'message' => $request->message
        ]);

        return response()->json($message->load('sender'));
    }
}
