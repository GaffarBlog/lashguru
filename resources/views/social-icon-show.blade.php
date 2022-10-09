<!-- Begin Website Elements Page Content -->
@extends('main')
@section('title') {{'Website Elements'}} @endsection
@section('main-container')
<!-- Website Elements Page Start -->
<!-- Website Elements container-fluid Start -->
<div class="container-fluid" id="">
    <!--  Website Elements Heading Start-->
	<a href="/content-txt-get-text" class="btn btn-primary float-right mr-2">Text Editor</a>
	<a href="/content-img-cropped" class="btn btn-primary float-right mr-2">Banners & Pictures</a>
    <h1 class="h3 mb-4 text-gray-800">Content: Website Elements</h1>
    <!-- Website Elements Heading End -->
    <!-- Website Elements divider line Start -->
    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
    <!-- Website Elements divider line End -->
    <!-- Website Elements  button Heading  Start -->
    <h4 class=" mb-4 text-dark">Please select the category of the content you want to see.
    </h4>
    <!-- Website Elements  button Heading End -->
    <!-- Website Elements button Section start -->
    <div class="row mb-4">
        <div class="ml-2">
            <button class="btn btn-primary"><span class="p-1">Covers</span></button>
        </div>
        <div class="ml-2">
            <button class="btn btn-primary"><span class="p-1">Overlays</span></button>
        </div>
        <div class="ml-2">
            <button class="btn btn-primary"><span class="p-1">Background</span></button>
        </div>
        <div class="ml-2">
            <button class="btn btn-primary"><span class="p-1">Clock Icons</span></button>
        </div>
        <div class="ml-2">
            <button class="btn btn-primary"><span class="p-1">Social Icons</span></button>
        </div>
		<div class="ml-2">
            <button class="btn btn-primary"><span class="p-1">Design Images</span></button>
        </div>
        <div class="ml-2">
            <button class="btn btn-primary"><span class="p-1">HeaderLines</span></button>
        </div>
        <div class="ml-2">
            <button class="btn btn-primary"><span class="p-1">Counters</span></button>
        </div>
        <div class="ml-2">
            <button class="btn btn-primary"><span class="p-1">Brands</span></button>
        </div>
        <div class="ml-2">
            <button class="btn btn-primary"><span class="p-1">Colors</span></button>
        </div>
    </div>
    <!-- Website Elements button Section end -->
    <!-- Website Elements color Section start -->
    <div class="row">
        <div class="col-4">
            <h4 class=" text-dark">Count of available content: 83
            </h4>
        </div>
    </div>
   
    <!-- Website Elements color copy Section start -->
    <div class="card my-4 px-5">
        @foreach ($SocialIcon as $item)
        @php
            $images = explode(",",$item->images);
        @endphp
        <div class="row">
            <div class="col-3 my-2">
                <h4 class=" text-dark">{{$item->title}} {{$item->id < 10 ? "0" . $item->id : $item->id}}
                </h4>
            </div>

            @foreach ($images as $key => $image)
                @if ($image)
                    <div class="col-1 my-2">
                        <img src="{{asset('assets/images')}}/{{$image}}" alt="..." class="img-thumbnail">
                        <div class="card border-0 my-3" onclick="myfunc('id{{$item->id}}{{$key}}')">
                            <i class="fas fa-fw fa-copy border rounded text-white py-1 bg-primary align-center-copy"></i>
                            <input type="hidden" id="id{{$item->id}}{{$key}}" value="{{asset('assets/images')}}/{{$image}}">
                        </div>
                        
                    </div>
                @endif
            @endforeach
            
            {{-- <div class="col-1 my-2">
                <img src="{{asset('assets/images/brand')}}/{{$item->negative}}" alt="..." class="img-thumbnail">
                <div class="card border-0 my-3"><i
                        class="fas fa-fw fa-copy border rounded text-white py-1 bg-primary align-center-copy"></i>
                </div>
            </div>
            <div class="col-1 my-2">
                <img src="{{asset('assets/images/brand')}}/{{$item->colored}}" alt="..." class="img-thumbnail">
                <div class="card border-0 my-3"><i
                        class="fas fa-fw fa-copy border rounded text-white py-1 bg-primary align-center-copy"></i>
                </div>
            </div> --}}
        </div>
        @endforeach
    </div>
    <!-- Website Elements color copy Section end -->
    @push('css')
    <link href="{{asset('css/style.cwd.css')}}" rel="stylesheet">
    @endpush
    @push('js')
        <script>
            function myfunc(id){
                const text = document.getElementById(id);
                text.select();
                document.execCommand("copy");
            }
        </script>
    @endpush
</div>
@endsection
<!-- Website Elements page end -->