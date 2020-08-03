@extends('layouts.app')
@section('content')
<h3 style="margin-top: 15px; margin-left:15px; color:black;" class="text-center"><strong class="text-success">F</strong>ind Your Event!</h3>
<div class="container mt-3">
  <div class="container">
    <div class="row">
      <div class="col-5">
        <div class="form-group">
          <input type="text" id="searchEvent" class="form-control" name="search" placeholder="Search">
        </div>
      </div>
      <div class="col-2" style="margin-top: 9px; ">Not too far from</div>
      <div class="col-5">
        <div class="form-group">
          <select name="city" class="form-control" id="searchCity">
            <option value="">-----Select City-----</option>
            {{-- @foreach($cities as $data)
            @foreach($data as $city)
            <option value="{{$city}}">{{$city}}</option>
            @endforeach
            @endforeach --}}
          </select>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <input type="checkbox"  value="{{Auth::id()}}" name="urevent" id="checkbox" onclick="event_check()">
  <label for="urevent">Event you join only</label>
</div>
<div class="container">
    <div class="row" style="margin-left: 83%">
      <ul class="nav nav-tabs ml">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('exploreEvent') }}">Card</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('calendarview')}}">Calendar</a>
      </li>
      </ul>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div id="calendar"></div>
        </div>
    </div>
</div>
<style>
#calendar {
  max-width: 1100px;
  margin: 40px auto;
}
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    timeZone: 'UTC',
    initialView: 'dayGridMonth',
    events: 'https://fullcalendar.io/demo-events.json',
    editable: true,
    selectable: true
  });

  calendar.render();
});
</script>
@endsection