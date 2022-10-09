<!-- Begin Manage Social Icons Files Page Content -->
@extends('main')
@section('title') {{'Manage Social Icons'}} @endsection
@section('main-container')
<!-- Manage Social Icons Files Page Start -->
<div class="container-fluid">
    <!-- Manage Social Icons Files Page Heading Start-->
    <h1 class="h3 mb-4 text-gray-800">Admin Page: Manage Social Icon Sets</h1>
    <!-- Manage Social Icons Files Page Heading End -->
    <!-- Manage Social Icons Files Page divider line Start -->
    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
    <!-- Manage Social Icons Files Page divider line End -->
    <!-- Manage Social Icons Files Page  button Heading  Start -->
    <h4 class=" mb-4 text-dark">Please upload your file in 100px by 100px.
    </h4>
    @if (session()->has('error'))
        <div class="alert alert-warning">
            {{session()->get('error')}}
        </div>
    @endif
     @if (session()->has('success'))
        <div class="alert alert-success">
            {{session()->get('success')}}
        </div>
    @endif
  
    <!-- Manage Social Icons Files Page  button Heading End -->
    <!--Manage Social Icons Files Page select file section Start-->
    <div class=" card my-4 p-5">
        <form action="{{route('social.icon.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-3">
                <h4 class=" mb-1 text-dark">Facebook
                </h4>
            </div>
            <div class="col-3">
                <h4 class=" mb-1 text-dark">Google+
                </h4>
            </div>
            <div class="col-3">
                <h4 class=" mb-1 text-dark">Twitter
                </h4>
            </div>
            <div class="col-3">
                <h4 class=" mb-1 text-dark">Instagram
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="input-group mb-3 rounded">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="facebook" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02"
                            aria-describedby="inputGroupFileAddon02"><span class="pr-2">Choose file</span></label>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-3 rounded">
                    <div class="custom-file">
                        <input type="file" name="google" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02"
                            aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                </div>
                @error('google')
                    <span class="text-danger text-small">Please Upload svg file</span>
                @enderror
                
            </div>
            <div class="col-3">
                <div class="input-group mb-3 rounded">
                    <div class="custom-file">
                        <input type="file" name="twiter" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02"
                            aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-3 rounded">
                    <div class="custom-file">
                        <input type="file" name="instagram" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02"
                            aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
        {{-- end --}}
        <div class="row">
            <div class="col-3">
                <h4 class=" mb-1 text-dark">Pinterest
                </h4>
            </div>
            <div class="col-3">
                <h4 class=" mb-1 text-dark">SnapChat
                </h4>
            </div>
            <div class="col-3">
                <h4 class=" mb-1 text-dark">Messenger
                </h4>
            </div>
            <div class="col-3">
                <h4 class=" mb-1 text-dark">Tiktok
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="input-group mb-3 rounded">
                    <div class="custom-file">
                        <input type="file" name="pinterest" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02"
                            aria-describedby="inputGroupFileAddon02"><span class="pr-2">Choose file</span></label>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-3 rounded">
                    <div class="custom-file">
                        <input type="file" name="snapChat" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02"
                            aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-3 rounded">
                    <div class="custom-file">
                        <input type="file" name="messenger" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02"
                            aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-3 rounded">
                    <div class="custom-file">
                        <input type="file" name="tiktok" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02"
                            aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                </div>
            </div>
        </div>
        {{-- end --}}
        <div class="row">
            <div class="col-3">
                <h4 class=" mb-1 text-dark">Whatsaap
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="input-group mb-3 rounded">
                    <div class="custom-file">
                        <input type="file" name="whatsaap" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02"
                            aria-describedby="inputGroupFileAddon02"><span class="pr-2">Choose file</span></label>
                    </div>
                </div>
            </div>
        </div>
        {{-- end --}}
        <div class="d-flex justify-content-between">
            <h1 class="h3 text-gray-800"></h1>
            <button type="submit" class="float-right btn btn-primary text-white">Add New Content</button>
        </div>
        </form>
    </div>
    <!-- Manage Social Icons Files Page select file section End -->
    <!-- Manage Social Icons Files Page Edit delete table Section start -->
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
                        <th scope="col">Count of file</th>
                        <th scope="col">Edit <span class="ml-3">Delete</span></th>
                    </tr>
                </thead>
                <tbody id="socialTable">
                    @foreach ($socialIcon as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->title}} {{$item->id < 10 ? '0' . $item->id : $item->id}}</td>
                            <td>{{$item->count}}</td>
                            <td><button class="btn btn-primary"> Edit</button>
                                <button type="button" class="btn btn-danger ml-3 deleteBtn" data-id='{{$item->id}}'>Delete</button>
                            </td>
                        </tr>
                     @endforeach
                </tbody>
            </table>
            {{-- Pagination start--}}
            <div class=" d-flex justify-content-center">
                {{$socialIcon->links()}}
            </div>
            {{-- Pagination End--}}
        </div>
    </div>
    <!-- Manage Social Icons Files Page Edit delete table Section start -->



    <!-- Delete Model -->
    <div class="modal fade" id="SocialIconDeleteModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
        
                <!-- Modal Header -->
                <div class="modal-header">
                <h5 class="modal-title">Delete Social Icon</h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{route('social.icon.delete')}}" method="POST">
                    <input type="hidden" id="socialId" name="id">
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
    <script src="{{ asset('js/manage-social-icon-files.js')}}"></script>
@endpush
</body>
<!--Manage Social Icons Files Page End -->
</div>
@endsection
<!-- End of Main Content -->