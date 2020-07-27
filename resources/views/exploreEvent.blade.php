@extends('layouts.app')

@section('content')


<h3 style="margin-top: 15px; margin-left:15px; color:aliceblue;">Find Your Event!</h3>
<div class="container" >
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
  <input type="checkbox" name="urevent" value="" id="checkbox">
  <label for="urevent">Event you join only</label>
</div>
<script>
  $(document).ready(function() { 
    $("#checkbox").click(function() { 
      if ($("input[type=checkbox]").is(":checked")) { 
      alert("Check box in Checked"); 
      } 
    }); 
  }); 

</script>
<br><br><br>
<div class="container" style="cursor: pointer;">
    <a href="" class="text-primary">Saturday, July 4 </a>
    <div class="card mb-3" style="border-radius: 20px;">
        <div class="card-body">
            {{-- loop to show event --}}
            <div class="row">
                <div class="col-sm-3" data-toggle="modal" data-target="#eventDetail"><br>
                    <h5 class="text-secondary">8:00 PM</h5>
                </div>
                <div class="col-sm-4" data-toggle="modal" data-target="#eventDetail">
                    <p><b class="text-primary">Sport</b></p>
                    <h4 class="text-warning">Running</h4>
                    <p> <strong class="text-warning">6</strong> members going</p>
                </div>
                <div class="col-sm-3" data-toggle="modal" data-target="#eventDetail">
                    {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSe0tC6P0G3n_CeYFdklK3aN5VEUjAJJV1Oag&usqp=CAU" style="width: 130px; height: 120px;"  class="img-thumbnail" alt="Cinque Terre"> --}}
                    <img class="mx-auto d-block" src="https://cdn5.vectorstock.com/i/1000x1000/58/29/girl-cartoon-running-jogging-icon-graphic-vector-10785829.jpg" width="105" style="border-radius: 105px;" height="105" alt="Avatar">
                </div>
                <div class="col-sm-2">
                    <br>
                    {{-- <a href="#" style="font-size:22px" class="btn btn-outline-danger btn-center"><i class="fa fa-times-circle" style="color:red"></i>&nbsp;Remove</a> --}}

                    <div class="btn-group" role="group" aria-label="Basic example">
                     
                    <a href="" class="btn btn-primary float-right"><i class="fa fa-check-circle" style="color:white"></i>Join</a>
                    </div>
                </div>
            </div>
            {{-- end foreach of event --}}
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
                <i class="material-icons">location_on</i><p>Cambodia, Phnom penh </p>
              </div>
              <div class="row">
                <i class="material-icons">account_circle</i><p>16 members</p>
              </div>
              <div class="row">
                <i class="material-icons">account_circle</i><p>Organized by: Seiha</p>
              </div>
              <div class="row">
                <i class="material-icons">alarm</i><p>Wednesday, July 9-4:00PM to 5:00PM</p>
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



@endsection
<!-- =================================end event detail==================================================== -->

