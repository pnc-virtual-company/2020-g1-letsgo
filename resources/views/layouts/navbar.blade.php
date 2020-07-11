
<nav class="navbar navbar-expand-md  navbar-dark" style="background-color: teal;">
  <!-- Brand -->
  <a class="navbar-brand" href="pizza">Let's go</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item"><a class="nav-link text-uppercase" href="#">Explorer Event</a></li>
      <li class="nav-item"><a class="nav-link text-uppercase" href="{{ url('eventDetail')}}">Your Event</a></li>
      @if(Auth::user()->role == 1)
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbardrop" data-toggle="dropdown">
        MANAGE
      </a>
      <div class="dropdown-menu" style="background-color: teal;">
        <a class="dropdown-item text-uppercase" href="#">EVENT</a>
        <a class="dropdown-item text-uppercase" href="#">CATEGORY</a>
      </div>
      @endif
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbardrop" data-toggle="dropdown">
        {{Auth::user()->firstname}}
      </a>
      <div class="dropdown-menu" style="background-color: teal;">
        <a class="dropdown-item text-uppercase" href="{{ url('editUser')}}" >Profile</a>
        <a class="dropdown-item text-uppercase" href="{{ url('logout') }}">Logout</a>
      </div>
    </ul>
  </div>
</nav>