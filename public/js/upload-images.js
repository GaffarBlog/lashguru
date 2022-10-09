/* Script for the upload images page */
$(document).ready(function () {
    $(".custom-file-input").on("change", function() {
        var files = $(this)[0].files;
        // var filename = files[0].name;
        // var keyword = filename.split('.').slice(0, -1).join('.');
        // keyword = keyword.replace(/[0-9]/g, '');
        // keyword = keyword.replace(/[()]/g, '');
        // $("#cwPicsKeywords").val(keyword);
        if( files.length > 1 ) {
            var totalFiles = files.length - 1;
            $(this).siblings(".custom-file-label").addClass("selected").text(files[0].name + ' and ' + totalFiles + ' others');
        } else {
            $(this).siblings(".custom-file-label").addClass("selected").text(files[0].name);
        }
    });

    // Search filter 
    $("#cwImageSearch").keyup(function (e) { 
        let searchValue = $(this).val().toUpperCase();
        let tableId = $("#cwImageList");
        let tbody = tableId.children('tbody');
        let tr = tbody.children('tr');
        for (var i = 0; i < tr.length; i++) {
            let td = tr[i].getElementsByTagName('td')[1];
            if (td) {
                let textvalue = td.textContent || td.innerHTML;
                if (textvalue.toUpperCase().indexOf(searchValue) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    });

    // Delete Image Code 
    var cwImageList = $('#cwImageList');
    var tbody = cwImageList.children('tbody');
    var tr = tbody.children('tr');
    var td = tr.children('td');
    var delbtn = td.children('#cwDelImage');
    $(delbtn).on('click', function (e) { 
        e.preventDefault();
        var id = $(this).data('id');
        $("#cwImgDelModalId").val(id);
    });
    $(".del-img-btn").on('click', function(e) {
        e.preventDefault();
        var id = $("#cwImgDelModalId").val();
        var token = $("meta[name='csrf-token']").attr("content");
        if( id != '' ) {
            $.ajax({
                type: "DELETE",
                url: "/img-upload/" + id,
                data: {
                    "_token": token,
                    "id": id
                },
                success: function (response) {
                    if( response.success ) {
                        $('#cwdeleteimage').modal('hide');
                        $('.cw-responce-del').html('<div class="alert alert-success d-flex align-items-center"><div class="loader"><svg class="circular"><circle class="path" cx="25" cy="25" r="16" fill="none" stroke-width="2"  stroke-color="#f00" stroke-miterlimit="10"/></svg><svg class="suc"><path class="checkmark__check" fill="none" d="M10.7,20.4l5.3,5.3l12.4-12.5"></path></svg></div>'+response.success+'</div>');
                        window.location = window.location.href;
                    }
                },
                error: function (response) {
                    if( response.error ) {
                        $('#cwdeleteimage').modal('hide');
                        $('.cw-responce-del').html('<div class="alert alert-success"><strong>Warning!</strong>'+response.error+'.</div>');
                        window.location = window.location.href;
                    }
                }
            });
        }
    });

});