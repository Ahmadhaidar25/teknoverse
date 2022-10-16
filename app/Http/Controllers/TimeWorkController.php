<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeWork;

class TimeWorkController extends Controller
{
    public function time_work()
    {
        $data = TimeWork::all();
        return view('time-work.time-work',compact('data'));
    }

    public function update_time_work(Request $request, $id)
    {
    //dd($request->all());
     $request->validate([
        'jam_masuk' => 'required',
        'jam_keluar' => 'required'
    ]);

     $post = TimeWork::find($id);
     $post->jam_masuk = $request->jam_masuk;
     $post->jam_keluar = $request->jam_keluar;
     toast('Success Updated','success');
     $post->update();

     return back();
 }
}
