@extends('layouts.main')
@yield('content')
@include('layouts.navbar')

<h3 style="margin-top: 15px; margin-left:15px; color:aliceblue;">Find Your Event!</h3>
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
<div class="container">
    <a href="" class="text-primary">Saturday, July 4 </a>
    <div class="card mb-3" style="border-radius: 20px;">
        <div class="card-body">
            {{-- loop to show event --}}
            <div class="row">
                <div class="col-sm-3"><br>
                    <h5 class="text-secondary">8:00 PM</h5>
                </div>
                <div class="col-sm-4">
                    <p><b class="text-primary">Sport</b></p>
                    <h4 class="text-warning">Running</h4>
                    <p> <strong class="text-warning">6</strong> members going</p>
                </div>
                <div class="col-sm-3">
                    {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSe0tC6P0G3n_CeYFdklK3aN5VEUjAJJV1Oag&usqp=CAU" style="width: 130px; height: 120px;"  class="img-thumbnail" alt="Cinque Terre"> --}}
                    <img class="mx-auto d-block" src="https://cdn5.vectorstock.com/i/1000x1000/58/29/girl-cartoon-running-jogging-icon-graphic-vector-10785829.jpg" width="105" style="border-radius: 105px;" height="105" alt="Avatar">
                </div>
                <div class="col-sm-2">
                    <br>
                    {{-- <a href="#" style="font-size:22px" class="btn btn-outline-danger btn-center"><i class="fa fa-times-circle" style="color:red"></i>&nbsp;Remove</a> --}}

                    <div class="btn-group" role="group" aria-label="Basic example">
                     
                    <button type="button" class="btn btn-primary"><i class="fa fa-check-circle" style="color:white"></i> </button>
                    <button type="button" class="btn btn-primary">Join</button>
                    </div>
                </div>
            </div>
            {{-- end foreach of event --}}
        </div>
    </div>
</div>