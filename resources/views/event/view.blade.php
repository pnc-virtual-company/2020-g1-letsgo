@extends('layouts.app')

@section('content')

<div class="container mt-5">
  <h2 class="text-center"><strong class="text-success ">W</strong>elcome To Your Event !</h2>
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
      <div class="md-form active-pink active-pink-2 mb-3 mt-0">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search event...">

        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
        </div>
        @endif
        {{-- success confirm password with new password--}}
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
        </div>
        @endif
        {{-- warning confirm password with new password--}}
        @if ($message = Session::get('warning'))
        <div class="alert alert-warning alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
        </div>
        @endif
      </div>

      <div class="text-right">
        <a href="" class="btn btn-warning btn-sm text-white font-weight-bolder" data-toggle="modal" data-target="#createEvent">
          <i class="material-icons float-left" data-toggle="tooltip" title="Add Event!" data-placement="left">add</i>&nbsp;CREATE EVENT
        </a>
      </div>
      {{-- loop to show event --}}
      @foreach ($events as $event)
      <div class="container">
        <div class="col-12">
          <a href="" class="text-primary">
            <?php $date = new DateTime($event->start_date);
            echo date_format($date, ' l jS F Y');?>
          </a>
          <div class="card mb-3" style="border-radius: 20px;">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-3"><br>
                  <h5 class="text-secondary">
                    <?php
                    $date = new DateTime($event->start_time);
                    echo date_format($date, 'G:iA');
                    ?>
                  </h5>
                </div>
                <div class="col-sm-4">
                  <p><b class="text-primary">{{$event->category->name}}</b></p>
                  <h4 class="text-warning ">{{$event->title}}</h4>
                  <p> <strong class="text-warning ">6</strong> member going</p>
                </div>
                <div class="col-sm-3">
                  <img class="mx-auto d-block" src="../images/{{$event->profile}}" width="105" style="border-radius: 105px;" height="105" alt="Avatar">
                </div>
                <div class="col-sm-2">
                  <br>
                  <a href="" data-toggle="modal" data-target="#updateEvent"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Event!" data-placement="left">edit</i></a>
                  <a href="" data-toggle="modal" data-target="#deteleEvent{{$event->id}}"><i class="material-icons text-danger" data-toggle="tooltip" title="Delete Event!" data-placement="left">delete</i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ========================================START Model DELETE================================================ -->
      <!-- The Modal -->
      <div class="modal fade" id="deteleEvent{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-warning" id="exampleModalLabel">Delete Event</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{route('destroy',$event->id)}}"method="post" >
                @csrf
                @method('DELETE')
                <p>Are you sure to remove this event?</p>
                <button type="button" class="btn btn-danger" data-dismiss="modal">DISCARD</button>
                <button type="submit" class="btn btn-warning float-right text-light ml-2">DELETE</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- =================================END MODEL DELETE==================================================== -->
      @endforeach
      {{-- end foreach of event --}}
      <div class="col-2"></div>
    </div>
  </div>


  <!-- ========================================START Model CREATE================================================ -->
  <!-- The Modal -->
  <div class="modal fade" id="createEvent">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-warning">Create Event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">

          <form method="post" action="{{url('createEvent')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationDefault01">Categories</label>
                <select class="form-control" name="category" required>
                  <option selected>Choose...</option>
                  @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault02">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title..." value="" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault03">City</label>
                <select class="form-control" name="city" required>
                  <option selected>Choose...</option>
                  @foreach($cities as $data)
                  @foreach($data as $city)
                  <option value="{{$city}}">{{$city}}</option>
                  @endforeach
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-7 mb-3">
                <div class="form-row">
                  <div class="col-md-8 mb-3">
                    <label for="validationDefault03">Start Date</label>
                    <input type="date" name="start_date" class="form-control datePicker" placeholder="Start Date..." required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault04">At</label>
                    <input type="time" name="start_time" class="form-control" id="validationDefault04" placeholder="At..." required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-8 mb-3">
                    <label for="validationDefault03">End Date</label>
                    <input type="date" name="end_date" class="form-control datePicker" id="validationDefault03" placeholder="Start Date..." required>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationDefault04">At</label>
                    <input type="time" name="end_time" class="form-control" id="validationDefault04" placeholder="At..." required>
                  </div>

                </div>
              </div>
              <div class="col-md-5 mb-3">
                <label class="text-center">Picture</label>
                <img class="mx-auto d-block" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSgoq4FpuZlsN3lQkqspHd5kYJsRUM8R30TMw&usqp=CAU" alt="..." width="105" style="border-radius: 105px;" height="105" alt="Avatar">
                <div class="image-upload text-center">
                  <label for="file-input2">
                    <i class="material-icons m-2 text-primary" style="cursor:pointer;">create</i>
                  </label>
                  <input id="file-input2" type="file" name="picture" hidden>
                </div>
              </div>

            </div>
            <div class="form-row">
              <div class="col-md-12 mb-3 md-form mb-4 pink-textarea active-pink-textarea">
                <label for="form18">Description</label>
                <textarea id="form18" name="description" minlength="50" class="md-textarea form-control" rows="3" placeholder="......"></textarea>
              </div>
            </div>
            <a data-dismiss="modal" class="closeModal">DISCARD</a>
            &nbsp;
            <input type="submit" value="CREATE" class="createBtn text-warning">
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- =================================END MODEL CREATE==================================================== -->



  <!-- ========================================START Model UPDATE================================================ -->
  <!-- The Modal -->

  <div class="modal fade" id="updateEvent">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-warning">Create Event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">

          <form method="post" action="" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationDefault01">Categories</label>
                <select class="form-control" id="validationDefault01">
                  <option value="1" selected>Sport</option>
                  <option value="2">Reading</option>
                  <option value="3">Speaking</option>
                </select>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault02">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title..." value="football" required>
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault03">City</label>
                <select class="form-control" id="validationDefault01">
                  <option value="1" selected>Phon Penh, Cambodai</option>
                  <option value="2">Kompong Thom, cambodai</option>
                  <option value="3">BangKok, Thai</option>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-7 mb-3">
                <div class="form-row">
                  <div class="col-md-8 mb-3">
                    <label for="validationDefault03">Start Date</label>
                    <input type="text" class="form-control" id="validationDefault03" value="Mondy, July 6" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault04">At</label>
                    <input type="text" name="end_time" class="form-control" id="validationDefault04" value="8:00PM" placeholder="At..." required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-8 mb-3">
                    <label for="validationDefault03">End Date</label>
                    <input type="date" class="form-control" id="validationDefault03" value="Mondy, July 6" required>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="validationDefault04">At</label>
                    <input type="text" class="form-control" id="validationDefault04" value="8:00PM" required>
                  </div>

                </div>
              </div>
              <div class="col-md-5 mb-3">
                <label for="validationDefault04">Picture</label>
                <img class="mx-auto d-block" src="https://progameguides.com/wp-content/uploads/2019/06/fortnite-back-bling-quack-pack.jpg" width="105" style="border-radius: 105px;" height="105" alt="Avatar">
                <div class="crud text-center">
                  <a href="" data-toggle="modal" data-target="#addpiture"><i class="material-icons text-info" data-toggle="tooltip" title="Add Picture!" data-placement="left">add</i></a>
                  <a href="" data-toggle="modal" data-target="#updatepiture"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Picture!" data-placement="left">edit</i></a>
                  <a href="" data-toggle="tooltip" title="Delete Picture!" data-placement="right"><i class="material-icons text-danger" style="text-align:center">delete</i></a>
                </div>
              </div>

            </div>
            <div class="form-row">
              <div class="col-md-12 mb-3 md-form mb-4 pink-textarea active-pink-textarea">
                <label for="form18">Description</label>
                <textarea id="form18" class="md-textarea form-control" rows="3">We will play with altogether. Don't forget to come play with us make sure be happy.</textarea>
              </div>
            </div>
            <a data-dismiss="modal" class="closeModal">DISCARD</a>
            &nbsp;
            <input type="submit" value="UPDATE" class="createBtn text-warning">
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- =================================END MODEL UPDATE==================================================== -->
  @endsection
