
<nav class="navbar navbar-expand-md navbar-dark" style="background-color: teal;">
  <!-- Brand -->
  <a class="navbar-brand" href="login">Let's go</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item"><a class="nav-link text-uppercase line" href="#">Explorer Event</a></li>
      <li class="nav-item"><a class="nav-link text-uppercase line" href="#">Your Event</a></li>
      @if(Auth::user()->role == 1)
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-uppercase line" href="#" id="navbardrop" data-toggle="dropdown">
        MANAGE
      </a>
      <div class="dropdown-menu down" style="background-color: teal;">
        <a class="dropdown-item text-warning text-uppercase line" href="#">EVENT</a>
        <a class="dropdown-item text-warning text-uppercase line" href="#">CATEGORY</a>
      </div>
      @endif
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle text-uppercase line" href="#" id="navbardrop" data-toggle="dropdown">
        {{Auth::user()->firstname}}
      </a>
      <div class="dropdown-menu down" style="background-color: teal;">
        <a class="dropdown-item text-uppercase text-warning line" href="#">Profile</a>
        <a class="dropdown-item text-uppercase text-warning line" href="{{ url('logout') }}">Logout</a>
      </div>
    </ul>
  </div>
</nav>