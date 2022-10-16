<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    public function address()
    {
        $data = Address::all();
        return view('address.address',compact('data'));
    }

    public function update_address(Request $request, $id)
    {
        $request->validate([
            'address' => 'required'
        ]);

        $post = Address::find($id);
        $post->address = $request->address;
        toast('Success','success');
        $post->update();

        return back();
    }

}
