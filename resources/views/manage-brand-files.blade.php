<!-- Begin Add Brand Files Page Content -->
@extends('main')
@section('title') {{'Add Brand Files'}} @endsection
@section('main-container')
<!-- Add Brand Files Page Start -->
<div class="container-fluid">
    <!-- Add Brand Files Page Heading Start-->
    <h1 class="h3 mb-4 text-gray-800">Admin Page: Add Brand Files</h1>
    <!-- Add Brand Files Page Heading End -->
    <!-- Add Brand Files Page divider line Start -->
    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
    <!-- Add Brand Files Files Page divider line End -->
    <!-- Add Brand Files Page  button Heading  Start -->
    <h4 class=" mb-4 text-dark">Please upload your file 500px x 300px only.
    </h4>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif
    <!-- Add Brand Files Page  button Heading End -->
    <!-- Add Brand Files Page select file section Start-->
    <div class=" card my-4 p-5">
        <form action="{{route('brand.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-8">
                    <h4 class=" mb-1 text-dark">Title
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-8 mb-3 rounded">
                    <input class="form-control" name="title" type="text" placeholder="Nike">
                     @error('positive')
                        <span class="text-danger">Title is required</span>
                    @enderror
                </div>
                
            </div>
            {{-- end --}}
            <div class="row">
                <div class="col-4">
                    <h4 class=" mb-1 text-dark">Positive Brand Files
                    </h4>
                </div>
                <div class="col-4">
                    <h4 class=" mb-1 text-dark">Negative Brand Files
                    </h4>
                </div>
                <div class="col-4">
                    <h4 class=" mb-1 text-dark">Colored Brand Files
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-4 mt-3">
                    <div class="input-group rounded">
                        <div class="custom-file">
                            <input type="file" name="positive" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02"
                                aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                    </div>
                    @error('positive')
                        <span class="text-danger">Please choose a svg or png file</span>
                    @enderror
                </div>
                
                <div class="col-4 mt-3">
                    <div class="input-group rounded">
                        <div class="custom-file">
                            <input type="file" name="nagetive" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02"
                                aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                    </div>
                     @error('nagetive')
                        <span class="text-danger">Please choose a svg or png file</span>
                    @enderror
                </div>
               
                <div class="col-4 mt-3">
                    <div class="input-group rounded">
                        <div class="custom-file">
                            <input type="file" name="colored" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02"
                                aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                    </div>
                    @error('nagetive')
                        <span class="text-danger">Please choose a svg or png file</span>
                    @enderror
                </div>
          
            </div>
            {{-- end --}}
            <div class="d-flex justify-content-between mt-3">
                <h1 class="h3 text-gray-800"></h1>
                <button type="submit" class="float-right btn btn-primary text-white">Add New Content</button>
            </div>
        </form>
    </div>
    <!-- Add Brand Files Files Page select file section End -->
    <!-- Add Brand Files Page Edit delete table Section start -->
    <h4 class=" mb-4 text-dark">Existing Files
    </h4>
    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
    <div class="d-flex justify-content-between mt-2">
        <h4 class=" mb-4 text-dark">Count Of Content: 2
        </h4>
    </div>
    @if (session()->has('deleteMessage'))
        <div class="alert alert-success">
            {{session()->get('deleteMessage')}}
        </div>
    @endif
    {{-- end --}}
    <div class="col mb-4 mt-1">
        <div class="card p-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Positive Files</th>
                        <th scope="col">Negative Files</th>
                        <th scope="col">Colored Files</th>
                        <th scope="col">Edit <span class="ml-3">Delete</span></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($manageBrands as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->positive ? "Yes" : "No"}}</td>
                        <td>{{$item->negative ? "Yes" : "No"}}</td>
                        <td>{{$item->colored ? "Yes" : "No"}}</td>
                        <td><button class="btn btn-primary"> Edit</button>
                            <button type="button" class="btn btn-danger deleteBtn" data-id='{{$item->id}}'>Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- Pagination start--}}
            <div class=" d-flex justify-content-center">
                {{$manageBrands->links()}}
            </div>
            {{-- Pagination End--}}
        </div>
    </div>
    <!--Add Brand Files Files Page Edit delete table Section start -->


    <!-- Delete Model -->
    <div class="modal fade" id="DeleteModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                <h5 class="modal-title">Delete Brand File</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{route('brand.delete')}}" method="POST">
                    <input type="hidden" id="deleteId" name="id">
                    @csrf
                <!-- Modal body -->
                <div class="modal-body">
                    Do you really want to delete this social icon?
                </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger " id="deleteBtn">Delete</button>
                </form>
                </div>
        
            </div>
        </div>
    </div>
</div>


@push('css')
<link href="{{asset('css/style.cwd.css')}}" rel="stylesheet">
@endpush
@push('js')
    <script>
        $(document).ready(function () {
            $(".deleteBtn").on("click", function () {
                $("#DeleteModal").modal("show");
                const id = $(this).attr("data-id");
                $("#deleteId").val(id);
            });
        });

    </script>
@endpush
</body>
<!-- Add Brand Files Files Page End -->
</div>
@endsection
<!-- End of Main Content -->