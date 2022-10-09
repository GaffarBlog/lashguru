<!-- Begin Image Cropped Page Content -->
@extends('main')
@section('title') {{'Banners & Pictures'}} @endsection
@section('main-container')
<!-- Image Cropped Page Start -->
<div class="container-fluid">
    <!-- Image Cropped Page Heading -->
	<a href="/content-txt-get-text" class="btn btn-primary float-right mr-2">Text Editor</a>
	<a href="/content-img-website-elements" class="btn btn-primary float-right mr-2">Website Elements</a>
    <h1 class="h3 mb-4 text-gray-800">Content: Banners & Pictures</h1>
    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
    <div class="row mb-5">
        <div class="col-12">
            <div class="card p-3">
                <ul class="nav nav-pills mb-3 bg-light rounded" id="pills-tab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="pills-cropped2400x1440-tab" data-toggle="pill" role="tab" aria-controls="pills-cropped2400x1440" aria-selected="true" href="#cropped2400x1440">2400 x 1440</a></li>
                    <li class="nav-item"><a class="nav-link" id="pills-cropped2400x1000-tab" data-toggle="pill" role="tab" aria-controls="pills-cropped2400x1000" aria-selected="true" href="#cropped2400x1000">2400 x 1000</a></li>
                    <li class="nav-item"><a class="nav-link" id="pills-cropped2400x750-tab" data-toggle="pill" role="tab" aria-controls="pills-cropped2400x750" aria-selected="true" href="#cropped2400x750">2400 x 750</a></li>
                    <li class="nav-item"><a class="nav-link" id="pills-cropped2400x500-tab" data-toggle="pill" role="tab" aria-controls="pills-cropped2400x500" aria-selected="true" href="#cropped2400x500">2400 x 500</a></li>
                    <li class="nav-item"><a class="nav-link" id="pills-cropped600x600-tab" data-toggle="pill" role="tab" aria-controls="pills-cropped600x600" aria-selected="true" href="#cropped600x600">600 x 600</a></li>
                    <li class="nav-item"><a class="nav-link" id="pills-cropped450x600-tab" data-toggle="pill" role="tab" aria-controls="pills-cropped450x600" aria-selected="true" href="#cropped450x600">450 x 600</a></li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    {{-- Cropped 2400x1440 --}}
                    <div id="cropped2400x1440" class="tab-pane fade show active" role="tabpanel" aria-labelledby="pills-cropped2400x1440-tab">
                        <div class="d-flex justify-content-between">
                            <h4 class="text-dark">Cropped 2400x1440</h4>
                            <form method="GET">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter Keyword For Serach Images">
                                    <div class="input-group-append">
                                        <input type="submit" class="btn btn-primary" value="Search">
                                    </div>
                                </div>
                            </form>
                        </div>
                        @php
                        $cropped = '2400x1440';
                        @endphp
                        @if ( !empty($UploadImage) && $UploadImage->count() )
                            @foreach ($UploadImage as $data)
                                @if ($data->$cropped != '0')
                                <div class="card mb-3">
                                    <div class="container">
                                        <img src="{{ asset('storage/uploads/2400X1440/'.$data->$cropped) }}" alt="" class="img-fluid">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="d-flex flex-column">
                                                    <h5>Keyword</h5>
                                                    <span>{{ $data->keywords }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        @endif
                        <div class="cwpagination d-flex justify-content-center">
                            {!! $UploadImage->links() !!}
                        </div>
                        <!-- Crop Modal -->
                        <div class="modal fade" id="cropModal">
                          <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                              
                              <!-- Modal body -->
                              <div class="modal-body text-center" id="cw-cropped-modal-body"></div>
                              
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary cw-crop-btn"><span class="spinner-border spinner-border-sm d-none"></span>
                                Crop</button>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                    </div>
                    {{-- Cropped 2400x1000 --}}
                    <div id="cropped2400x1000" class="tab-pane fade" role="tabpanel" aria-labelledby="pills-cropped2400x1000-tab">Test</div>
                    {{-- Cropped 2400x750 --}}
                    <div id="cropped2400x750" class="tab-pane fade" role="tabpanel" aria-labelledby="pills-cropped2400x750-tab"></div>
                    {{-- Cropped 2400x500 --}}
                    <div id="cropped2400x500" class="tab-pane fade" role="tabpanel" aria-labelledby="pills-cropped2400x500-tab"></div>
                    {{-- Cropped 600x600 --}}
                    <div id="cropped600x600" class="tab-pane fade" role="tabpanel" aria-labelledby="pills-cropped600x600-tab"></div>
                    {{-- Cropped 450x600 --}}
                    <div id="cropped450x600" class="tab-pane fade" role="tabpanel" aria-labelledby="pills-cropped450x600-tab"></div>
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