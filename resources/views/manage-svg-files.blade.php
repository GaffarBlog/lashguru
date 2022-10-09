<!-- Begin Manage SVG Files Page Content -->
@extends('main')
@section('title')
    {{ 'Manage SVG Files' }}
@endsection
@section('main-container')
    <!-- Manage SVG Files Page Start -->
    <div class="container-fluid" id="">
        <!-- Manage SVG Files Page Heading Start-->
        <a href="/add-svg-files" class="float-right btn btn-danger add-task">Add New SVG File</a>
        <h1 class="h3 mb-4 text-gray-800">Admin Page: Manage SVG Files</h1>
        <!-- Manage SVG Files Page Heading End -->
        <!-- Manage SVG Files Page divider line Start -->
        <hr class="sidebar-divider rounded p-1 bg-primary text-white">
        <!-- Manage SVG Files Page divider line End -->
        <!-- Manage SVG Files Page  button Heading  Start -->
        <h4 class=" mb-4 text-dark">Please select the category to add the new content.
        </h4>
        <!-- Manage SVG Files Page  button Heading End -->
        <!-- Manage SVG Files Page  button Section start -->
        <div class="row">
            @foreach ($cat_manage_svg_files as $category)
                <div class="ml-2">
                    <button class="btn btn-primary add-category" data-category_id="{{ $category->id }}"><span
                            class="p-2">{{ __($category->svg_file) }}</span></button>
                </div>
            @endforeach
        </div>
        <!-- Manage SVG Files Page  button Section end -->
        <!-- Manage SVG Files Page radio button Section start -->
        <form method="POST">
            @csrf
            <input type="hidden" name="cat_manage_svg_file_id" />
            <div class=" card my-4 p-5">
                @if (session('success'))
                    <div class="alert alert-success"><strong>Success!</strong> {{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="row">
                    <div class="col-6">Title</div>
                    <div class="col-2">Width in px</div>
                    <div class="col-2">Height in px</div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <input type="text" name="title" class="form-control" id="formGroupExampleInput"
                            placeholder="Square box" required>
                    </div>
                    <div class="col-2">
                        <input type="text" name="width_in_px" class="form-control" id="formGroupExampleInput2"
                            placeholder="600" required>
                    </div>
                    <div class="col-2">
                        <input type="text" name="height_in_px" class="form-control" id="formGroupExampleInput2"
                            placeholder="600" required>
                    </div>
                </div>
                <div class="row  mt-4">
                    <div class="ml-3">
                        <p class=" mb-4 text-dark">Content type.
                        </p>
                    </div>
                </div>
                <div class="row ml-4 d-flex justify-content-between">
                    <div class=" d-flex justify-content-between">
                        <input class="form-check-input" type="radio" name="content_type" id="gridRadios1" value="Single"
                            checked>
                        <label class="form-check-label" for="gridRadios1" required>
                            Single File
                        </label>
                        <div class="ml-5">
                            <input class="form-check-input" type="radio" name="content_type" id="gridRadios2"
                                value="Set" checked>
                            <label class="form-check-label" for="gridRadios2" required>
                                Set File
                            </label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h1 class="h3 text-gray-800"></h1>
                        <button type="submit" class="float-right btn btn-primary text-white">Add New Content</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- Manage SVG Files Page radio button Section end -->
        <!-- Manage SVG Files Page Edit delete table Section start -->
        <h4 class=" mb-4 text-dark">Existing Files
        </h4>
        <hr class="sidebar-divider rounded p-1 bg-primary text-white">
        <div class="d-flex justify-content-between mt-2">
            <h4 class=" mb-4 text-dark">Count Of Content: {{ $subCategories->count() }}
            </h4>
            <div class="col-2">
                <form method="get" action="">
                    <select name="cat_manage_svg_file_id" class="custom-select text-dark" id="bg-lite-blue">
                        <option class="bg-white text-dark" value="">@lang('Select One')</option>
                        @foreach ($cat_manage_svg_files as $category)
                            <option class="bg-white text-dark" value="{{ $category->id }}" @selected($category->id == request()->cat_manage_svg_file_id)>
                                {{ __($category->svg_file) }}</option>
                        @endforeach
                    </select>
                </form>
            </div>
        </div>
        {{-- end --}}
        <div class="col mb-4 mt-1">
            <div class="card p-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Category</th>
                            <th scope="col">Title</th>
                            <th scope="col">Width in Px</th>
                            <th scope="col">Height in Px</th>
                            <th scope="col">Content Type</th>
                            <th scope="col">Edit<span class="ml-3">Delete</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($subCategories as $subCategory)
                            <tr>
                                <td>{{ $subCategories->firstItem() + $loop->index }}</td>
                                <td>{{ __($subCategory->svg_category->svg_file) }}</td>
                                <td>{{ __($subCategory->title) }}</td>
                                <td>{{ $subCategory->width_in_px }}</td>
                                <td>{{ $subCategory->height_in_px }}</td>
                                <td>{{ __($subCategory->content_type) }}</td>
                                <td><button class="btn btn-primary"> Edit</button>
                                    <span><button type="button" class="btn btn-danger btnDelete" data-action="{{ route('sub_cat_manage_svg_file.delete', $subCategory->id) }}">Delete</button></span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="100%" class="text-center">Data not found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{-- Pagination start --}}
                @if ($subCategories->hasPages())
                    <div class=" d-flex justify-content-center">
                        {{ $subCategories->links() }}
                    </div>
                @endif
                {{-- Pagination End --}}
            </div>
        </div>
        <!-- Manage SVG Files Page Edit delete table Section start -->
    </div>
    @push('css')
        <link href="{{ asset('css/style.cwd.css') }}" rel="stylesheet">
    @endpush
    </body>
    <!-- Manage SVG Files Page End -->
    </div>

    <!-- Delete Model -->
    <div class="modal fade" id="deleteSubCategoryModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title">Delete Svg Sub Category</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <form method="post" action="">
                    @csrf
                    <div class="modal-body">
                        Do you really want to delete this SVG sub category?
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger cw-delete-category">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
<!-- End of Main Content -->
@push('js')
    <script>
        $('.add-category').on('click', function() {
            $('.add-category').removeClass('active');
            let categoryInput = $('[name=cat_manage_svg_file_id]');
            if (categoryInput.val() == $(this).data('category_id')) {
                categoryInput.val('');
                $(this).removeClass('active');
            } else {
                categoryInput.val($(this).data('category_id'));
                $(this).addClass('active');
            }
        });
        $('[name=cat_manage_svg_file_id]').on('change', function() {
            $(this).parents('form').submit();
        });

        $('.btnDelete').on('click', function(){
            let url = $(this).data('action');
            let modal = $('#deleteSubCategoryModal');
            modal.find('form').attr('action', url);
            modal.modal('show');
        });
    </script>
@endpush
