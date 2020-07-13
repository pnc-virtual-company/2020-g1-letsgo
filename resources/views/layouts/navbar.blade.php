<nav class="navbar navbar-expand-md  navbar-dark" style="background-color: teal;">
  <!-- Brand -->
  <a class="navbar-brand" href="{{url('mainView')}}">Let's go</a>


  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="nav navbar-nav ml-auto">

      <li class="nav-item"><a class="nav-link text-uppercase line" href="{{ url('exploreEvent') }}">Explorer Event</a></li>
      <li class="nav-item"><a class="nav-link text-uppercase line" href="{{ url('event') }}">Your Event</a></li>
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
        <div class="dropdown-menu down" style="background-color: teal;">
          <a data-toggle="modal" data-target="#userPopup" class="dropdown-item text-uppercase text-warning line" href="#">Profile</a>
          <a class="dropdown-item text-uppercase text-warning line" href="{{ url('logout') }}">Logout</a>
        </div>
    </ul>
  </div>
</nav>
<div class="container">
  <!-- The Modal -->
  <div class="modal fade" id="userPopup">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-center">Edit User</h4>
          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        </div>
        <div class="row">
          <div class="col-8">
            <!-- Modal body -->
            <div class="modal-body">
              <input type="text" name="fname" placeholder="First name" class="form-control"><br>
              <input type="text" name="lname" placeholder="Last name" class="form-control"><br>
              <input type="email" name="email" placeholder="email" class="form-control"><br>
              <input type="password" name="pass" placeholder="Password" class="form-control">
            </div>
          </div>
          <div class="col-4">
            <div class="card" style="width: 125px; margin-top: 15px; height: 125px">
              <img style="width: 125px;  height: 125px" src="data:image/jpeg;base64,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" alt="Not found">
              <div class="row">
                &nbsp;&nbsp; <i class="material-icons" style="font-size:35px">add</i>&nbsp;
                <i class="material-icons" style="font-size:35px">mode_edit</i>&nbsp;
                &nbsp; <i class="material-icons" style="font-size:35px">delete</i><br><br>
                <div class="row">
                  <h5>DISCARD </h5>&nbsp;
                  <h5 class="text-warning"> UPDATE</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>