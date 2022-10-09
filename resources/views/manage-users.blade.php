@extends('main')
@section('title') {{'User Management'}} @endsection
@section('main-container')
<!-- USER Page Start -->
<div class="container-fluid">

    <!-- addUser page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Admin Page: User Management</h1>
    <hr class="sidebar-divider rounded p-1 bg-primary text-white">
    {{-- <div class="accordion" id="myAccordion">
      <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
              <button type="button" class="btn btn-primery bg-primary text-white collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne"> Add User</button>									
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
            <div class="card-body">
              <div class="col-12">
                <div class="card p-5">
                  <form method="POST">
                    @csrf
                      <div class="form-group">
                        <label for="cwfname">First Name</label>
                        <input type="text" name="cwfname" required class="form-control" id="cwname">
                      </div>
                      <div class="form-group">
                        <label for="cwlname">Last Name</label>
                        <input type="text" name="cwlname" required class="form-control" id="cwname">
                      </div>
                      <div class="form-group">
                          <label for="cwdateofbirth">Date Of Birth</label>
                          <input type="date" name="cwdateofbirth" required class="form-control" id="cwjoindate">
                        </div>
                        <div class="form-group">
                          <label for="cwmailid">Mail ID</label>
                          <input type="email" name="cwmailid" required class="form-control" id="cwpassword">
                        </div>
                      <div class="form-group">
                        <label for="cwusername">Username</label>
                        <input type="text" name="cwusername" required class="form-control" id="cwusername">
                      </div>
                        <div class="form-group">
                          <label for="cwpassword">Password</label>
                          <input type="password" name="cwpassword" required class="form-control" id="cwpassword">
                        </div>
    
                      <center><input type="submit" name="cwadduser" class="btn btn-primary mt-3" value="Add User"></center>
                    </form>
              </div>
          </div>
            </div>
        </div>
        @push('js')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        @endpush --}}
    <div class="row d-flex ">
        <div class="col-12">
            <div class="card p-5">
              <form method="POST">
                @csrf
                  <div class="form-group">
                    <label for="cwfname">First Name</label>
                    <input type="text" name="cwfname" required class="form-control" id="cwname">
                  </div>
                  <div class="form-group">
                    <label for="cwlname">Last Name</label>
                    <input type="text" name="cwlname" required class="form-control" id="cwname">
                  </div>
                  <div class="form-group">
                      <label for="cwdateofbirth">Date Of Birth</label>
                      <input type="date" name="cwdateofbirth" required class="form-control" id="cwjoindate">
                    </div>
                    <div class="form-group">
                      <label for="cwmailid">Mail ID</label>
                      <input type="email" name="cwmailid" required class="form-control" id="cwpassword">
                    </div>
                  <div class="form-group">
                    <label for="cwusername">Username</label>
                    <input type="text" name="cwusername" required class="form-control" id="cwusername">
                  </div>
                    <div class="form-group">
                      <label for="cwpassword">Password</label>
                      <input type="password" name="cwpassword" required class="form-control" id="cwpassword">
                    </div>

                  <center><input type="submit" name="cwadduser" class="btn btn-primary mt-3" value="Add User"></center>
                </form>
          </div>
      </div>
      <!-- update user page -->
<!-- Modal -->
<div class="modal fade" id="cweditusermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary font-weight-bold text-uppercase" id="exampleModalLabel">@lang('language.Edit User')</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="editformID">
      <div class="modal-body">
        {{csrf_field()}}
        {{method_field('put')}}
            <div class="form-group">
              <label for="cwfupname">First Name</label>
              <input type="text" name="cwfupname" required class="form-control" id="cwfupname">
            </div>
            <div class="form-group">
              <label for="cwlupname">Last Name</label>
              <input type="text" name="cwlupname" required class="form-control" id="cwlupname">
            </div>
            <div class="form-group">
                <label for="cwupdateofbirth">Date Of Birth</label>
                <input type="date" name="cwupdateofbirth" required class="form-control" id="cwupdateofbirth">
              </div>
              <div class="form-group">
                <label for="cwupmailid">Mail ID</label>
                <input type="email" name="cwupmailid" required class="form-control" id="cwupmailid">
              </div>
            <div class="form-group">
              <label for="cwupusername">Username</label>
              <input type="text" name="cwupusername" required class="form-control" id="cwupusername">
            </div>
              <div class="form-group">
                <label for="cwuppassword">Password</label>
                <input type="password" name="cwuppassword" required class="form-control" id="cwuppassword">
              </div>
      </div>
    </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="updateUser();">Update</button>
      </div>
    </div>
  </div>
