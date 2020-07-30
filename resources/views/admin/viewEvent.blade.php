@extends('layouts.app')

@section('content')
<br>
<div class="container">
  <div class="col-12">
    <div class="form-group has-search mt-4">
      <span class="fa fa-search form-control-feedback"></span>
      <input type="text" class="form-control" placeholder="Search">
      {{-- errow con confirm password with new password --}}
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
    <h1 class="text-center"><b class="text-success">A</b>ll Events</h1><br>
    <div class="card">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Organizer</th>
            <th>City</th>
            <th>Title</th>
            <th>Category</th>
            <th>Start date</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="action">Ronan</td>
            <td class="action">Vancouver</td>
            <td class="action">Piano</td>
            <td class="action">Music</td>
            <td class="action">25/05/2020</td>
            <td class="action_hidden">
              <a href="" class="text-danger" data-toggle="modal" data-target="#removeCategory"><span class="material-icons text-danger" data-toggle="tooltip" title="Edit Event!" data-placement="left">delete</span></a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="modal" id="removeCategory">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            {{-- <form action="" method="POST"> --}}
            <h3 class="mb-4"><b>Remove Event</b></h3>
            <p>Are you sure you want to delete the Event?</p>
            <button type="button" class="btn btn-danger" data-dismiss="modal">DON'T REMOVE</button>
            <button type="submit" class="btn btn-warning float-right text-light ml-2">REMOVE</button>
            {{-- </form> --}}
      <h1 class="text-center"><b class="text-success">A</b>ll Events</h1><br>
      <div class="card">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Organizer</th>
              <th>City</th>
              <th>Title</th>
              <th>Category</th>
              <th>Start date</th>
            </tr>
          </thead>
          <?php $items = $events;?>
            @foreach ($items as $start_date => $events)
            @foreach ($events as $event)
          <tbody>
            <tr>
              <td class="action">Ronan</td>
              <td class="action">
                <div name="city">
                    @foreach($cities as $data)
                    @foreach($data as $city)
                      <option value="{{$city}}" {{ ($city == $event->city) ? "selected" : "hidden" }}>{{$city}}</option>
                    @endforeach
                    @endforeach
                  </div>
              </td>
              <td class="action">{{$event->title}}</td>
              <td class="action">
                <div name="category">
                    @foreach ($categories as $category)
                      <option value="{{$category->id}}" {{ ($event->category['name'] == $category->name) ? "selected" : "hidden" }} >{{$category->name}}</option>
                    @endforeach
                </div>
              </td>
              <td class="action">
                <?php $date = new DateTime($start_date);
                echo date_format($date, ' d/m/Y');?>
              </td>
              <td class="action_hidden">
                <a href="" class="text-danger" data-toggle="modal" data-target="#removeCategory"><span class="material-icons text-danger" data-toggle="tooltip" title="Edit Event!" data-placement="left">delete</span></a>
              </td>    
            </tr>
          </tbody>
          @endforeach
          @endforeach
        </table>
      </div>
        <div class="modal" id="removeCategory">
          <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-body">
                  <form action="{{route('destroy',$event->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                      <h3 class="mb-4"><b>Remove Event</b></h3>
                      <p>Are you sure you want to delete the Event?</p>
                      <button type="button" class="btn btn-danger" data-dismiss="modal">DON'T REMOVE</button>
                      <button type="submit" class="btn btn-warning float-right text-light ml-2">REMOVE</button>
                  </form>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection