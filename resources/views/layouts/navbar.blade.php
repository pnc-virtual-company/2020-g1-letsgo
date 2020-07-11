
<<<<<<< HEAD
<nav class="navbar navbar-expand-md  navbar-dark" style="background-color: teal;">
=======

<nav class="navbar navbar-expand-md navbar-dark" style="background-color: teal;">
>>>>>>> 6466ea3c8362477962a4ec482c0619b0244b470a
  <!-- Brand -->
  <a class="navbar-brand" href="{{url('mainView')}}">Let's go</a>


  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav navbar-nav ml-auto">
<<<<<<< HEAD
      <li class="nav-item"><a class="nav-link text-uppercase" href="#">Explorer Event</a></li>
      <li class="nav-item"><a class="nav-link text-uppercase" href="{{ url('eventDetail')}}">Your Event</a></li>
=======

      <li class="nav-item"><a class="nav-link text-uppercase line" href="#">Explorer Event</a></li>
      <li class="nav-item"><a class="nav-link text-uppercase line" href="{{ url('event') }}">Your Event</a></li>
>>>>>>> 6466ea3c8362477962a4ec482c0619b0244b470a
      @if(Auth::user()->role == 1)
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-uppercase line" href="#" id="navbardrop" data-toggle="dropdown">
        MANAGE
      </a>
      <div class="dropdown-menu" style="background-color: teal;">
        <a class="dropdown-item text-uppercase text-warning line" href="{{{route('viewevent')}}}">EVENT</a>
        <a class="dropdown-item text-uppercase" href="{{route('categories.index')}}">CATEGORY</a>
      </div>
      @endif
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-uppercase line" href="#" id="navbardrop" data-toggle="dropdown">
        {{Auth::user()->firstname}}
      </a>
<<<<<<< HEAD
      <div class="dropdown-menu" style="background-color: teal;">
        <a class="dropdown-item text-uppercase" href="{{ url('editUser')}}" >Profile</a>
        <a class="dropdown-item text-uppercase" href="{{ url('logout') }}">Logout</a>
=======
      <div class="dropdown-menu down" style="background-color: teal;">
        <a class="dropdown-item text-uppercase text-warning line" href="#">Profile</a>
        <a class="dropdown-item text-uppercase text-warning line" href="{{ url('logout') }}">Logout</a>

>>>>>>> 6466ea3c8362477962a4ec482c0619b0244b470a
      </div>
    </ul>
  </div>
</nav>