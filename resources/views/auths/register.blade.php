@extends('layouts.main')
@section('content')
<div class="auth">
  <div class="auth__header">
    
  </div>
  <div class="auth__body">
    <form class="auth__form" action="{{ url('userRegister') }}" method="post">
      @csrf
      <div class="auth__form_body">
        <h3 class="auth__form_title">
            Sign Up
        </h3>
        <div>
          <div class="form-group">
            <label class="text-uppercase small">First name</label>
            <input type="text" class="form-control" name="fname" placeholder="First name" >
          </div>
          <div class="form-group">
            <label class="text-uppercase small">Last name</label>
            <input type="text" class="form-control" name="lname" placeholder="Last name">
          </div>
          <div class="form-group">
            <label class="text-uppercase small">Email</label>
            <input id="email" type="email" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label class="text-uppercase small">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
          </div>
          <a href="{{url('/')}}" class="small text-uppercase">
            Back To sign in
          </a>
        <button type="submit" class="btn btn-warning float-right small">
            NEXT
        </button>
        </div>
      </div>
      <div class="auth__form_actions">
        <!-- <div class="mt-2"> -->
          
        <!-- </div>  -->
      </div>
    </form>
  </div>
</div>
@endsection
