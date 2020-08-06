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
    // public function calendarView(){
        // $events = Event::all();
        // $event = [];
        // foreach ($events as $row) {
        //     $end_date = $row->end_date."24:00:00";
        //     $event[] = \Calendar::event(
        //         $row->title,
        //         true,
        //         new \DateTime($row->start_date),
        //         new \DateTime($row->end_date),
        //         $row->id,
        //         [
        //             'color' => $row->color,
        //         ]
        //     );
        // }
        // $eventCalendar = \Calendar::addEvents($event);
    //     $events = [];
    //     $data = Event::all();
    //     if($data->count()) {
    //         foreach ($data as $key => $value) {
    //             $events[] = Calender::event(
    //                 $value->title,
    //                 true,
    //                 new \DateTime($value->start_date),
    //                 new \DateTime($value->end_date.' +1 day'),
    //                 null,
    //                 // Add color and link on event
	//                 [
	//                     'color' => '#f05050',
	//                     'url' => 'pass here url and any route',
	//                 ]
    //             );
    //         }
    //     }
    //     $evnetCalendar = Calender::addEvents($events);
    //     return view('calendar',compact('evnetCalendar','events'));
    // }
}
