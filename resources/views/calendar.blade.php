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
  {{--====== checkbox ==========--}}
  <div class="form-check" style="margin-left:20px">
  @if (Auth::user()->check == 0)
  <input type="checkbox" id="checkbox" name="checkbox[]" value="{{Auth::user()->check}}" class="form-check-input">
  @endif
  <label class="form-check-label" for="checkbox">Event you join only</label>
  </div>
  <form id="isNotCheck" action="{{route('isnotcheckCalendar',1)}}" method="post">
  @csrf
  @method('put')
  </form>
  {{--======end checkbox ==========--}}
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

      <div id='calendar'></div>

    </div>
  </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    timeZone: 'UTC',
    themeSystem: 'bootstrap',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
    },
 
    weekNumbers: true,
    editable: true,
    dayMaxEvents: true, // allow "more" link when too many events
    events: [
        @foreach($events as $event) {
          title: '(<?php $date = new DateTime($event->start_time);
                                      echo date_format($date, 'A'); ?>) {{$event->title}}:',
          start: '{{$event->start_date}} {{$event->start_time}}',
          end: '{{$event->end_date}} {{$event->end_time}}'
        },
        @endforeach
      ],
  });

  calendar.render();
});
</script>



@endsection
