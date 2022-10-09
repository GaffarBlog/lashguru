<!-- Begin Cat Manage User Roles Page Content -->
@extends('main')
@section('title') {{'Manage User Roles'}} @endsection
@section('main-container')
<!-- Cat Manage User Roles Page Start -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Admin Page: Manage User Roles</h1>
    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
    <div class="row">
        <div class="col-12">
            <div class="card p-5">
                @if ( session('success') )
                    <div class="alert alert-success"><strong>Success!</strong> {{ session('success') }}</div>
                @endif
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="cwaddbc">Here you can add a single category or multiple categories (separated by comma).</label>
                        <textarea class="form-control" name="cwaddbc" required id="cwaddbc" rows="3"></textarea>
                    </div>
                    <center><input type="submit" name="dcwaddbc" class="btn btn-primary mt-3" value="Add Content"></center>
                </form>
            </div>
            <div class="card p-5 mt-5 mb-5">
                <div class="cw-responce-del mt-4"></div>
                <h4 class="text-dark">Tasks Categories: {{ $cat_manage_user_roles->count() }} Categories</h4>

                <table class="table table-striped mt-4">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="w-75">Categories</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="cwBusinessCat">
                        @if( !empty($cat_manage_user_roles) && count($cat_manage_user_roles) )
                            @foreach($cat_manage_user_roles as $category)
                                <tr>
                                    <td class="align-middle">{{ $category->id }}</td>
                                    <td class="align-middle">
                                        <div class="d-flex justify-content-between align-items-center">
                                            {{ $category->user_role }}
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <button type="button" class="btn btn-primary mr-3" id="cwEditCategory" data-toggle="modal" data-target="#cwUpdateCategory" data-id="{{ $category->id }}">Edit</button>
                                        <button type="button" class="btn btn-danger ml-3" id="cwDeleteCategory" data-toggle="modal" data-target="#cwDeleteCategoryModal" data-id="{{ $category->id }}">Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="10">No, Result Found!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Edit Model -->
    <div class="modal fade" id="cwUpdateCategory">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                <h5 class="modal-title">Update Category</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
        
                <!-- Modal body -->
                <div class="modal-body">
                    <form>
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="cwUpdateCatName">Category Name:</label>
                            <input type="text" class="form-control" id="cwUpdateCatName" name="cwUpdateCatName">
                        </div>
                    </form>
                </div>
        
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary cw-update-category">Update</button>
                </div>
        
            </div>
        </div>
    </div>
    <!-- Delete Model -->
    <div class="modal fade" id="cwDeleteCategoryModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                <h5 class="modal-title">Delete Category</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
        
                <!-- Modal body -->
                <div class="modal-body">
                    Do you really want to delete this category?
                </div>
        
                <!-- Modal footer -->
                <div class="modal-footer">
                <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger cw-delete-category">Delete</button>
                </div>
        
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
@endsection
<!-- End Cat Manage User Roles -->
<!-- Add Script File -->
@push('js')
    <script src="{{ asset('js/cat-manage-user-roles.js?' . time() ) }}"></script>
@endpush
<!-- End Script File -->