<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function fetchMessages($discussion_id)
    {
        $conversation = Conversation::find($discussion_id);
        if ($conversation) {
            $messages = $conversation->messages()->with('sender')->get();
            return response()->json($messages);
        }
        return response()->json([]);
    }

    public function sendMessage(Request $request)
    {
        $conversation = Conversation::firstOrCreate(
            ['user_id' => $request->sender_id, 'admin_id' => 1] // Remplacez 1 par l'ID réel de l'administrateur
        );

        $message = $conversation->messages()->create([
            'sender_id' => $request->sender_id,
            'message' => $request->message
        ]);

        return response()->json($message->load('sender'));
    }

    public function chat($sender_id)
    {
        // Vérifiez si une discussion existe déjà entre l'administrateur et le client
        $conversation = Conversation::firstOrCreate(
            ['user_id' => $sender_id, 'admin_id' => 1] // Remplacez 1 par l'ID réel de l'administrateur
        );

        // Passez l'ID de la discussion à la vue
        return view('chat', [
            'discussion_id' => $conversation->id,
            'sender_id' => $sender_id,
        ]);
    }
}
