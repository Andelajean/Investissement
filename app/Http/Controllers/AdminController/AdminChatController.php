<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class AdminChatController extends Controller
{
    public function fetchMessages($conversationId)
    {
        $conversation = Conversation::find($conversationId);
        if ($conversation) {
            $messages = $conversation->messages()->with('sender')->get();
            return response()->json($messages);
        }
        return response()->json([]);
    }

    public function sendMessage(Request $request, $conversationId)
    {
        $conversation = Conversation::find($conversationId);

        if ($conversation) {
            $message = $conversation->messages()->create([
                'sender_id' => Auth::id(),
                'message' => $request->message
            ]);

            return response()->json($message->load('sender'));
        }

        return response()->json(['error' => 'Conversation not found'], 404);
    }
}
