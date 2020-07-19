<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <div id="app">
        @if(Auth::check())
        <nav class="navbar navbar-expand-md  navbar-dark" style="background-color: teal;">
            <!-- Brand -->
            <a class="navbar-brand" href="{{url('/home')}}">Let's go</a>


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
                            <a class="dropdown-item text-uppercase text-warning line" href="{{route('categories.index')}}">CATEGORY</a>
                        </div>
                        @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-uppercase line" href="#" id="navbardrop" data-toggle="dropdown">
                            {{Auth::user()->firstname}}
                        </a>
                        <div class="dropdown-menu down" style="background-color: teal;">
                            <a data-toggle="modal" data-target="#userPopup" class="dropdown-item text-uppercase text-warning line" href="#">Profile</a>
                            <a class="dropdown-item text-uppercase text-warning line" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
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
                  
                  <div class="modal-body">

                    <form method="POST" action="{{route('editUser',Auth::user()->id)}}" enctype="multipart/form-data">
                      @csrf
                      @method('patch')
                      @foreach ($errors->all() as $error)
                      {{-- <p class="text-danger">{{ $error }}</p> --}}
                      <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $error }}</strong>
                       </div>
                   @endforeach 
                      <div class="form-group">
                        
                        <input type="text" value="{{Auth::user()->firstname}}" class="form-control" name="firstname">
                      </div>
                      <div class="form-group">
                        
                        <input type="text" value="{{Auth::user()->lastname}}" class="form-control" name="lastname">
                      </div>
                     

                      <div class="form-row">
                        <div class="form-group col-md-7">
                          <div class="form-group">
                      
                            <input type="mail" value="{{Auth::user()->email}}" class="form-control" name="email">
                          </div>
                         
                          <div class="form-group">
                            
                            <input type="password" placeholder="New Password...." class="form-control" name="new_password">
                          </div>
                          <div class="form-group">
                         
                            <input type="password" placeholder="Confirm Password...." class="form-control" name="confirm_password">
                          </div>
                        </div>
                        <div class="form-group col-md-5">
                          <img class="mx-auto d-block" src="../images/{{Auth::user()->profile}}" alt="..."  width="105" style="border-radius: 105px;" height="105" alt="Avatar">
                          <div class="crud text-center" >
                            <a href="" data-toggle="modal" data-target="#exampleModalCenter"><i class="material-icons text-info" data-toggle="tooltip" title="Add Picture!" data-placement="left">add</i></a>
                            <a href="" data-toggle="modal" data-target="#exampleModalCenter2"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Picture!" data-placement="left">edit</i></a>
                            <a href="" data-toggle="modal" data-target="#exampleModalCenter3" ><i class="material-icons text-danger" style="text-align:center">delete</i></a>
                          </div>
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
          </div>

          <div class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <form class="dropdown-item" action="{{route('addoreditprofile')}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row">
            <input id="file" type="file" name="picture">
            <button id="btnsubmit" class="btn mt-2 btn-primary btn-sm btn-block" type="submit">Add Profile</button>
          </div>
        </form>
       
      </div>
     
     
    </div>
  </div>
</div>

<div class="modal fade " id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <form class="dropdown-item" action="{{route('addoreditprofile')}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          <div class="row">
            <input id="file" type="file" name="picture">
            <button id="btnsubmit" class="btn mt-2 btn-primary btn-sm btn-block" type="submit">Update Profile</button>
          </div>
        </form>
       
      </div>
     
     
    </div>
  </div>
</div>

{{-- delete picture of user --}}
<div class="modal fade " id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Picture</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure delete?
      </div>
      <div class="modal-footer">
        <form method="POST" action= "{{route('delete')}}">
          @csrf
          @method('DELETE')
          <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
    
  </div>
</div>

    </div>
    @endif
    <main class="py-4">
        @yield('content')
        <script>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </script>
    </main>
    </div>
    
</body>

</html>