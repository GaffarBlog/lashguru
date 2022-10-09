<!-- Begin dashboard Page Content -->
@extends('main')
@section('title') {{'Controller: Manage Templates'}} @endsection
@section('main-container')
<!-- Dashboard Page Start -->
<div class="container-fluid">

    <!-- Dashboard Page Heading -->
    {{-- <h1 class="h3 mb-4 text-gray-800">@lang('language.Dashboard')</h1> --}}
    <div>
        <hr class="sidebar-divider rounded p-1 text-white">
        <h1 class="h3 mb-4 text-gray-800 mb-3">Admin Page: Manage Templates</h1>
        <hr class="sidebar-divider rounded p-1 text-white">
    </div>
    <div class="row mb-3">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-left">Existing Templates</h5>
                    </div>
                    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
                    <div class="d-flex justify-content-between">
                        <p class="card-text text-left">5.1 Number of Templates:</p>
                        <p class="card-text text-right">200</p>
                    </div>
					<a href="/manage-template-files" class="float-right btn btn-danger add-task">Add New Template</a>
					<a href="/template-get-files" class="btn btn-primary float-right mr-2">Show Templates</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-left">Open Template Tasks</h5>
                    </div>
                    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
                    <div class="d-flex justify-content-between">
                        <p class="card-text text-left">5.2 Number of Open Tasks:</p>
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
                        <h5 class="card-title text-left">Closed Template Tasks</h5>
                        <button type="button" class="btn btn-primary"><span class="badge badge-danger">4</span></button>
                    </div>
                    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
                    <div class="d-flex justify-content-between">
                        <p class="card-text text-left">5.3 Number of Closed Tasks:*****</p>
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