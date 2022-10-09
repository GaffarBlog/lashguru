<!-- Begin download image Page Content -->
@extends('main')
@section('title') {{'Download Pictures'}} @endsection
@section('main-container')
<!-- download image Page Start -->
<div class="container-fluid">

    <!-- download image Page Heading -->
	<a href="/img-add-url" class="float-right btn btn-danger add-task">Add New URL</a>
    <h1 class="h3 mb-4 text-gray-800">ContentWorker Task: Download Images</h1>
    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
    <div class="card">
        <div class="card-header">
          Please download the listed pictures from the target website. Click on “Download” button to open the target website. Click on “Mark as Done” after you downloaded the picture from the target website.
        </div>
        <div class="card p-5">
          <div>
            <span class=" font-weight-bold text-success">There are 172 URL´s to download</span>
          </div>
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Urls</th>
                <th scope="col">Edit</th>
                <th scope="col">Mark As Done</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($url as $url)
                @if ( $url->done_id != 'yes' )
                {{-- {!! $name !!} --}}
              <tr>
                <td>{{ $url->url_id }}</td>
                <td>{{ $url->url }}</td>
                <td><a target="_blank" href="{{ $url->url }}" class="btn btn-primary">Download</a></td>
                <td> <a href="{{url('/img-download/update/')}}/{{$url->url_id}}" class="btn btn-danger">Mark As Done</a></td>
              </tr>
              @endif
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer text-muted">
            <i class="fa fa-hundered-points" aria-hidden="true"></i>
        </div>
      </div>

</div>


</div>

@endsection
<!-- End download image Page -->