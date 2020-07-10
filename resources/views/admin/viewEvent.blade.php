<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <br>  
  <div class="container">
      <div class="col-12">
            <!-- Actual search box -->
            <div class="form-group has-search">
              <span class="fa fa-search form-control-feedback"></span>
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <h1>Events</h1>
            <h5>Saturday,July 11</h5>
        <div class="card mb-3" style="border-radius: 20px;">
            <div class="card-body" >
                {{-- loop to show event --}}
              <div class="row">
                <div class="col-sm-3"><br><h2 class="text-secondary">8:00 PM</h2></div>
                <div class="col-sm-4">
                    <p><b>Bord game</b></p>
                    <h2>The Duck is Back</h2>
                    <p>4 member going</p>
                </div>
                <div class="col-sm-3">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSe0tC6P0G3n_CeYFdklK3aN5VEUjAJJV1Oag&usqp=CAU" style="width: 130px; height: 130px;"  class="img-thumbnail" alt="Cinque Terre">
                </div>
                <div class="col-sm-2">
                    <br>
                    <a href="#" style="font-size:22px" class="btn btn-outline-danger btn-center"><i class="fa fa-times-circle" style="color:red"></i>&nbsp;Remove</a>
                </div>
              </div>
              {{-- end foreach of event --}}
            </div>
        </div>
    </div>
    <style>
        .has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;

}
.btn-label {
    position: relative;
    left: -12px;
    display: inline-block;
    padding: 6px 12px;
    background: rgba(0,0,0,0.15);
    border-radius: 3px 0 0 3px;
}
.btn-labeled {
    padding-top: 0;
    padding-bottom: 0;
}
.btn { 
    margin-bottom:10px; 
}
    </style>
</div>

  
  