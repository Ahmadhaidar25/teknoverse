<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    public function about()
    {
        $data = about::all();
        return view('about.about',compact('data'));
    }

    public function update_image_about(Request $request, $id)
    {
       $request->validate([
        'file'=>'required',
    ]);


       $post = about::find($id);

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
         $file->move('file_about', $filename);
         $post->file = $filename;
     }
     toast('Success','success');

     $post->update();
     return back();
 }

  public function insert_image_about(Request $request)
    {
       $request->validate([
        'file'=>'required',
    ]);


       $post = new about;

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
         $file->move('file_about', $filename);
         $post->file = $filename;
     }
     toast('Success','success');

     $post->save();
     return back();
 }
}
