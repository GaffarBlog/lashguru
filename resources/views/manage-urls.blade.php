<!-- Begin dashboard Page Content -->
@extends('main')
@section('title') {{'Controller: Manage URL´s'}} @endsection
@section('main-container')
<!-- Dashboard Page Start -->
<div class="container-fluid">

	<div>
        <hr class="sidebar-divider rounded p-1 text-white">
        <h1 class="h3 mb-4 text-gray-800 mb-3">Admin Page: Manage URL´s</h1>
		<hr class="sidebar-divider rounded p-1 text-white">
	</div>
  {{-- Workers Pages --}}
  <div class="row mb-3">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Picture URL´s</h5>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">2.1 Number of done URL´s</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">2.2 Number of undone URL´s:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">2.3 Number of total URL´s:</p>
            <p class="card-text text-right">200</p>
          </div>
  		    <a href="/img-add-url" class="float-right btn btn-danger add-task">Add New URL</a>
            <a href="/img-download" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Tasks (Download Images)</h5>
            <button type="button" class="btn btn-primary"><span class="badge badge-danger">4</span></button>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">2.5 Number of Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
  		  <a href="/img-upload" class="float-right btn btn-danger add-task">Add New Task</a>
          <a href="/cw-tasks-img-crop" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Tasks (Download Content)</h5>
            <button type="button" class="btn btn-primary"><span class="badge badge-danger">4</span></button>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
			<div class="d-flex justify-content-between">
				<p class="card-text text-left">2.4 Download from FreePik.com:</p>
				<p class="card-text text-right">200</p>
			</div>
			<div class="d-flex justify-content-between">
				<p class="card-text text-left">2.4 Download from Pixabay.com:</p>
				<p class="card-text text-right">200</p>
			</div>
  		  <a href="#" class="float-right btn btn-danger add-task">Add New Task</a>
          <a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
<!-- End of Main Content -->