<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
Use Image;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Intervention\Image\Exception\NotReadableException;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function post_auth(Request $request)
    {
     $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

     if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        toast('Success','success');
        return redirect()->intended('home');
    }
    toast('User not found','error');

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}

public function logout()
{
    Auth::logout();
    toast('Success','success');
    return redirect('login');
}

public function update_avatar (Request $request)
{
    $validatedData = $request->validate([
     'avatar' => 'required|image|mimes:jpg,png,jpeg|max:2048',
 ]);
    if ($request->hasfile('avatar')) {
       $avatar = $request->file('avatar');
       $filename = time() .','. $avatar->getClientOriginalExtension();
       Image::make($avatar)->resize(300, 300)->save( public_path('/file_avatar/' . $filename));

       $user = Auth::user();
       $user->avatar = $filename;

       $user->update();
       toast('Avatar success update','success');
       return back();
   }
}


public function updated_password()
{
    return view('auth.updated-password');
}

public function post_update_password(Request $request)
{
   $request->validate([
    'current_password' => ['required'],
    'password' => ['required', 'confirmed'],

]);



   if (Hash::check($request->current_password, auth()->user()->password)) {
    auth()->user()->update(['password' => Hash::make($request->password)]);
    toast('Password success updated','success');
    return back();
}else{
    toast('old password doesnt match','warning');
    return back();
}
}

public function user_profil()
{
    return view('auth.user-profil');
}

public function update_profil(Request $request)
{
    $request->validate([
        'name'=>'required',
        'email'=>'required',
        'no_tlp'=>'required'
    ]);

    
    $request->user()->update(
        $request->all()
    );


    toast('Profil success updated','success');
    return back();
}
}
