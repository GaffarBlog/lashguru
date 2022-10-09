<!-- Begin Add SVG Files Page Content -->
@extends('main')
@section('title')
    {{ 'Add SVG Files' }}
@endsection
@section('main-container')
    <!-- Add SVG Files Page Start -->
    <div class="container-fluid" id="">
        <!-- Add SVG Files Page Heading Start-->
        <a href="/manage-svg-files" class="float-right btn btn-danger add-task">Manage SVG Main Content</a>
        <h1 class="h3 mb-4 text-gray-800">Admin Page: Add SVG Files</h1>
        <!-- Add SVG Files Page Heading End -->
        <!-- Add SVG Files Page divider line Start -->
        <hr class="sidebar-divider rounded p-1 bg-primary text-white">
        <!-- Add SVG Files Page divider line End -->
        <!-- Add SVG Files Page  button Heading  Start -->
        <h4 class=" mb-4 text-dark">Please select the new category to add the new content.
        </h4>
        <!-- Add SVG Files Page  button Heading End -->
        <!-- Add SVG Files Page  button Section start -->
        <div class="row mb-4">
            @foreach ($categories as $category)
                <div class="ml-2">
                    <button class="btn btn-primary category-btn" data-category_id="{{ $category->id }}"><span
                            class="p-2">{{ __($category->svg_file) }}</span></button>
                </div>
            @endforeach
        </div>
        <!-- Add SVG Files Page  button Section end -->
        <form method="post" action="{{ route('svg.store') }}" enctype="multipart/form-data">
            @csrf
            <!-- Add SVG Files Page select catagory start -->
            <div class="row">
                <div class="col-4">
                    <h4 class=" mb-1 text-dark">Please select sub catagory
                    </h4>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-4">
                    <select name="sub_cat_manage_svg_file_id" class="custom-select text-dark" id="subCategory">
                        <option class="bg-white text-dark default" value="">Select Category First</option>
                    </select>
                </div>
            </div>
            <!-- Add SVG Files Page select catagory End-->
            <!-- Add SVG Files Page select file section Start-->
            <div class=" card my-4 p-5">
                <div class="row">
                    <div class="col-3">
                        <h4 class=" mb-1 text-dark">Main File 1
                        </h4>
                    </div>
                    <div class="col-3">
                        <h4 class=" mb-1 text-dark">Main File 2
                        </h4>
                    </div>
                    <div class="col-3">
                        <h4 class=" mb-1 text-dark">Main File 3
                        </h4>
                    </div>
                    <div class="col-3">
                        <h4 class=" mb-1 text-dark">Main File 4
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="input-group mb-3 rounded">
                            <div class="custom-file">
                                <input type="file" name="main_file_one" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02"
                                    aria-describedby="inputGroupFileAddon02"><span class="pr-2">Choose file</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group mb-3 rounded">
                            <div class="custom-file">
                                <input type="file" name="main_file_two" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02"
                                    aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group mb-3 rounded">
                            <div class="custom-file">
                                <input type="file" name="main_file_three" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02"
                                    aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="input-group mb-3 rounded">
                            <div class="custom-file">
                                <input type="file" name="main_file_four" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02"
                                    aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end --}}
                <div class="row">
                    <div class="col-3">
                        <h4 class=" mb-1 text-dark">Extension (File 2)
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="input-group mb-3 rounded">
                            <div class="custom-file">
                                <input type="file" name="extension_one" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02"
                                    aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end --}}
                <div class="row">
                    <div class="col-3">
                        <h4 class=" mb-1 text-dark">Extension (File 3)
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="input-group mb-3 rounded">
                            <div class="custom-file">
                                <input type="file" name="extension_two" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02"
                                    aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end --}}
                <div class="row">
                    <div class="col-3">
                        <h4 class=" mb-1 text-dark">Extension (File 4)
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="input-group mb-3 rounded">
                            <div class="custom-file">
                                <input type="file" name="extension_three" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02"
                                    aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end --}}
                <div class="row">
                    <div class="col-3">
                        <h4 class=" mb-1 text-dark">Extension (File 5)
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="input-group mb-3 rounded">
                            <div class="custom-file">
                                <input type="file" name="extension_four" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02"
                                    aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end --}}
                <div class="row">
                    <div class="col-3">
                        <h4 class=" mb-1 text-dark">Extension (File 6)
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="input-group mb-3 rounded">
                            <div class="custom-file">
                                <input type="file" name="extension_five" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02"
                                    aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end --}}
                <div class="row">
                    <div class="col-3">
                        <h4 class=" mb-1 text-dark">Extension (File 7)
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="input-group mb-3 rounded">
                            <div class="custom-file">
                                <input type="file" name="extension_six" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02"
                                    aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end --}}
                <div class="row">
                    <div class="col-3">
                        <h4 class=" mb-1 text-dark">Extension (File 8)
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="input-group mb-3 rounded">
                            <div class="custom-file">
                                <input type="file" name="extension_seven" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02"
                                    aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end --}}
                <div class="row">
                    <div class="col-3">
                        <h4 class=" mb-1 text-dark">Extension (File 9)
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="input-group mb-3 rounded">
                            <div class="custom-file">
                                <input type="file" name="extension_eight" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02"
                                    aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end --}}
                <div class="row">
                    <div class="col-3">
                        <h4 class=" mb-1 text-dark">Extension (File 10)
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="input-group mb-3 rounded">
                            <div class="custom-file">
                                <input type="file" name="extension_nine" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02"
                                    aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end --}}
                <div class="d-flex justify-content-between">
                    <h1 class="h3 text-gray-800"></h1>
                    <button type="submit" class="float-right btn btn-primary text-white">Add New Content</button>
                </div>
            </div>
        </form>
        <!-- Add SVG Files Page select file section End -->
        <!-- Add SVG Files Page Edit delete table Section start -->
        <h4 class=" mb-4 text-dark">Backgrounds: Square Box (600px x 600px)
        </h4>
        <hr class="sidebar-divider rounded p-1 bg-primary text-white">
        <div class="d-flex justify-content-between mt-2">
            <h4 class=" mb-4 text-dark">Count Of Content: 2
            </h4>
            <div class="col-3">
                <form>
                    <select name="text-editor" class="custom-select text-dark" id="bg-lite-blue">
                        <option class="bg-white text-dark" selected>Circles (600px X 600px)</option>
                        <option class="bg-white text-dark" value="">Background (600px X 600px)</option>
                        <option class="bg-white text-dark" value="">Coves (600px X 600px)</option>
                        <option class="bg-white text-dark" value="">game (600px X 600px)</option>
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
                            <th scope="col">Title</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Count of file</th>
                            <th scope="col">Type</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Edit <span class="ml-3">Delete</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Square Box 02</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>3</td>
                            <td>set</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button class="btn btn-primary"> Edit</button>
                                <span><button type="button" class="btn btn-danger">Delete</button></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
                {{-- Pagination start --}}
                <div class=" d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                {{-- Pagination End --}}
            </div>
        </div>
        <!-- Add SVG Files Page Edit delete table Section start -->
    </div>
    @push('css')
        <link href="{{ asset('css/style.cwd.css') }}" rel="stylesheet">
    @endpush
    </body>
    <!-- Manage SVG Files Page End -->
    </div>
