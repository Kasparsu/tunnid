<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index(){
        $user = "kaspar";
        return view('chat', compact(['user']));
    }
    public function getUserMessages($username) {
        $messages = Message::where('user', $username)->get();
        return $messages;
    }
    public function getAllMessages() {
        $messages = Message::all();
        return $messages;
    }
    public function addMessage(Request $request) {
        $message = new Message($request->all());
        $message->save();
    }
}
