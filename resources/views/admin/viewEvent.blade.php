
@extends('layouts.app')

@section('content')
  <br>  
  <div class="container">
      <div class="col-12">
        <div class="form-group has-search mt-4">
          <span class="fa fa-search form-control-feedback"></span>
          <input type="text" class="form-control" placeholder="Search">
      </div>
      <h1 class="text-center"><b class="text-success">A</b>ll Events</h1><br>
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
                <a href="" class="text-danger" data-toggle="modal" data-target="#removeCategory"><span class="material-icons text-danger">delete</span></a>
              </td>
            </tr>
          </tbody>
        </table>
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
              </div>
          </div>
          </div>
      </div>
    </div>
</div>
@endsection

  
  