</div>
      <!-- end update user page -->
      <!-- User details Page Heading -->
  <div class="col-12 mb-5 mt-5" >
    <div class="card p-5">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Date Of Birth</th>
            <th scope="col">Mail ID</th>
            <th scope="col">Username</th>
            {{-- <th scope="col">Password</th> --}}
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($user as $user)
          <tr class="row-{{$user->user_id}}">
            <td>{{ $user->user_id }}</td>
            <td>{{ $user->FirstName }}</td>
            <td>{{ $user->LastName }}</td>
            <td>{{ $user->DateOfBirth }}</td>
            <td>{{ $user->MailID }}</td>
            <td>{{ $user->username }}</td>
            {{-- <td>{{ $user->password }}</td> --}}
            <td><button class="btn btn-primary cwedituser" onclick="getUser('{{$user->user_id}}', '{{route('user.edit', $user->user_id)}}', '{{route('user.update', $user->user_id)}}');" data-toggle="modal" data-target="#cweditusermodal">Edit</button></td>
            <td><button type="button" class="btn btn-danger " onclick="deleteUser('{{$user->user_id}}')">Delete</button></td>
          {{-- delete button model --}}
<!-- Modal -->
<div class="modal fade" id="DeleteModalCenter-{{$user->user_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger font-weight-bold" id="exampleModalLongTitle">Delete</h5>
        <button type="button" class="close" data-dismiss="modall" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-warning font-weight-bold">
        Do you really want to delete this content?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modall">No</button>
        <button type="button" class="btn btn-danger" onclick="deleteUserData('{{route('user.delete', $user->user_id)}}','{{$user->user_id}}')">Yes</button>
      </div>
    </div>
  </div>
</div>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{-- Pagination --}}
      <div class="row">
        {{-- {{ $user->links() }} --}}
      </div>
    </div>
  </div>
</div>
</div>
</div>
  </div>


<!-- User Page End -->

<!-- /.container-fluid -->
@push('js')
<script>
   function getUser(user_id, route, editUrl) {

       $("#editformID").attr("action", editUrl)

       $.ajax({
            type: 'GET',
            dataType: 'json',
            url:  route,
            success: function (response) {
                if (response.status) {
                    let user = response.user;
                    $("#cwfupname").val(user.FirstName)
                    $("#cwlupname").val(user.LastName)
                    $("#cwupdateofbirth").val(user.DateOfBirth)
                    $("#cwupmailid").val(user.MailID)
                    $("#cwupusername").val(user.username)
                    $("#cwuppassword").val(user.password)
                }
            }, error: function (error) {

            }

        });
    }

    function updateUser(route) {
        $.ajax({
            type: 'PUT',
            dataType: 'json',
            url:  $("#editformID").attr("action"),
            data: $("#editformID").serialize(),
            success: function (response) {
                if (response.status) {
                    alert(response.message)
                } else {
                    alert(response.message)
                }
                window.location.href = "http://localhost:8000/manage-users";
            }, error: function (error) {
                //
            }

        });
    }

    function deleteUser(user_id) {
      $("#DeleteModalCenter-"+user_id).modal("show")

}

     function deleteUserData(route,user_id){
      $.ajax({
     type: 'get',
     dataType: 'json',
     url:  route,
     success: function (response) {
         if (response.status) {
             alert(response.message) 
             $('.row-'+user_id).remove();

         }
     }, error: function (error) {

     }

 });
     }


</script>

@endpush

</div>
@endsection
<!-- End of Main Content -->
