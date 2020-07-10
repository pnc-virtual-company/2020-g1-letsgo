
@extends('layouts.main')

@yield('content')
@include('layouts.navbar')
  <br>  
  <div class="container">
      <div class="col-12">
            <!-- Actual search box -->
            <div class="form-group has-search">
              <span class="fa fa-search form-control-feedback"></span>
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <h1>Events</h1>
            <h5>Saturday,July 11</h5>
        <div class="card mb-3" style="border-radius: 20px;">
            <div class="card-body" >
                {{-- foreach to show event --}}
              <div class="row">
                <div class="col-sm-3"><br><h2 class="text-secondary">8:00 PM</h2></div>
                <div class="col-sm-4">
                    <p><b>Bord game</b></p>
                    <h2>The Duck is Back</h2>
                    <p>4 member going</p>
                </div>
                <div class="col-sm-3">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSe0tC6P0G3n_CeYFdklK3aN5VEUjAJJV1Oag&usqp=CAU" style="width: 130px; height: 120px;"  class="img-thumbnail" alt="Cinque Terre">
                </div>
                <div class="col-sm-2">
                    <br>
                    <a href="#" style="font-size:22px" class="btn btn-outline-danger btn-center"><i class="fa fa-times-circle" style="color:red"></i>&nbsp;Remove</a>
                </div>
              </div>
              {{-- end foreach of event --}}
            </div>
        </div>
    </div>
</div>   
    <style>
        .has-search .form-control {
            padding-left: 2.375rem;
        }
        .has-search .form-control-feedback {
            position: absolute;
            z-index: 2;
            display: block;
            width: 2.375rem;
            height: 2.375rem;
            line-height: 2.375rem;
            text-align: center;
            pointer-events: none;
            color: #aaa;
        }
    </style>


  
  