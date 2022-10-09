<!-- Begin dashboard Page Content -->
@extends('main')
@section('title') {{'Dashboard'}} @endsection
@section('main-container')
<!-- Dashboard Page Start -->
<div class="container-fluid">

  <div>
    <hr class="sidebar-divider rounded p-1 text-white">
    <h1 class="h3 mb-4 text-gray-800 mb-3">Admin Pages</h1>
    <hr class="sidebar-divider rounded p-1 text-white">
  </div>
  <div class="row mb-3">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Users</h5>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">1.1 Number of ContentWorkers:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">1.2 Number of TextWorkers:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">1.3 Number of Designers:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">1.4 Number of WebDesigners:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="/manage-users" class="btn btn-primary float-right">Manage Users</a>
        </div>
      </div>
    </div>
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
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">2.4 Number of Tasks (Download Content):</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="/manage-urls" class="btn btn-primary float-right">Manage URL´s</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Banners & Pictures</h5>
            <p><span class="badge badge-danger">4</span></p>
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
            <p class="card-text text-left">3.4 Number of not imported Images:*****</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="/manage-images" class="btn btn-primary float-right">Manage Images</a>
        </div>
      </div>
    </div>
  </div>
  {{-- second section Admin pages --}}
  <div class="row mb-3">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Texts</h5>
            <p><span class="badge badge-danger">4</span></p>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">4.1 Number of Text Content:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">4.2 Number of Open Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">4.3 Number of Closed Tasks:*****</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">4.4 Number of total Text Content:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="/manage-texts" class="btn btn-primary float-right">Manage Texts</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Templates</h5>
            <p><span class="badge badge-danger">4</span></p>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">5.1 Number of Templates:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">5.2 Number of Open Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">5.3 Number of Closed Tasks:*****</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">5.4 Number of total Templates:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="manage-templates" class="btn btn-primary float-right">Manage Templates</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Tasks</h5>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">6.1 Number of ContentWorker Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">6.2 Number of TextWorker Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">6.3 Number of Designer Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">6.4 Number of WebDesigner Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="/manage-tasks" class="btn btn-primary float-right">Manage Tasks</a>
        </div>
      </div>
    </div>
  </div>
  {{-- end - second section Admin pages --}}
	
  {{-- second third Admin pages --}}
  <div class="row mb-3">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">SVG Content</h5>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">24.1 Number of SVG Files:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">24.2 Number of Open Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">24.3 Number of Closed Tasks:*****</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">24.4 Number of total SVG Files:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="/manage-svg-content" class="btn btn-primary float-right">Manage SVG Content</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Social Icons</h5>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">25.1 Number of Social Icons:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">25.2 Number of Open Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">25.3 Number of Closed Tasks:*****</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">25.4 Number of total Social Icons:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="/manage-social-icons" class="btn btn-primary float-right">Manage Social Icons</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Brands</h5>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">26.1 Number of Brands:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">25.2 Number of Open Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">25.3 Number of Closed Tasks:*****</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">25.4 Number of total Brands:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="/manage-brands" class="btn btn-primary float-right">Manage Brands</a>
        </div>
      </div>
    </div>
  </div>
  {{-- end - third section Admin pages --}}
	
  {{-- Workers Pages --}}
  <div>
    <hr class="sidebar-divider rounded p-1 text-white">
    <h1 class="h3 mb-4 text-gray-800 mb-3">ContentWorker Tasks</h1>
    <hr class="sidebar-divider rounded p-1 text-white">
  </div>
  <div class="row mb-3">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Download Images</h5>
            <p><span class="badge badge-danger">4</span></p>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">2.2 Number of Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">2.5 Number of urgent Tasks*****:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="float-right btn orange text-white">Show Urgent Tasks</a>
          <a href="/img-download" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Download Content</h5>
            <p><span class="badge badge-danger">4</span></p>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">2.2 Number of Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">2.4 Number of urgent Tasks*****:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="float-right btn orange text-white">Show Urgent Tasks</a>
          <a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Crop Images</h5>
            <p><span class="badge badge-danger">4</span></p>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">3.2 Number of Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">8.1 Number of urgent Tasks*****:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="float-right btn orange text-white">Show Urgent Tasks</a>
          <a href="/cw-tasks-img-crop" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
  </div>




  {{-- Workers Pages --}}
  <div>
    <hr class="sidebar-divider rounded p-1 text-white">
    <h1 class="h3 mb-4 text-gray-800 mb-3">TextWorker Tasks</h1>
    <hr class="sidebar-divider rounded p-1 text-white">
  </div>
  <div class="row mb-3">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Create Texts</h5>
            <p><span class="badge badge-danger">4</span></p>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">10.1 Number of Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="btn btn-primary float-right">Show Task List</a>
        </div>
      </div>
    </div>
  </div>



  {{-- Workers Pages --}}
  <div>
    <hr class="sidebar-divider rounded p-1 text-white">
    <h1 class="h3 mb-4 text-gray-800 mb-3">Designer Tasks</h1>
    <hr class="sidebar-divider rounded p-1 text-white">
  </div>
  <div class="row mb-3">
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Create Images</h5>
            <p><span class="badge badge-danger">4</span></p>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">11.1 Number of Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">11.2 Number of urgent Tasks*****::</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="float-right btn orange text-white">Show Urgent Tasks</a>
          <a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Create SVG Files</h5>
            <p><span class="badge badge-danger">4</span></p>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">12.1 Number of Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">11.2 Number of urgent Tasks*****:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="float-right btn orange text-white">Show Urgent Tasks</a>
          <a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title text-left">Create Brand Files</h5>
            <p><span class="badge badge-danger">4</span></p>
          </div>
          <hr class="sidebar-divider rounded p-1 bg-primary text-white">
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">13.1 Number of Tasks:</p>
            <p class="card-text text-right">200</p>
          </div>
          <div class="d-flex justify-content-between">
            <p class="card-text text-left">13.2 Number of urgent Tasks*****:</p>
            <p class="card-text text-right">200</p>
          </div>
          <a href="#" class="float-right btn orange text-white">Show Urgent Tasks</a>
          <a href="#" class="btn btn-primary float-right mr-2">Show Task List</a>
        </div>
      </div>
    </div>
  </div>

  {{-- Workers Pages --}}
  <div>
    <hr class="sidebar-divider rounded p-1 text-white">
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
          <a href="#" class="btn btn-primary float-right">Show Task List</a>
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
          <a href="#" class="btn btn-primary float-right">Show Task List</a>
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
          <a href="#" class="btn btn-primary float-right">Show Task List</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Dashboard Page End -->
  @push('css')
  <link href="{{asset('css/style.cwd.css')}}" rel="stylesheet">
  @endpush

</div>
@endsection
<!-- End of Main Content -->