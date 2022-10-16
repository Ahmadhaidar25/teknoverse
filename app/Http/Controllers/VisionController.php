<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vision;
use Illuminate\Support\Facades\File;

class VisionController extends Controller
{
    public function vision()
    {
        $data = vision::all();
        return view('vision.vision',compact('data'));
    }

    public function update_image_vision(Request $request, $id)
    {
        $request->validate([
            'file'=>'required',
        ]);


        $post = vision::find($id);

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
           $file->move('file_vision', $filename);
           $post->file = $filename;
       }
       toast('Success update','success');

       $post->update();
       return back();
   }
}
