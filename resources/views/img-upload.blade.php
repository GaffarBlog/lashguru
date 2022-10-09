<!-- Begin Upload Images Page Content -->
@extends('main')
@section('title') {{'Upload Images'}} @endsection
@section('main-container')
<!-- Upload Images Page Start -->
<div class="container-fluid">
  <!-- Upload Images Page Heading -->
	<a href="/img-add-url" class="float-right btn btn-danger add-task">Add New URL</a>
	<a href="/task-cw-img-crop" class="btn btn-primary float-right mr-2">Show Task List</a>
	<a href="/content-img-cropped" class="btn btn-primary float-right mr-2">Show Content</a>
  <h1 class="h3 mb-4 text-gray-800">Admin Page: Upload Images</h1>
  <hr class="sidebar-divider rounded p-1 bg-primary text-white">
  <div class="row">
    <div class="col-12">
      <div class="card p-5">
        <form method="post" enctype="multipart/form-data">
          @csrf
          @if ( session('success') )
          <div class="alert alert-success d-flex align-items-center">    
            <div class="loader">
              <svg class="circular">
                <circle class="path" cx="25" cy="25" r="16" fill="none" stroke-width="2"  stroke-color="#f00" stroke-miterlimit="10"/> 
              </svg>
              <svg class="suc">
                <path class="checkmark__check" fill="none" d="M10.7,20.4l5.3,5.3l12.4-12.5"></path>
              </svg>
            </div>
            {{ session('success') }}
          </div> 
          @endif
          <p>Upload Images:</p>
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" accept="image/*" id="cwUploadPics" name="cwUploadPics[]" required multiple>
            <label class="custom-file-label" for="cwUploadPics">Choose file</label>
          </div>
          <div class="form-group">
            <label for="cwPicsKeywords">Keywords:</label>
            <textarea class="form-control" rows="3" name="cwPicsKeywords" id="cwPicsKeywords"></textarea>
          </div>
          <input type="submit" class="btn btn-primary" value="Add Content">
        </form>
      </div>
      <div class="card p-5 mt-5 mb-5">
        <div class="d-flex justify-content-between">
          <h4>List Images</h4>
          <input type="text" class="form-control w-50" name="cwImageSearch" id="cwImageSearch" placeholder="Enter your keyword to serach for images">
        </div>
        <div class="cw-responce-del mt-4"></div>
        <table class="table table-striped mt-4" id="cwImageList">
          <thead>
            <tr>
              <th class="w-32">#</th>
              <th class="w-50">Keyword</th>
              <th class="w-25">Image</th>
              <th class="w-9">Action</th>
            </tr>
          </thead>
          <tbody>
            @if ( !empty($UploadImage) && $UploadImage->count() )
              @foreach ($UploadImage as $data)
              <tr>
                <td class="align-middle">{{ $data->id }}</td>
                <td class="align-middle">{{ $data->keywords }}</td>
                <td class="align-middle">
                  <img style="width:100px;height:100px;" src="{{ asset('storage/uploads/tumb/'.$data->tumb) }}" alt="">
                </td>
                <td class="align-middle">
                  <a href="" class="btn btn-primary mr-3">Edit</a>
                  <button type="button" class="btn btn-danger ml-3" id="cwDelImage" data-toggle="modal" data-target="#cwdeleteimage" data-id="{{ $data->id }}">Delete</button>
                </td>
              </tr>
              @endforeach
            @else
              <tr>
                <td colspan="10">No Result Found!</td>
              </tr>
            @endif
          </tbody>
        </table>
        <div class="cwpagination d-flex justify-content-center">
          {!! $UploadImage->links() !!}
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Upload Images Page End -->
</div>
<!-- Delete Image Modal -->
<div class="modal fade" id="cwdeleteimage">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Delete Image</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <input type="hidden" name="cwImageId" id="cwImgDelModalId">
      <!-- Modal body -->
      <div class="modal-body">Do you really want to delete this content?</div>
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger del-img-btn">Yes</button>
      </div>
    
    </div>
  </div>
</div>
@endsection
<!-- End of Main Content -->
<!-- Push css file -->
@push('css')
<link rel="stylesheet" href="{{ asset('css/upload-images.css?'.time()) }}">
@endpush
{{-- Push jS file --}}
@push('js')
<script src="{{ asset('js/upload-images.js?'.time()) }}"></script>
@endpush