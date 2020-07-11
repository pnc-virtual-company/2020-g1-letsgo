@include('layouts.navbar')
@extends('layouts.main')

@section('content')

<div class="container">
    {{-- button search --}}
    <div class="form-group has-search mt-4">
        <span class="fa fa-search form-control-feedback"></span>
        <input type="text" class="form-control" placeholder="Search">
    </div>
    <h3 class="text-center"><b class="text-success">C</b>ategories</h3>
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
        <tbody>
          <tr>
            <td class=" text-info action">{{$category->name}}</td>
            <td class="action_hidden">
                <a href="#" class="text-pimary" data-toggle="modal" data-target="#editCategory"><span class="material-icons">edit</span></a>
                <a href="#" class="text-danger" data-toggle="modal" data-target="#removeCategory"><span class="material-icons text-danger">delete</span></a>
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

            <!-- Form Remove Category -->
            <div class="modal" id="removeCategory">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <h3 class="mb-4"><b>Remove Category? </b></h3>
                        <p>Are you sure you want to delete the category?</p>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">CANCEL</button>
                        <button type="submit" class="btn btn-warning float-right text-light ml-2">OK</button>
                    </div>
                </div>
                </div>
            </div>

          </tr>
          
        </tbody>
        @endforeach
      </table>
    
</div>

