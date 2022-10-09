<!-- Begin Cat Manage Template Categories Page Content -->
@extends('main')
@section('title') {{'Template Categories'}} @endsection
@section('main-container')
<!-- Cat Manage Template Categories Page Start -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Admin Page: Manage Template Categories</h1>
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
                        <textarea class="form-control" name="cwaddbc" required required id="cwaddbc" rows="3"></textarea>
                    </div>
                    <center><input type="submit" name="dcwaddbc" class="btn btn-primary mt-3" value="Add Content"></center>
                </form>
            </div>
            <div class="card p-5 mt-5 mb-5">
                <div class="cw-responce-del mt-4"></div>
                @if ( isset($_GET['leveltwo']) && isset($_GET['levelthree']) )
                    <div class="d-flex justify-content-between">
                        <h4 class="text-dark">Manage Template Categories: {{ $level_three->count() }} Categories</h4>
                        <div class="d-flex justify-content-between">
                            <a href="?leveltwo={{ $_GET['leveltwo'] }}" rel="noopener noreferrer"><i class="fas fa-angle-left"> Level Two</i></a>
                        </div>
                    </div>
                @elseif( isset($_GET['leveltwo']) )
                    <div class="d-flex justify-content-between">
                        <h4 class="text-dark">Manage Template Categories: {{ $level_two->count() }} Categories</h4>
                        <div class="d-flex justify-content-between">
                            <a href="cat-manage-templates" rel="noopener noreferrer"><i class="fas fa-angle-left"> Level One</i></a>
                        </div>
                    </div>
                @else
                    <h4 class="text-dark">Manage Template Categories: {{ $cat_manage_templates->count() }} Categories</h4>
                @endif

                <table class="table table-striped mt-4">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="w-75">Categories</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="cwBusinessCat">
                        @php $index = 0; @endphp
                        @if ( isset($_GET['leveltwo']) && isset($_GET['levelthree']) )
                            @if (!empty($level_three) && count($level_three))
                                @foreach($level_three as $level)
                                    <tr>
                                        <td class="align-middle">{{ $level->id }}</td>
                                        <td class="align-middle">
                                            <div class="d-flex justify-content-between align-items-center">
                                                {{ $level->temp_name }}
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button type="button" class="btn btn-primary mr-3" id="cwEditCategory" data-toggle="modal" data-target="#cwUpdateCategory" data-id="{{ $level->id }}">Edit</button>
                                            <button type="button" class="btn btn-danger ml-3" id="cwDeleteCategory" data-toggle="modal" data-target="#cwDeleteCategoryModal" data-id="{{ $level->id }}">Delete</button>
                                        </td>
                                    </tr>
                                    @php $index++; @endphp
                                @endforeach
                            @else
                            <tr>
                                <td colspan="10">No, Result Found!</td>
                            </tr>
                            @endif
                        @elseif( isset($_GET['leveltwo']) )
                            @if (!empty($level_two) && count($level_two))
                                @foreach($level_two as $level)
                                    <tr>
                                        <td class="align-middle">{{ $level->id }}</td>
                                        <td class="align-middle">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="?leveltwo={{ $level->level_two }}&levelthree={{ $level->id }}">{{ $level->temp_name }}</a>
                                                <span class="badge badge-pill badge-secondary">{{ $count[$index] }}</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button type="button" class="btn btn-primary mr-3" id="cwEditCategory" data-toggle="modal" data-target="#cwUpdateCategory" data-id="{{ $level->id }}">Edit</button>
                                            <button type="button" class="btn btn-danger ml-3" id="cwDeleteCategory" data-toggle="modal" data-target="#cwDeleteCategoryModal" data-id="{{ $level->id }}">Delete</button>
                                        </td>
                                    </tr>
                                    @php $index++; @endphp
                                @endforeach
                            @else
                            <tr>
                                <td colspan="10">No, Result Found!</td>
                            </tr>
                            @endif
                        @else
                            @if( !empty($cat_manage_templates) && count($cat_manage_templates) )
                                @foreach($cat_manage_templates as $category)
                                    <tr>
                                        <td class="align-middle">{{ $category->id }}</td>
                                        <td class="align-middle">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="?leveltwo={{ $category->id }}">{{ $category->temp_name }}</a>
                                                <span class="badge badge-pill badge-secondary">{{ $count[$index] }}</span>
                                            </div>
                                        </td>
                                        <td class="align-middle">
                                            <button type="button" class="btn btn-primary mr-3" id="cwEditCategory" data-toggle="modal" data-target="#cwUpdateCategory" data-id="{{ $category->id }}">Edit</button>
                                            <button type="button" class="btn btn-danger ml-3" id="cwDeleteCategory" data-toggle="modal" data-target="#cwDeleteCategoryModal" data-id="{{ $category->id }}">Delete</button>
                                        </td>
                                    </tr>
                                    @php $index++; @endphp
                                @endforeach
                            @else
                            <tr>
                                <td colspan="10">No, Result Found!</td>
                            </tr>
                            @endif
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
<!-- End Cat Manage Template Categories -->
<!-- Add Script File -->
@push('js')
    <script src="{{ asset('js/cat-manage-templates.js?' . time() ) }}"></script>
@endpush
<!-- End Script File -->