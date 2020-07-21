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
        $events = Event::all();
        $categories = Category::all();
        $jsonString = file_get_contents('https://raw.githubusercontent.com/russ666/all-countries-and-cities-json/6ee538beca8914133259b401ba47a550313e8984/countries.json');
        $cities = json_decode($jsonString, true);      
        return view('event.view',compact('events','categories','cities'));
    }
     /**
     * go to login view
     *
     * @return \Illuminate\Http\Response
     */
    public function login() {
        if(session()->has('data')){
            return redirect('mainView');
        }else{
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
     * @param  \Illuminate\Http\Request  $request
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
        $event->save();
        return redirect('event');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
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
   // ------------------- [ calendar ] ----------------------
   public function getData()
   {
       $category = Category::all();
       dd($category);
       $jsonString = file_get_contents('https://raw.githubusercontent.com/russ666/all-countries-and-cities-json/6ee538beca8914133259b401ba47a550313e8984/countries.json');
        $cities = json_decode($jsonString, true);
        return view('event.view',compact('category','cities'));
   }
}
