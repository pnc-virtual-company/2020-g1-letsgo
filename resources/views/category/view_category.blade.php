@include('layouts.navbar')
@extends('layouts.main')

@section('content')
<style>
    .action_hidden {
        float: right;
        display: none;
    }
    .action:hover + .action_hidden {
        display: block;
    }
</style>
<div class="container">
    {{-- button search --}}
    <input class="form-control mt-3" id="myInput" type="text" placeholder="&#xF002; Search..">
    <br>
    <h3><b>Categories</b></h3>
    <div class="row">
        <div class="col-md-11"></div>
        <div class="col-md-1">
            <a href="#" class="btn btn-warning text-light" data-toggle="modal" data-target="#addCategory">Create</a>
        </div>

        <!-- Form Add Category -->
        <div class="modal" id="addCategory">
            <div class="modal-dialog">
            <div class="modal-content">
        
                <div class="modal-body">
                    <h3 class="mb-4"><b>Create Category</b></h3>
                    <input type="text" class="form-control mb-4" placeholder="Category name">
                    <button type="submit" class="btn btn-warning float-right ml-2">CREATE</button>
                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">DISCARD</button>
                </div>
        
            </div>
            </div>
        </div>
    </div>
    
    <table class="table table-hover mt-3">
        @foreach ($categories as $category)
        <tbody>
          <tr>
            <td class="action">{{$category->name}}</td>
            <td class="action_hidden">
                <a href="#"><span class="material-icons">edit</span></a>
                <a href="#"><span class="material-icons text-danger">delete</span></a>
            </td>
          </tr>
          
        </tbody>
        @endforeach
      </table>
        

    <script>
        // search students
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
    </script>
</div>

