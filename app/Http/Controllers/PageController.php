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

class PageController extends Controller
{
    public function page()
    {
        $about = about::all()->first();
        $service = service::all()->first();
        $vision = vision::all()->first();
        $address = Address::all()->first();
        $email_us = EmailUs::all()->first();
        $call_us = CallUs::all();
        $time_work = TimeWork::all()->first();
        $map = Map::all()->first();
        return view('page',compact('about','service','vision','address','email_us','call_us',
            'time_work','map'));
    }

   
}
