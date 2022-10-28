<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;
use App\Models\service;
use App\Models\vision;
use App\Models\Address;
use App\Models\EmailUs;
use App\Models\CallUs;
use App\Models\TimeWork;
use App\Models\Map;
use App\Models\message;
use App\Models\articel;
use App\Models\client;
use DB;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
  public function home()
  {
   $address = Address::all()->first();
   $email_us = EmailUs::all()->first();
   $call_us = CallUs::all();
   $time_work = TimeWork::all()->first();
   $map = Map::all()->first();


   return view('page.home',compact('address','email_us','call_us','time_work','map'));

 }

 public function about()
 {
  $about = about::all()->first();
  return view('page.about',compact('about'));
}

public function service()
{
 $service = service::all()->first();
 return view('page.service',compact('service'));
}

public function articel()
{

  $articel = articel::paginate(10);
  return view('page.articel',compact('articel'));
}


public function visi_misi()
{
 $vision = vision::all()->first();
 return view('page.visi-misi',compact('vision'));
}


public function berita()
{
  $response = Http::get('https://newsapi.org/v2/top-headlines?country=id&apiKey=8a64b265a532482d933e8c8fbda3a0a1');
  $data = $response->json();
  $data = $data['articles'];
  return view('page.berita',compact('data'));
}

public function client()
{
  $client = client::all();
  return view('page.client',compact('client'));
}

}
