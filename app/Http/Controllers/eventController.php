<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Event;

class eventController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $events = Event::all()->groupBy('start_date');
        $categories = Category::all();
        $jsonString = file_get_contents(base_path('storage/city.json'));
        $cities = json_decode($jsonString, true);
        return view('event.view', compact('categories', 'cities', 'events'));
    }
    /**
    * go to login view
    *
    * @return \Illuminate\Http\Response
    */
    public function login()
    {
        if (session()->has('data')) {
        return redirect('mainView');
        } else {
        return view('auth.login');
        }
    }
    /**
    * event for admin view
    *
    * @return \Illuminate\Http\Response
    */
    public function adminEvent()
    {
        return view('admin.viewEvent');
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
    //
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $event = new Event();
        $event->cat_id = $request->category;
        $event->title = $request->title;
        $event->city = $request->city;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->start_time = $request->start_time;
        $event->end_time = $request->end_time;
        $event->description = $request->description;
        if ($request->hasfile('picture')) {
        $file = $request->file('picture');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . "." . $extension;
        $file->move('images/', $filename);
        $event->profile = $filename;
        }
        $event->save();
        return back();
    }

    /**
    * Display the specified resource.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
    //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function edit($id)
    {
    //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param \Illuminate\Http\Request $request
    * @param int $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $event = Event::find($id);
        $event->cat_id = $request->get('category');
        $event->title = $request->get('title');
        $event->city = $request->get('city');
        $event->start_date = $request->get('start_date');
        $event->end_date = $request->get('end_date');
        $event->start_time = $request->get('start_time');
        $event->end_time = $request->get('end_time');
        $event->description = $request->get('description');
        if ($request->hasfile('profile')){
        $file = $request->file('profile');
        $extension = $file->getClientOriginalExtension();
        $filename = time(). ".".$extension;
        $file->move('images/', $filename);
        $event->profile = $filename;
        }
        $event->save();
        return back();
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param int $id
    * @return \Illuminate\Http\Response
    */
        public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return back();
    }
    // ------------------- [ Detail event ] ----------------------
    public function eventDetail(Request $request)
    {
        return view('detail_event');
    }
    // ------------------- [ calendar ] ----------------------
    public function exploreEvent(Request $request)
    {
        return view('exploreEvent');
    }
    // function to delete picture of event.
    public function deletePic()
    {
        $auth = Auth::user();
        $imageName = time() . '.' . request()->picture = 'user.png';
        $auth->profile = $imageName;
        $auth->save();
        return back();
    }
    //function to delete profile user.
    public function delete($id){
        $event = Event::find($id);
        $event->profile = "event.png";
        $event->save();
        return back();
    }
}