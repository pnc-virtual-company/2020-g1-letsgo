@extends('layouts.main')
@section('content')
<div class="auth">
  <div class="auth__header">
    
  </div>
  <div class="auth__body">
    <form class="auth__form" action="#" method="post">
      @csrf
      <div class="auth__form_body">
        <h3 class="auth__form_title">
            Sign In
        </h3>
        <div>
          <div class="form-group">
            <label class="text-uppercase small">Email</label>
            <input id="email" type="email" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label class="text-uppercase small">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
          </div>
          <a href="{{url('/')}}" class="small text-uppercase">
            Back To Sign In
          </a>
        <button type="submit" class="btn btn-warning text-white float-right small">
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