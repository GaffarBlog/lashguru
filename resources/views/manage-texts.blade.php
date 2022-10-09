<!-- Begin dashboard Page Content -->
@extends('main')
@section('title') {{'Controller: Manage Texts'}} @endsection
@section('main-container')
<!-- Dashboard Page Start -->
<div class="container-fluid">

    <!-- Dashboard Page Heading -->
    {{-- <h1 class="h3 mb-4 text-gray-800">@lang('language.Dashboard')</h1> --}}
    <div>
        <hr class="sidebar-divider rounded p-1 text-white">
		<a href="/content-txt-get-text" class="btn btn-primary float-right mr-2">Show Text Editor</a>
        <h1 class="h3 mb-4 text-gray-800 mb-3">Admin Page: Manage Texts</h1>
        <hr class="sidebar-divider rounded p-1 text-white">
    </div>
    <div class="row mb-3">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-left">Existing Texts</h5>
                    </div>
                    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
                    <div class="d-flex justify-content-between">
                        <p class="card-text text-left">4.1 Number of Text Content:</p>
                        <p class="card-text text-right">200</p>
                    </div>
					<a href="/txt-add-text" class="float-right btn btn-danger add-task">Add New Text</a>
					<a href="/txt-manage-text" class="btn btn-primary float-right mr-2">Show Texts</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-left">Open Text Tasks</h5>
                    </div>
                    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
                    <div class="d-flex justify-content-between">
                        <p class="card-text text-left">4.2 Number of Open Tasks:</p>
                        <p class="card-text text-right">200</p>
                    </div>
					<a href="#" class="float-right btn btn-danger add-task">Add New Task</a>
					<a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-left">Closed Text Tasks</h5>
                        <button type="button" class="btn btn-primary"><span class="badge badge-danger">4</span></button>
                    </div>
                    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
                    <div class="d-flex justify-content-between">
                        <p class="card-text text-left">4.3 Number of Closed Tasks*****:</p>
                        <p class="card-text text-right">200</p>
                    </div>
  		  			<a href="#" class="float-left btn btn-success check-task">Check Done Task</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard Page End -->
</div>
@endsection
<!-- End of Main Content -->