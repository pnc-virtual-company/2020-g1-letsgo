@extends('layouts.app')
@section('content')
<h3 style="margin-top: 15px; margin-left:15px; color:black;" class="text-center"><strong class="text-success">F</strong>ind Your Event!</h3>
<div class="container mt-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-12">
        <div class="form-group">
          <input type="text" id="searchEvent" class="form-control" name="search" placeholder="Search">
        </div>
      </div>
      <div class="col-lg-2 col-md-6" style="margin-top: 9px; ">Not too far from</div>
      <div class="col-lg-5 col-md-6">
        <div class="form-group">
          <select name="city" class="form-control" id="searchCity">
            <option value="">-----Select City-----</option>
            @foreach($cities as $data)
            @foreach($data as $city)
            <option value="{{$city}}" {{ ($city == $userCity) ? "selected" : "" }}>{{$city}}</option>
            @endforeach
            @endforeach
<<<<<<< HEAD
          </select>
=======
            </select>
>>>>>>> f7d038239a49e27cc92b27ad414541ffc0d2c921
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
  <form id="isnotcheckCalendar" action="{{route('isnotcheckCalendar',1)}}" method="post">
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
        <a class="nav-link active" href="{{route('calendarview')}}">Calendar</a>
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
  <div class="row">
    <!-- Modal -->
    @foreach($events as $event)
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body">
            <h4 class="text-primary text-center"></h4>
            <p class="text-warning"></p>
            <p class="text-warning" id="end"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default text-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
  <script>
<<<<<<< HEAD
 document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var events = {!! json_encode($datas, JSON_HEX_TAG) !!} ;
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
    events: events
  });
=======
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');
      var value = {!! json_encode(Auth::user()->city, JSON_HEX_TAG) !!}.toLowerCase()
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
            title:'{{$event->title}}',
            start: '{{$event->start_date}} {{$event->start_time}}',
            end: '{{$event->end_date}} {{$event->end_time}}',
          },
          @endforeach
        ],
        eventClick: function(info) {
            info.jsEvent.preventDefault(); // don't let the browser navigate
            $("#myModal .modal-body h4").text('Title: ' + info.event.title);
            $("#myModal .modal-body p").text('Start_date: ' + info.event.start);
            $("#myModal .modal-body #end").text('End_date: ' + info.event.end);
            $("#myModal").modal();
        },
    
      });
>>>>>>> 6fc43371dfb8478b57a38316fc9159c75b80e014

  calendar.render();
});
// check only user event
$("#checkbox").on('click', function () {
  var data = event_check();
  if (data == 0) {
    $('#isnotcheckCalendar').submit();
  }
});
// return value of checkbox
function event_check(){
  var checkBox = document.getElementById('checkbox');
  if (checkBox.checked === true)
  {
    var value = document.getElementById('checkbox').value;
    return value;
  }
  else
  {
    var value = document.getElementById('checkbox').value;
    return value;
  }
}
// search event in calendar
$("#searchCity").on("change", function() {
  var value = $(this).val().toLowerCase();
    $("#calendar ").filter(function() {
    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
  });
});
</script>
@endsection
