<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;

class MapController extends Controller
{
    public function maps()
    {
        $data = map::all();
        return view('map.maps',compact('data'));
    }

    public function update_maps(Request $request, $id)
    {
        $request->validate([
        'url' => 'required'
    ]);

       $post = Map::find($id);
       $post->url = $request->url;
       toast('Success','success');
       $post->update();

       return back();
    }
}
