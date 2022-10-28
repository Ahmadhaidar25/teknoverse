<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function service()
    {
        $data = service::all();
        return view('service.service',compact('data'));
    }

    public function update_image_service(Request $request, $id)
    {
     $request->validate([
        'file'=>'required',
    ]);


     $post = service::find($id);

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
         $file->move('file_service', $filename);
         $post->file = $filename;
     }
     toast('Success update','success');

     $post->update();
     return back();
 }

  public function insert_image_service(Request $request)
    {
     $request->validate([
        'file'=>'required',
    ]);


     $post = new service;

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
         $file->move('file_service', $filename);
         $post->file = $filename;
     }
     toast('Success update','success');

     $post->save();
     return back();
 }
}
