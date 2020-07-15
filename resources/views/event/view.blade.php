@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h2 class="text-center"><strong class="Text-success">W</strong>elcome To Your Event !</h2>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="md-form active-pink active-pink-2 mb-3 mt-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search event...">
              </div>
            
               <div class="text-right">
                <a href="" class="btn btn-warning btn-sm text-white font-weight-bolder" data-toggle="modal" data-target="#createPizza">
                    <i class="material-icons float-left" data-toggle="tooltip" title="Add Pizza!" data-placement="left">add</i>&nbsp;CREATE EVENT
                </a>
            </div>
            
            <div class="container">
                <div class="col-12">
                      <!-- Actual search box -->
                   
                      {{-- <h1>Events</h1> --}}
                      {{-- <h6 class="text-primary">Saturday, July 4</h6>  --}}
                      <a href="" class="text-primary">Saturday, July 4 </a>
                  <div class="card mb-3" style="border-radius: 20px;">
                      <div class="card-body" >
                          {{-- loop to show event --}}
                        <div class="row">
                          <div class="col-sm-3"><br><h5 class="text-secondary">8:00 PM</h5></div>
                          <div class="col-sm-4">
                              <p><b class="text-primary">Sport</b></p>
                              <h4 class="text-success">Running</h4>
                              <p> <strong class="text-success">6</strong>  member going</p>
                          </div>
                          <div class="col-sm-3">
                              {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSe0tC6P0G3n_CeYFdklK3aN5VEUjAJJV1Oag&usqp=CAU" style="width: 130px; height: 120px;"  class="img-thumbnail" alt="Cinque Terre"> --}}
                              <img class="mx-auto d-block" src="https://cdn5.vectorstock.com/i/1000x1000/58/29/girl-cartoon-running-jogging-icon-graphic-vector-10785829.jpg" width="105" style="border-radius: 105px;" height="105" alt="Avatar">
                          </div>
                          <div class="col-sm-2">
                              <br>
                              {{-- <a href="#" style="font-size:22px" class="btn btn-outline-danger btn-center"><i class="fa fa-times-circle" style="color:red"></i>&nbsp;Remove</a> --}}

                              <a href="" data-toggle="modal" data-target="#updateEvent"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Event!" data-placement="left">edit</i></a>
                              <a href="" data-toggle="modal" data-target="#deteleEvent"><i class="material-icons text-danger" data-toggle="tooltip" title="Delete Event!" data-placement="left">delete</i></a>
                          </div>
                        </div>
                        {{-- end foreach of event --}}
                      </div>
                  </div>
              </div>
            </div>
            
            <div class="container">
                <div class="col-12">
                      <!-- Actual search box -->
                      {{-- <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <h1>Events</h1> --}}
                      {{-- <h5>Saturday,July 11</h5>  --}}
                      <a href="" class="text-primary">Monday, July 5 </a>
                  <div class="card mb-3" style="border-radius: 20px;">
                      <div class="card-body" >
                          {{-- loop to show event --}}
                        <div class="row">
                          <div class="col-sm-3"><br><h5 class="text-secondary">4:00 PM</h5></div>
                          <div class="col-sm-4">
                              <p><b class="text-primary">Bord game</b></p>
                              <h4 class="text-success">The Duck is Back</h4>
                              <p> <strong class="text-success">4</strong>  member going</p>
                          </div>
                          <div class="col-sm-3">
                              {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSe0tC6P0G3n_CeYFdklK3aN5VEUjAJJV1Oag&usqp=CAU" style="width: 130px; height: 120px;"  class="img-thumbnail" alt="Cinque Terre"> --}}
                              <img class="mx-auto d-block" src="https://progameguides.com/wp-content/uploads/2019/06/fortnite-back-bling-quack-pack.jpg" width="105" style="border-radius: 105px;" height="105" alt="Avatar">
                          </div>
                          <div class="col-sm-2">
                              <br>
                            

                              <a href="" data-toggle="modal" data-target="#updateEvent"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Event!" data-placement="left">edit</i></a>
                              <a href="" data-toggle="modal" data-target="#deteleEvent"><i class="material-icons text-danger" data-toggle="tooltip" title="Delete Event!" data-placement="left">delete</i></a>
							
                          </div>
                        </div>
                        {{-- end foreach of event --}}
                      </div>
                  </div>
              </div>
          </div>   
        </div>
        <div class="col-2"></div>
    </div>
</div>


<!-- ========================================START Model CREATE================================================ -->
   <!-- The Modal -->
   <div class="modal fade" id="createPizza">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title text-warning">Create Event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        
            <form>
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault01">Categories</label>
                    {{-- <input type="text" class="form-control" id="validationDefault01" placeholder="Cateoggoies..." value="" required> --}}
                    <select class="form-control" id="validationDefault01">
                        <option selected>Choose...</option>
                        <option value="1">Sport</option>
                        <option value="2">Reading</option>
                        <option value="3">Speaking</option>
                      </select>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Title</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="Title..." value="" required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault03">City</label>
                    {{-- <input type="text" class="form-control" id="validationDefault03" placeholder="City..." value="" required> --}}
                    <select class="form-control" id="validationDefault01">
                        <option selected>Choose...</option>
                        <option value="1">Phon Penh, Cambodai</option>
                        <option value="2">Kompong Thom, cambodai</option>
                        <option value="3">BangKok, Thai</option>
                      </select>
                  </div>
                </div>
          
                <div class="form-row">
                  <div class="col-md-7 mb-3">
                   <div class="form-row">
                    <div class="col-md-8 mb-3">
                        <label for="validationDefault03">Start Date</label>
                        <input type="text" class="form-control" id="validationDefault03" placeholder="Start Date..." required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="validationDefault04">At</label>
                        <input type="text" class="form-control" id="validationDefault04" placeholder="At..." required>
                      </div>

                   </div>
                   <div class="form-row">
                    <div class="col-md-8 mb-3">
                        <label for="validationDefault03">End Date</label>
                        <input type="text" class="form-control" id="validationDefault03" placeholder="Start Date..." required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="validationDefault04">At</label>
                        <input type="text" class="form-control" id="validationDefault04" placeholder="At..." required>
                      </div>

                   </div>
                  </div>
                  <div class="col-md-5 mb-3">
                            <label for="validationDefault04">Picture</label>
                            <img class="mx-auto d-block" src="https://progameguides.com/wp-content/uploads/2019/06/fortnite-back-bling-quack-pack.jpg" width="105" style="border-radius: 105px;" height="105" alt="Avatar">
                            <div class="crud text-center" >
                                <a href="" data-toggle="modal" data-target="#updatePizza"><i class="material-icons text-info" data-toggle="tooltip" title="Add Picture!" data-placement="left">add</i></a>
                                <a href="" data-toggle="modal" data-target="#updatePizza"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Picture!" data-placement="left">edit</i></a>
                            <a href="" data-toggle="tooltip" title="Delete Picture!" data-placement="right" ><i class="material-icons text-danger" style="text-align:center">delete</i></a>
                            </div>
                  </div>
                 
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3 md-form mb-4 pink-textarea active-pink-textarea">
                        <label for="form18">Description</label>
                        <textarea id="form18" class="md-textarea form-control" rows="3" placeholder="......"></textarea>
                    </div>
                </div>
                <a data-dismiss="modal" class="closeModal">DISCARD</a>
                &nbsp;
            <input type="submit" value="CREATE" class="createBtn text-warning">
              </form>
        </div>
        
      
        
      </div>
    </div>
  </div>
<!-- =================================END MODEL CREATE==================================================== -->



<!-- ========================================START Model UPDATE================================================ -->
   <!-- The Modal -->

    <div class="modal fade" id="updateEvent">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
          
           <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title text-warning">Update Event</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          
          <!-- Modal body -->
          <div class="modal-body">
          
              <form>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="validationDefault01">Categories</label>
                      {{-- <input type="text" class="form-control" id="validationDefault01" placeholder="Cateoggoies..." value="" required> --}}
                      <select class="form-control" id="validationDefault01">
                        <option value="1" selected>Sport</option>
                        <option value="2">Reading</option>
                        <option value="3">Speaking</option>
                      </select>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationDefault02">Title</label>
                      <input type="text" class="form-control" id="validationDefault02"  value="The Duck is the back" required>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationDefault03">City</label>
                      {{-- <input type="text" class="form-control" id="validationDefault03" placeholder="City..." value="" required> --}}
                      <select class="form-control" id="validationDefault01">
                          
                          <option value="1" selected>Phon Penh, Cambodai</option>
                          <option value="2">Kompong Thom, cambodai</option>
                          <option value="3">BangKok, Thai</option>
                        </select>
                    </div>
                  </div>
            
                  <div class="form-row">
                    <div class="col-md-7 mb-3">
                     <div class="form-row">
                      <div class="col-md-8 mb-3">
                          <label for="validationDefault03">Start Date</label>
                          <input type="text" class="form-control" id="validationDefault03" value="Mondy, July 6" required>
                      </div>
  
                      <div class="col-md-4 mb-3">
                          <label for="validationDefault04">At</label>
                          <input type="text" class="form-control" id="validationDefault04" value="4:00PM" required>
                        </div>
  
                     </div>
                     <div class="form-row">
                      <div class="col-md-8 mb-3">
                          <label for="validationDefault03">End Date</label>
                          <input type="text" class="form-control" id="validationDefault03" value="Mondy, July 6" required>
                      </div>
  
                      <div class="col-md-4 mb-3">
                          <label for="validationDefault04">At</label>
                          <input type="text" class="form-control" id="validationDefault04" value="8:00PM" required>
                        </div>
  
                     </div>
                    </div>
                    <div class="col-md-5 mb-3">
                              <label for="validationDefault04">Picture</label>
                              <img class="mx-auto d-block" src="https://progameguides.com/wp-content/uploads/2019/06/fortnite-back-bling-quack-pack.jpg" width="105" style="border-radius: 105px;" height="105" alt="Avatar">
                              <div class="crud text-center" >
                                  <a href="" data-toggle="modal" data-target="#addpiture"><i class="material-icons text-info" data-toggle="tooltip" title="Add Picture!" data-placement="left">add</i></a>
                                  <a href="" data-toggle="modal" data-target="#updatepiture"><i class="material-icons text-info" data-toggle="tooltip" title="Edit Picture!" data-placement="left">edit</i></a>
                                  <a href="" data-toggle="tooltip" title="Delete Picture!" data-placement="right" ><i class="material-icons text-danger" style="text-align:center">delete</i></a>
                              </div>
                    </div>
                   
                  </div>
                  <div class="form-row">
                      <div class="col-md-12 mb-3 md-form mb-4 pink-textarea active-pink-textarea">
                          <label for="form18">Description</label>
                          <textarea id="form18" class="md-textarea form-control" rows="3" >We will play with altogether. Don't forget to come play with us make sure be happy.</textarea>
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
<!-- =================================END MODEL UPDATE==================================================== -->




<!-- ========================================START Model DELETE================================================ -->
   <!-- The Modal -->
<div class="modal fade" id="deteleEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-warning" id="exampleModalLabel">Delete Event</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         Are you sure to remove this event?
        </div>
        <div class="modal-footer">
            <a data-dismiss="modal" class="closeModal">DISCARD</a>
            &nbsp;
        <input type="submit" value="DELETE" class="createBtn text-warning">
        </div>
      </div>
    </div>
  </div>
<!-- =================================END MODEL DELETE==================================================== -->
@endsection


@endsection