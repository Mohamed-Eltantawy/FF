<?php
namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Events\MessageSent;

class ChatController extends Controller
{
    public function index()
    {
        $messages = Message::with('user')->get();
        return view('chat', compact('messages'));
    }

    public function send(Request $request)
    {
        $request->validate([
            'message' => 'required',
        ]);

        $message = new Message();
        $message->user_id = Auth::id();
        $message->message = $request->message;
        $message->save();

        return redirect()->route('chat');
    }

   
}
