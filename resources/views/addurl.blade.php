<!-- Begin add url Page Content -->
@extends('main')

@section('main-container')
<!--  add url Page Start -->
<div class="container-fluid">

    <!--  add url Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Picture-Add Url</h1>
    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
    <div class="card">
        <div class="card-header">
          <i class="fa fa-hundered-points" aria-hidden="true"></i>
        </div>
        <div class="card-body">
            <form method="POST">
              @csrf
                <div class="form-group">
                  <label for="url">Enter Url Here</label>
                  <textarea class="form-control" name="url" required id="url" rows="3"></textarea>
                </div>
                @error('url')
                  <span  class="alert alert-danger">{{$message}}</span>
                @enderror
                <center><input type="submit" name="cwuploadurl" class="btn btn-primary mt-3" value="upload"></center>
            </form>
        </div>
        <div class="card-footer text-muted">
            <i class="fa fa-hundered-points" aria-hidden="true"></i>
        </div>
      </div>

</div>
<!-- Dashboard Page End -->

<!-- /.container-fluid -->

</div>

@endsection
<!--  add url page end