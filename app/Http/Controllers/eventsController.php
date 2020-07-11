<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventsController extends Controller
{
   // ------------------- [ Detail event ] ----------------------
   public function eventDetail(Request $request)
   {
       return view('detail_event');
   }
}
