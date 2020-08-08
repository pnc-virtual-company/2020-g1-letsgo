<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Join_event;
use App\Event;
// use MaddHatter\LaravelFullcalendar\Facades\Calendar;
class ExploreEventController extends Controller
{
    /*
    * show all event  
    */
    public function onlyEventJoin()
    {
        $exploreEvent = Event::all()->groupBy("startDate");
        $joins= Join_event::all();
        $jsonString = file_get_contents(base_path('storage/city.json'));
        $cities = json_decode($jsonString, true);
        $joinEvent = Join_event::where('user_id',Auth::id())->get();
        $user = User::find(Auth::id());
        $user->check = 1;
        $user->save();
        return view('exploreEvent.onlyEventJoin',compact('exploreEvent', 'joins','joinEvent','cities'));
    }


    public function isCheckEvent($data)
    {
        $user = User::find(Auth::id());
        $user->check = $data;
        $user->save();
        return redirect('exploreEvent');
    }
    public function isNotcheck($data)
    {
        $user = User::find(Auth::id());
        $user->check = $data;
        $user->save();
        return redirect('onlyeventjoin');
    }
    
}
