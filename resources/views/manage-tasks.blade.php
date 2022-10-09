<!-- Begin dashboard Page Content -->
@extends('main')
@section('title') {{'Controller: Manage Tasks'}} @endsection
@section('main-container')
<!-- Dashboard Page Start -->
<div class="container-fluid">
  {{-- Start ContentWorkers Tasks --}}
  <div>
    <hr class="sidebar-divider rounded p-1 text-white">
    <a href="#" class="float-right btn orange text-white">Add Urgent Task</a>
    <h1 class="h3 mb-4 text-gray-800 mb-3">ContentWorker Tasks</h1>
    <hr class="sidebar-divider rounded p-1 text-white">
  </div>
  <div class="row mb-3">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Download Images</h5>
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
          <a href="/img-add-url" class="float-right btn btn-danger add-task">Add New Task</a>
          <a href="/img-download" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Download Content:</h5>
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
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Crop Images (General)</h5>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">3.2 Number of Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="/img-upload" class="float-right btn btn-danger add-task">Add New Task</a>
          <a href="/cw-tasks-img-crop" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
  </div>
  {{-- End ContentWorkers Tasks --}}

  {{-- Start ContentWorkers Tasks - Section 2 --}}
  <div class="row mb-3">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body org">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Download Images (Urgent):</h5>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">2.5 Number of urgent Tasks</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="float-right btn btn-danger add-task">Add New Task</a>
          <a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body org">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Download Content (Urgent):</h5>
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
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body org">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Crop Images (Urgent)</h5>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">8.1 Number of urgent Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="float-right btn btn-danger add-task">Add New Task</a>
          <a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
  </div>

  {{-- End ContentWorkers Tasks - Section 2 --}}
  {{-- Start TextWorkers Tasks --}}
  <div>
    <hr class="sidebar-divider rounded p-1 text-white">
    <a href="#" class="float-right btn orange add-task text-white">Add Urgent Task</a>
    <h1 class="h3 mb-4 text-gray-800 mb-3">TextWorker Tasks</h1>
    <hr class="sidebar-divider rounded p-1 text-white">
  </div>
  <div class="row mb-3">
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
            <p><span class="badge badge-danger">4</span></p>
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
  {{-- End TextWorkers Tasks --}}


  {{-- Start Designer Tasks --}}
  <div>
    <hr class="sidebar-divider rounded p-1 text-white">
    <a href="#" class="float-right btn orange add-task text-white">Add Urgent Task</a>
    <h1 class="h3 mb-4 text-gray-800 mb-3">Designer Tasks</h1>
    <hr class="sidebar-divider rounded p-1 text-white">
  </div>
  <div class="row mb-3">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Create Images</h5>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">11.1 Number of Tasks (Generel):</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">11.3 Number of total Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="float-right btn btn-danger ml-2">Add New Task</a>
          <a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Create SVG Files</h5>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">12.1 Number of Tasks (Generel):</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">12.3 Number of total Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="float-right btn btn-danger ml-2">Add New Task</a>
          <a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Create Brand Files</h5>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">13.1 Number of Tasks (Generel):</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">13.3 Number of total Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="float-right btn btn-danger ml-2">Add New Task</a>
          <a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
  </div>
  {{-- End Designer Tasks --}}
  {{-- Start Designer Tasks - Section 2 --}}
  <div class="row mb-3">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body org">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Create Images (Urgent):</h5>
            <p><span class="badge badge-danger">4</span></p>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">11.2 Number of urgent Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">11.4 Number of Done Tasks*****:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="float-right btn btn-danger add-task">Add New Task</a>
          <a href="#" class="float-left btn btn-success">Check Done Task</a>
          <a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body org">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Create SVG Files (Urgent):</h5>
            <p><span class="badge badge-danger">4</span></p>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">12.2 Number of urgent Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">12.4 Number of Done Tasks*****:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="float-right btn btn-danger add-task">Add New Task</a>
          <a href="#" class="float-left btn btn-success">Check Done Task</a>
          <a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body org">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Create Brand Files (Urgent)</h5>
            <p><span class="badge badge-danger">4</span></p>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">13.2 Number of urgent Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">13.4 Number of Done Tasks*****:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="float-right btn btn-danger add-task">Add New Task</a>
          <a href="#" class="float-left btn btn-success">Check Done Task</a>
          <a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
  </div>

  {{-- End Designer Tasks - Section 2 --}}
  {{-- Start WebDesigner Tasks --}}
  <div>
    <hr class="sidebar-divider rounded p-1 text-white">
    <a href="#" class="float-right btn orange add-task text-white">Add Urgent Task</a>
    <h1 class="h3 mb-4 text-gray-800 mb-3">WebDesigner Tasks</h1>
    <hr class="sidebar-divider rounded p-1 text-white">
  </div>
  <div class="row mb-3">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Create Website Templates</h5>
            <p><span class="badge badge-danger">4</span></p>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">13.1 Number of Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">13.2 Number of Done Tasks*****:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="float-right btn btn-danger ml-2">Add New Task</a>
          <a href="#" class="float-left btn btn-success">Check Done Task</a>
          <a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Create Widget Templates</h5>
            <p><span class="badge badge-danger">4</span></p>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">14.1 Number of Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">14.2 Number of Done Tasks*****:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="float-right btn btn-danger ml-2">Add New Task</a>
          <a href="#" class="float-left btn btn-success">Check Done Task</a>
          <a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Fix Template Issues</h5>
            <p><span class="badge badge-danger">4</span></p>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">15.1 Number of Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">15.2 Number of Done Tasks*****:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="float-right btn btn-danger ml-2">Add New Task</a>
          <a href="#" class="float-left btn btn-success">Check Done Task</a>
          <a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
    {{-- End WebDesigner Tasks --}}
  </div>

  <!-- Dashboard Page End -->
  @push('css')
  <link href="{{asset('css/style.cwd.css')}}" rel="stylesheet">
  @endpush
</div>
@endsection
<!-- End of Main Content -->