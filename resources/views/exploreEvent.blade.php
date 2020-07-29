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
<div class="container events">
  <div class="col-12">
    <a href="" class="text-primary">
      <?php $date = new DateTime($start_date);
      echo date_format($date, ' l jS F Y'); ?>
    </a>
    <div class="card mb-3" style="border-radius: 20px;">
      <div class="card-body">
        <div class="row">
          <div class="col-sm-3"><br>
            <h5 class="text-secondary">
              <?php
              $date = new DateTime($event->start_time);
              echo date_format($date, 'g:iA');
              ?>
            </h5>
          </div>
          <div class="col-sm-4">
            <p><b class="text-primary">{{$event->category->name}}</b></p>
            <h4 class="text-warning ">{{$event->title}}</h4>
            <p> <strong class="text-warning ">6</strong> member going</p>
          </div>
          <div class="col-sm-3">
            <img class="mx-auto d-block" src="{{asset('images/'.$event->profile)}}" width="105" style="border-radius: 105px;" height="105" alt="Avatar">
          </div>
          <div class="col-sm-2">
            <br>
            <a href="" class="btn btn-primary float-right"><i class="fa fa-check-circle" style="color:white"></i>Join</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- =================================Opend event detail==================================================== -->

<!-- The Modal -->
<div class="modal fade" id="eventDetail">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-warning">Event Detail</h4>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-4">
            <!-- <div class="card" style="width: 125px; margin-top: 15px; height: 125px"> -->
            <img class="rounded-circle mt-5" style="width: 140px;  height: 125px" src="../images/Picture1.png">
            <!-- </div> -->
          </div>
          <div class="col-8">
            <p class="category text-primary"><strong>Sport</strong></p>
            <h4 class="title"><strong>Football Contest</strong></h4>
            <div class="row">
              <i class="material-icons">location_on</i>
              <p>Cambodia, Phnom penh </p>
            </div>
            <div class="row">
              <i class="material-icons">account_circle</i>
              <p>16 members</p>
            </div>
            <div class="row">
              <i class="material-icons">account_circle</i>
              <p>Organized by: Seiha</p>
            </div>
            <div class="row">
              <i class="material-icons">alarm</i>
              <p>Wednesday, July 9-4:00PM to 5:00PM</p>
            </div>
            <a href="" class="btn btn-primary float-right"><i class="fa fa-check-circle" style="color:white"></i>Join</a>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <p>
          Are you interested in finding how to live truly? <br>
          Join us and we will show you the path step by step <br>
          Let’s do it together ! <br>
          Click for More Info : Our Website (http://www.livefootball.com/)
        </p>
      </div>
    </div>
  </div>
</div>
</div>

@endforeach
@endforeach
<!-- =================================Search event==================================================== -->
<script>
  $(document).ready(function() {
    $("#searchEvent").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $(".events").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  $(document).ready(function() {
    $("#searchCity").on("click", function() {
      var value = $(this).val().toLowerCase();
      $(".events").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>
@endsection
<!-- =================================end event detail==================================================== -->