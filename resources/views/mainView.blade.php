@extends('layouts.main')
@yield('content')
@include('layouts.navbar')

<div class="container mt-5">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="text-right">
                <a href="" class="btn btn-warning btn-sm text-white font-weight-bolder" data-toggle="modal" data-target="#createPizza">
                    <i class="material-icons float-left" data-toggle="tooltip" title="Add Pizza!" data-placement="left">add</i>&nbsp;CREATE EVENT
                </a>
            </div>
        {{-- put card --}}
        <div class="card bg-light text-dark">
            <div class="card-body">
                <h6>Board game</h6>
                <div class="row">
                    <div class="col-2">
                        <p>4:00pm</p>
                    </div>
                    <div class="col-4">
                        <p>Reading Books</p>
                    </div>
                    <div class="col-3">
                        <div class="container-image">
                            <img class="mx-auto d-block" src="" width="105" style="border-radius: 105px;" height="105" alt="Avatar">
                        </div>
                    </div>
                    <div class="col-3">
                        <p>Reading Books</p>
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
<div class="modal-dialog">
  <div class="modal-content">
  
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Create Pizza</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
    <div class="modal-body text-right">
        <form  action="/" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Pizza name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Prize in dollars">
            </div>
            <div class="form-group">
                <textarea name="" placeholder="Ingredients" class="form-control"></textarea>
            </div>
        <a data-dismiss="modal" class="closeModal">DISCARD</a>
          &nbsp;
      <input type="submit" value="CREATE" class="createBtn text-warning">
    </div>
    </form>
  </div>
</div>
</div>
<!-- =================================END MODEL CREATE==================================================== -->

<!-- ========================================START Model UPDATE================================================ -->
<!-- The Modal -->
<div class="modal fade" id="updatePizza">
<div class="modal-dialog">
  <div class="modal-content">
  
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Edit Pizza</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    
    <!-- Modal body -->
    <div class="modal-body text-right">
        <form  action="/" method="post">
            <div class="form-group">
                <input type="text" class="form-control" value="Rady Pizza">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" value="100">
            </div>
            <div class="form-group">
                <textarea name=""  class="form-control">Cheese, Tomatoes, Chicken, Salad</textarea>
            </div>
        <a data-dismiss="modal" class="closeModal">DISCARD</a>
          &nbsp;
      <input type="submit" value="UPDATE" class="createBtn text-warning">
    </div>
    </form>
  </div>
</div>
</div>
<!-- =================================END MODEL UPDATE==================================================== -->

