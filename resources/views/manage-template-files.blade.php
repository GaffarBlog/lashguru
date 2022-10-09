<!-- Begin Add Template Files Page Content -->
@extends('main')
@section('title') {{'Add Template Files'}} @endsection
@section('main-container')
<!-- Add Template Files Page Start -->
<div class="container-fluid">
    <!--Add Template Files Page Heading Start-->
    <h1 class="h3 mb-4 text-gray-800">Admin Page: Add Template Files</h1>
    <!-- Add Template Files Page Heading End -->
    <!-- Add Template Files Page divider line Start -->
    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
    <!-- Add Template Files Page divider line End -->
    <!--Add Template Files  button Heading  Start -->
    <h4 class=" mb-4 text-dark">Please select the correct catogary to add the new content.
    </h4>
    <!-- Add Template Files Page  button Heading End -->
    <!--Add Template Files Page select file section Start-->
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
        @endif
    <div class=" card my-4 p-5">
        <form action="{{route('template.store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="row">
                <div class="col-4">
                    <h4 class=" mb-1 text-dark">Please select a catagory
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                        <select name="category" class="custom-select text-dark" id="bg-lite-blue">
                            <option class="bg-white text-dark" disabled selected>Select Category</option>
                            @foreach ($categories as $item)
                                <option class="bg-white text-dark" value="{{$item->id}}">{{$item->temp_name}}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            @error('category')
                <span class="text-danger d-block">Please Select Category </span>
            @enderror
            <div class="row mt-4">
                <div class="col-12">
                    <h4 class=" mb-1 text-dark">Upload .json files here
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="input-group rounded">
                        <div class="custom-file">
                            <input type="file" name="uploadJson" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02"
                                aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            @error('uploadJson')
                <span class="text-danger d-block">Please Upload json file</span>
            @enderror
            {{-- end --}}
            <div class="row mt-3">
                <div class="col-12">
                    <h4 class=" mb-1 text-dark">Upload screenshot image here
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="input-group rounded">
                        <div class="custom-file">
                            <input type="file" name="screenshot" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02"
                                aria-describedby="inputGroupFileAddon02">Choose file</label>
                        </div>
                    </div>
                </div>
            </div>
            @error('screenshot')
                <span class="text-danger d-block">Please upload screenshot</span>
            @enderror
            {{-- end --}}
            <div class="d-flex justify-content-between mt-3">
                <h1 class="h3 text-gray-800"></h1>
                <button type="submit" class="float-right btn btn-primary text-white">Add New Content</button>
            </div>
        </form>
    </div>
    
    <!-- Add Template Files Page select file section End -->
    <!-- Add Template Files Page Edit delete table Section start -->
    <h4 class=" mb-4 text-dark">Content List
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
                        <th scope="col">category</th>
                        <th scope="col">Edit <span class="ml-3">Delete</span></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($templates as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}} {{$item->id < 10 ? '0'.$item->id : $item->id}}</td>
                        <td>{{$item->category->temp_name}}</td>
                        <td><button class="btn btn-primary"> Edit</button>
                            <button type="button" class="btn btn-danger deleteBtn" data-id="{{$item->id}}">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- Pagination start--}}
            <div class=" d-flex justify-content-center">
                {{$templates->links()}}
            </div>
            {{-- Pagination End--}}
        </div>
    </div>
    <!-- Add Template Files Page Edit delete table Section start -->
     <!-- Delete Model -->
    <div class="modal fade" id="DeleteModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                <h5 class="modal-title">Delete Template File</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{route('template.delete')}}" method="POST">
                    <input type="hidden" id="deleteId" name="id">
                    @csrf
                <!-- Modal body -->
                <div class="modal-body">
                    Do you really want to delete this brand file?
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
</body>
<!-- Add Template Files Page End -->

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
</div>
@endsection
<!-- End of Main Content -->