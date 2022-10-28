<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\articel;
use Illuminate\Support\Facades\File;
use DB;

class ArticelController extends Controller
{
    public function articel()
    {
        $kode = DB::table('articel')->max('no');
        $addNol = '';
        $kode = str_replace("", "", $kode);
        $kode = (int) $kode + 1;
        $incrementKode = $kode;

        if (strlen($kode) == 1) {
            $addNol = "";
        } elseif (strlen($kode) == 1) {
            $addNol = "";
        } elseif (strlen($kode == 1)) {
            $addNol = "";
        }

        $kodeBaru = "".$addNol.$incrementKode;
        $data = articel::all();

        return view('articel.articel',compact('data','kodeBaru'));
    }

    public function add_articel(Request $request)
    {
     $request->validate([
        'no'=>'required',
        'description'=>'required',

    ]);


     $post = new articel;
     $post->no = $request->no;
     $post->title = $request->title;
     $post->description = $request->description;

     if ($request->hasfile('image')) 
     {
       $destination = '/image/'.$post->image;

       if (File::exists($destination)) 
       {
           File::delete($destination);
       }

       $file = $request->file('image');
       $extention = $file->getClientOriginalExtension();
       $filename = time().'.'.$extention;
       $file->move('file_articel', $filename);
       $post->image = $filename;
   }
   toast('article successfully added','success');

   $post->save();
   return back();
}

public function update_articel(Request $request, $id)
{
   $request->validate([
    'title'=>'required',
    'description'=>'required',

]);


   $post = articel::find($id);
   $post->title = $request->title;
   $post->description = $request->description;

   if ($request->hasfile('image')) 
   {
       $destination = '/image/'.$post->image;

       if (File::exists($destination)) 
       {
           File::delete($destination);
       }

       $file = $request->file('image');
       $extention = $file->getClientOriginalExtension();
       $filename = time().'.'.$extention;
       $file->move('file_articel', $filename);
       $post->image = $filename;
   }
   toast('The article has been modified successfully','success');

   $post->update();
   return redirect('/master/articel');
}

public function delete_articel($id)
{
    $hapus =  articel::find($id);
    $file = public_path('/file_articel/').$hapus->image;
    if (file_exists($file)) 
    {
     @unlink($file);
 }
 toast('article successfully deleted','success');
 $hapus->delete();
 return redirect('/master/articel');
}

public function edit_articel($id)
{
    $edit = articel::find($id);
    return view('articel.edit',compact('edit'));
}
}
