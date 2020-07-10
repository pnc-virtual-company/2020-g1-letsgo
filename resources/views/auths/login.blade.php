@extends('layouts.main')
@section('content')
<div class="auth">
  <div class="auth__header">
    
  </div>
  <div class="auth__body">
    <form class="auth__form" action="{{ url('login') }}">
      <div class="auth__form_body">
        <h3 class="auth__form_title">
            Sign In
        </h3>
        @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                    @php
                        Session::forget('error');
                    @endphp
                </div>
            @endif
        <div>
          <div class="form-group">
            <label class="text-uppercase small">Email</label>
            <input id="email" type="email" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label class="text-uppercase small">Password</label>
            <input type="password" class="form-control" placeholder="Password" name="password">
          </div>
          <a href="{{ url('register') }}" class="small text-uppercase">
            Create Account
          </a>
          <button type="submit" class="btn btn-warning text-white float-right small">
              NEXT
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection