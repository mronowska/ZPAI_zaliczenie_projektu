<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request){
      $this->validate($request, [
        'login' => 'required',
        'email' => 'required'
      ]);

      // Create New Message
      $message = new Message;
      $message->login = $request->input('login');
      $message->email = $request->input('email');
      $message->message = $request->input('message');
      //save message
      $message->save();
      //Redirect
      return redirect('/')->with('success', 'Wysłano wiadomość');
    }


    public function getMessages(){
      $messages = Message::all();

      return view('messages')->with('messages', $messages);
    }
}
