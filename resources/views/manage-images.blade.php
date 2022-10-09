<!-- Begin dashboard Page Content -->
@extends('main')
@section('title') {{'Controller: Manage Images'}} @endsection
@section('main-container')
<!-- Dashboard Page Start -->
<div class="container-fluid">

    <!-- Dashboard Page Heading -->
    {{-- <h1 class="h3 mb-4 text-gray-800">@lang('language.Dashboard')</h1> --}}
    <div>
        <hr class="sidebar-divider rounded p-1 text-white">
		<a href="/cat-search-filters" class="btn btn-primary float-right mr-2">Show Image Filters</a>
        <h1 class="h3 mb-4 text-gray-800 mb-3">Admin Page: Manage Images</h1>
        <hr class="sidebar-divider rounded p-1 text-white">
    </div>
    <div class="row mb-3">
          <div class="col-sm-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                    <h5 class="card-title text-left">Banners & Pictures</h5>
                	<button type="button" class="btn btn-primary"><span class="badge badge-danger">4</span></button>
                  </div>
                <hr class="sidebar-divider rounded p-1 bg-primary text-white">
                <div class="d-flex justify-content-between">
                    <p class="card-text text-left">3.1 Number of cropped Images:</p>
                    <p class="card-text text-right">200</p>
                  </div>
                  <div class="d-flex justify-content-between">
                    <p class="card-text text-left">3.2 Number of uncropped Images:</p>
                    <p class="card-text text-right">200</p>
                  </div>
                  <div class="d-flex justify-content-between">
                    <p class="card-text text-left">3.3 Number of total Images:</p>
                    <p class="card-text text-right">200</p>
                  </div>
				  <div class="d-flex justify-content-between">
                    <p class="card-text text-left">3.4 Number of not imported Images*****:</p>
                    <p class="card-text text-right">200</p>
                  </div>
					<a href="/img-upload" class="float-right btn btn-danger add-task">Upload New Images</a>
					<a href="/import-images" class="btn btn-primary float-right mr-2">Import Images</a>
              </div>
            </div>
          </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title text-left">Task: Crop Images (Urgent)</h5>
                    </div>
                    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
                    <div class="d-flex justify-content-between">
                        <p class="card-text text-left">8.1 Number of Tasks:</p>
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
                        <h5 class="card-title text-left">Tasks: Download Content</h5>
                    </div>
                    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
                    <div class="d-flex justify-content-between">
                        <p class="card-text text-left">2.4 Number of Tasks:</p>
                        <p class="card-text text-right">200</p>
                    </div>
					<a href="#" class="float-right btn btn-danger add-task">Add New Task</a>
					<a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard Page End -->
</div>
@endsection
<!-- End of Main Content -->