@endsection
<!-- End of Main Content -->

@push('js')
    <script>
        let subCategories = @json($subCategories);
        $('.category-btn').on('click', function() {
            $('.category-btn').not(this).removeClass('active');
            let html = '';
            let categoryId = $(this).data('category_id');
            let subCategory = $('[name=sub_cat_manage_svg_file_id]');
            if ($(this).hasClass('active')) {
                subCategory.html(
                    `<option class="bg-white text-dark default" value="">Select Category First</option>`);
                $(this).removeClass('active');
            } else {
                $(this).addClass('active');
                subCategory.html(`<option class="bg-white text-dark default" value="">Select One</option>`);
                $.each(subCategories, function(index, subcat) {
                    if (subcat.cat_manage_svg_file_id == categoryId) {
                        html +=
                            `<option class="bg-white text-dark default" value="${subcat.id}">${subcat.title}(${subcat.width_in_px}px x ${subcat.height_in_px}px)</option>`;
                    }
                });
                subCategory.append(html);
            }
        });

        $('#subCategory').on('change', function(){
            const subCategoryId = $(this).val();
            $.each(subCategories, function(index, subcat){
                if (subCategoryId == subcat.id) {
                    if (subcat.content_type === 'Set') {
                        console.log('set');
                    }else{
                        console.log('single');
                    }
                }
            });
            // console.log(subCategoryId);
        });
    </script>
@endpush
