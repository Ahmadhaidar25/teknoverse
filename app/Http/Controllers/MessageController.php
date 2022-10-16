<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\message;

class MessageController extends Controller
{
   public function post_message(Request $request)
   {
        //dd($request->all());
    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'subject'=>'required',
        'message'=>'required'
    ]);

    $post = new message;
    $post->name = $request->name;
    $post->email = $request->email;
    $post->subject = $request->subject;
    $post->message = $request->message;
    toast('message sent successfully','success');
    $post->save();
    return redirect('/');
}

public function get_message()
{
    $data = message::all();
    return view('message.message',compact('data'));
}
}
