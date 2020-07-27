@extends('layouts.app')
@section('content')
<h3 style="margin-top: 15px; margin-left:15px; color:black;">Find Your Event!</h3>
<div class="container">
  <div class="row">
    <div class="col-5">
      <div class="form-group">
        <input type="text" class="form-control" name="search" placeholder="Search">
      </div>
    </div>
    <div class="col-2" style="margin-top: 9px; ">Not too far from</div>
    <div class="col-5">
      <div class="form-group">
        <input type="text" class="form-control" name="city" ​ placeholder="City">
      </div>
    </div>
  </div>
</div>
<div class="container">
  <input type="checkbox" name="urevent" value="">
  <label for="urevent">Event you join only</label>
</div>
<br><br><br>
<?php $items = $events; ?>
@foreach ($items as $start_date => $events)
@foreach ($events as $event)
<div class="container" style="cursor:pointer">
  <div class="col-12">
    <a href="" class="text-primary">
      <?php $date = new DateTime($start_date);
      echo date_format($date, ' l jS F Y'); ?>
    </a>
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
            <p> <strong class="text-warning ">6</strong> member going</p>
          </div>
          <div class="col-sm-3" data-toggle="modal" data-target="#eventDetail{{$event->id}}">
            <img class="mx-auto d-block" src="{{asset('images/'.$event->profile)}}" width="105" style="border-radius: 105px;" height="105" alt="Avatar">
          </div>
          <div class="col-sm-2" data-toggle="modal" data-target="#eventDetail{{$event->id}}">
            <br>
            <a href="" class="btn btn-primary float-right"><i class="fa fa-check-circle" style="color:white"></i>Join</a>
            <?php $items = $events; ?>
            @foreach ($items as $start_date => $events)
            @foreach ($events as $event)
            <div class="container">
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
                    <!-- <div class="card" style="width: 125px; margin-top: 15px; height: 125px"> -->
                    <img class="rounded-circle mt-5" style="width: 140px;  height: 125px" src="{{asset('images/'.$event->profile)}}">
                    <!-- </div> -->
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
                      <p>16 members</p>
                    </div>
                    <div class="row">
                      <i class="material-icons">account_circle</i>
                      <!-- <p>{{Auth::user()->name}}</p> -->
                      <p>Organized by: Seiha</p>
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
      @endforeach
      @endforeach
      @endsection
      <!-- =================================end event detail==================================================== -->