<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmailUs;

class EmailUsController extends Controller
{
    public function email_us()
    {
        $data = EmailUs::all();
        return view('email-us.email-us',compact('data'));
    }

    public function update_email_us(Request $request, $id)
    {
       $request->validate([
        'email' => 'required'
    ]);

       $post = EmailUs::find($id);
       $post->email = $request->email;
       toast('Success','success');
       $post->update();

       return back();
   }
}
