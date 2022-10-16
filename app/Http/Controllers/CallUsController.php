<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CallUs;

class CallUsController extends Controller
{
    public function call_us()
    {
        $data = CallUs::all();
        return view('call-us.call-us',compact('data'));
    }

    public function update_call_us(Request $request, $id)
    {
     $request->validate([
        'no_telepon' => 'required'
    ]);

     $post = CallUs::find($id);
     $post->no_telepon = $request->no_telepon;
     toast('Success Updated','success');
     $post->update();

     return back();
 }
}
