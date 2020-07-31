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
            @foreach($cities as $data)
            @foreach($data as $city)
            <option value="{{$city}}">{{$city}}</option>
            @endforeach
            @endforeach
          </select>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="col-12">
    <input type="checkbox" name="urevent" value="">
    <label for="urevent">Event you join only</label>
  </div>
</div>
<br><br><br>
<?php $items = $events; ?>
@foreach ($items as $start_date => $events)
@foreach ($events as $event)
@if (Auth::id() != $event->user_id)
<div class="container" style="cursor:pointer">
  <div class="col-12">
    <a href="" class="text-primary"></a>
    <div class="card mb-3" style="border-radius: 20px;">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3" data-toggle="modal" data-target="#eventDetail{{$event->id}}"><br>
            <h5 class="text-secondary">
              <?php
              $date = new DateTime($event->start_time);
              echo date_format($date, 'g:iA');
              ?>
            </h5>
          </div>
          <div class="col-sm-4" data-toggle="modal" data-target="#eventDetail{{$event->id}}">
            <p><b class="text-primary">{{$event->category->name}}</b></p>
            <h4 class="text-warning ">{{$event->title}}</h4>
            <p> <strong class="text-warning ">{{$event->joins->count("user_id")}}</strong> member going</p>
          </div>
          <div class="col-sm-3" data-toggle="modal" data-target="#eventDetail{{$event->id}}">
            <img class="mx-auto d-block" src="{{asset('images/'.$event->profile)}}" width="105" style="border-radius: 105px;" height="105" alt="Avatar">
          </div>
          <div class="col-sm-2" data-toggle="modal">
            <br>
            <a href="{{route('quit',$event->id)}}" id="hide" class="btn btn-danger float-right"><i class="fa fa-check-circle" style="color:white"></i>Quit</a>
            <a href="{{route('join',$event->id)}}" id="hide" class="btn btn-primary float-right"><i class="fa fa-check-circle" style="color:white"></i>Join</a>
          </div>
        </div>
      </div>
    </div>
    <!-- =================================Opend event detail==================================================== -->
    <!-- The Modal -->
    <div class="modal fade" id="eventDetail{{$event->id}}">
      <div class="modal-dialog">
        <div class="modal-content">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title text-warning">Event Detail</h4>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-4">
                <img class="rounded-circle mt-5" style="width: 140px;  height: 125px" src="{{asset('images/'.$event->profile)}}">
              </div>
              <div class="col-8">
                <p class="category text-primary"><strong>{{$event->category->name}}</strong></p>
                <h4 class="title"><strong>{{$event->title}}</strong></h4>
                <div class="row">
                  <i class="material-icons">location_on</i>
                  <p>{{$event->city}} </p>
                </div>
                <div class="row">
                  <i class="material-icons">account_circle</i>
                  <p>{{$event->joins->count("user_id")}} Members going </p>
                </div>
                <div class="row">
                  <i class="material-icons">account_circle</i>
                  <p>{{$event->user->firstname}}</p>
                </div>
                <div class="row">
                  <i class="material-icons">alarm</i>
                  <?php
                  $start_date = new DateTime($event->start_time);
                  $end_date = new DateTime($event->end_time);
                  echo date_format($start_date, 'g:iA');
                  echo "  to ";
                  echo date_format($end_date, 'g:iA');
                  ?>
                  <!-- <p>{{$event->start_time}} to {{$event->end_time}}</p> -->
                </div>
                <a href="" class="btn btn-primary float-right"><i class="fa fa-check-circle" style="color:white"></i>Join</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="container">
            <textarea cols="55" rows="5"> {{$event->description}} </textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endif
</div>
</div>
@endforeach
@endforeach
<!-- =================================Search event==================================================== -->
<script>
    $(document).ready(function() {
      $("#searchEvent").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#event ").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
<script>
    $(document).ready(function() {
      $("#searchCity").on("click", function() {
        var value = $(this).val().toLowerCase();
        $("#event ").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
  </script>
@endsection
<!-- =================================end event detail==================================================== -->