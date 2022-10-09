<!-- Begin Image Cropped Page Content -->
@extends('main')
@section('title') {{'Crop Images'}} @endsection
@section('main-container')
<!-- Image Cropped Page Start -->
<div class="container-fluid">
    <!-- Image Cropped Page Heading -->
	<a href="/img-upload" class="float-right btn btn-danger add-task">Upload New Images</a>
    <h1 class="h3 mb-4 text-gray-800">ContentWorker Task: Crop Images</h1>
    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
    <div class="row mb-5">
        <div class="col-12">
            <div class="card p-3">
              <div class="cwCropImageData">
                <div class="d-flex justify-content-between">
                  <h4 class="text-dark">You have {{ $TotalImages->count() }} images to cropped</h4>
                  <form method="POST">
                      <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Enter Keyword For Serach Images" id="cwKeywordSearch">
                          <div class="input-group-append">
                              <input type="submit" data-search="24001400" class="btn btn-primary cwSearchCropImg" value="Search">
                          </div>
                      </div>
                  </form>
              </div>
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
                    @php
                      $cropped = '2400x1440';
                    @endphp
                    @if (isset($_GET['keyword']) && !empty($_GET['keyword']))
                      @foreach ($TotalImages as $data)
                        @if (str_contains($data->keywords, $_GET['keyword']))
                          <tr>
                            <td class="align-middle">{{ $data->id }}</td>
                            <td class="align-middle">{{ $data->keywords }}</td>
                            <td class="align-middle">
                              <img style="width:100px;height:100px;" src="{{ asset('storage/uploads/tumb/'.$data->tumb) }}" alt="{{ $data->keywords }}">
                            </td>
                            <td class="align-middle">
                              <button data-id="{{ $data->id }}" data-width="2400" data-height="1440" class="btn btn-danger cw-crop-img mr-3">Crop</button>
                              <a href="{{ asset('storage/uploads/'.$data->filename) }}" class="btn btn-primary ml-3" target="_blank">Orignal</a>
                            </td>
                          </tr>
                        @else
                          <tr>
                            <td colspan="10">No Result Found!</td>
                          </tr>
                        @endif
                      @endforeach
                    @else
                      @if ( !empty($UploadImage) && $UploadImage->count() )
                        @foreach ($UploadImage as $data)
                          @if ($data->$cropped == '0')
                            <tr>
                              <td class="align-middle">{{ $data->id }}</td>
                              <td class="align-middle">{{ $data->keywords }}</td>
                              <td class="align-middle">
                                <img style="width:100px;height:100px;" src="{{ asset('storage/uploads/tumb/'.$data->tumb) }}" alt="{{ $data->keywords }}">
                              </td>
                              <td class="align-middle">
                                <button data-id="{{ $data->id }}" class="btn btn-danger cw-crop-img mr-3">Crop</button>
                                <a href="{{ asset('storage/uploads/'.$data->filename) }}" class="btn btn-primary ml-3" target="_blank">Orignal</a>
                              </td>
                            </tr>
                          @endif
                        @endforeach
                      @else
                        <tr>
                          <td colspan="10">No Result Found!</td>
                        </tr>
                      @endif
                    @endif
                    
                  </tbody>
              </table>
              {{-- @if (!isset($_GET['keyword'])) --}}
                <div class="cwpagination d-flex justify-content-center">
                    {!! $UploadImage->links() !!}
                </div>
              {{-- @endif --}}
              <!-- Crop Modal -->
              <div class="modal fade" id="cropModal">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    
                    <!-- Modal body -->
                    <div class="modal-body text-center">
                      <div class="modal-one">
                        <div class="d-flex justify-content-between">
                          <h5 class="text-primary"><strong>CW Task: Crop Image</strong></h5>
                          <h6 class="cwImageId text-dark">Image-ID:</h6>
                        </div>
                        <h5 class="text-dark text-left"><strong class="cwCropStep"> Crop 1 of 6 in 2400 x 1440 px</strong></h5>
                        <hr>
                        <div class="cw-img-container" id="cw-cropped-modal-body">
  
                        </div>
                        <hr>
                        <div class="cwImageKeywords text-left"><strong class="text-dark">Keywords: </strong><span></span></div>
                        <hr>
                        <div class="d-flex justify-content-between">
                          <h6 class="text-warning">Skip the picture if the image is not suitable for the corresponding size!</h6>
                          <div class="cwActionBtn">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button class="btn btn-warning cw-skip-btn">Skip</button>
                            <button type="button" class="btn btn-primary cw-crop-btn" data-width="2400" data-height="1440">Crop</button>
                          </div>
                        </div>
                      </div>
                    </div>
                                    
                  </div>
                </div>
              </div>
              </div>
            </div>
        </div>
    </div>
</div>
<!-- Image Cropped Page End -->
</div>
@endsection
<!-- End of Main Content -->
<!-- Push css file -->
@push('css')
<link rel="stylesheet" href="{{ asset('css/cropper.css?'.time()) }}">
@endpush
{{-- Push jS file --}}
@push('js')
<script src="{{ asset('js/cropper.js?'.time()) }}"></script>
<script src="{{ asset('js/tasks-img-crop.js?'.time()) }}"></script>
@endpush