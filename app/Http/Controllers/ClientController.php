<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\client;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    public function client()
    {
        $data = client::all();
        return view('client.client',compact('data'));
    }

    public function insert_image_client(Request $request)
    {
     $request->validate([
        'file'=>'required',
    ]);


     $post = new client;

     if ($request->hasfile('file')) 
     {
         $destination = '/file/'.$post->file;

         if (File::exists($destination)) 
         {
             File::delete($destination);
         }

         $file = $request->file('file');
         $extention = $file->getClientOriginalExtension();
         $filename = time().'.'.$extention;
         $file->move('file_client', $filename);
         $post->file = $filename;
     }
     toast('Success','success');

     $post->save();
     return back();
 }
}
