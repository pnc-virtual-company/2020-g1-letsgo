@include('layouts.navbar')
@extends('layouts.main')

@section('content')
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
    <div class="form-group has-search mt-4">
        <span class="fa fa-search form-control-feedback"></span>
        <input type="text" class="form-control" placeholder="Search">
    </div>
    <h3><b>Categories</b></h3>
    <div class="row">
        <div class="col-md-11"></div>
        <div class="col-md-1">
            <button class="btn btn-warning text-light" data-toggle="modal" data-target="#addCategory">Create</button>
        </div>

        <!-- Form Add Category -->
        <div class="modal" id="addCategory">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <h3 class="mb-4"><b>Create Category</b></h3>
                    <input type="text" class="form-control mb-4" placeholder="Category name">
                    <button type="submit" class="btn btn-warning float-right text-light ml-2">CREATE</button>
                    <button type="button" class="btn btn-danger float-right" data-dismiss="modal">DISCARD</button>
                </div>
            </div>
            </div>
        </div>
    </div>
    
    {{-- table categories --}}
    <table class="table table-hover mt-3">
        @foreach ($categories as $category)
        <tbody id="myTable">
          <tr>
            <td class="action">{{$category->name}}</td>
            <td class="action_hidden">
                <a href="#" class="text-pimary" data-toggle="modal" data-target="#editCategory"><span class="material-icons">edit</span></a>
                <a href="#" class="text-danger"><span class="material-icons text-danger">delete</span></a>
            </td>

            <!-- Form Update Category -->
            <div class="modal" id="editCategory">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <h3 class="mb-4"><b>Update Category</b></h3>
                        <input type="text" class="form-control mb-4" placeholder="Category name">
                        <button type="submit" class="btn btn-warning float-right text-light ml-2">Update</button>
                        <button type="button" class="btn btn-danger float-right" data-dismiss="modal">DISCARD</button>
                    </div>
                </div>
                </div>
            </div>

          </tr>
          
        </tbody>
        @endforeach
      </table>
    
</div>

