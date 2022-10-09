$(document).ready(function() {
    // Edit function
    let cwBusinessCat = $('#cwBusinessCat');
    let tr =  cwBusinessCat.children('tr');
    let td = tr.children('td');
    let cwEditCategory = td.children('#cwEditCategory');
    $(cwEditCategory).on('click', function() {
        let id = $(this).data('id');
        $('.cw-update-category').attr('data-id', id);
        let token = $("meta[name='csrf-token']").attr("content");
        $.ajax({
            type: "GET",
            url: "/cat-manage-user-roles/edit/" + id,
            data: {
                '_token' : token,
                'id' : id
            },
            success: function (response) {
                let businessCat = response.cat_manage_user_roles;
                if( businessCat ) {
                    $('#cwUpdateCatName').val(businessCat.user_role);
                }
            }
        });
    });
    // Update function
    $('.cw-update-category').on('click', function() {
        let id = $(this).data('id');
        let token = $("meta[name='csrf-token']").attr("content");
        let catname = $('#cwUpdateCatName').val();
        $.ajax({
            type : 'PUT',
            url : '/cat-manage-user-roles/update/' + id,
            dataType: 'json',
            data : {
                '_method': 'PUT',
                '_token' : $('input[name=_token]').val(),
                'id' : id,
                'catname' : catname
            },
            success : function(responce) {
                if( responce.status == true ) {
                    $('#cwUpdateCategory').modal('hide');
                    window.location = window.location.href;
                    $('.cw-responce-del').html('<div class="alert alert-success"><strong>Success!</strong>'+responce.message+'.</div>');
                }
            },
            error : function(responce) {
                if( responce.status == false ) {
                    $('#cwUpdateCategory').modal('hide');
                    $('.cw-responce-del').html('<div class="alert alert-success"><strong>Warning!</strong>'+responce.message+'.</div>');
                }
            }
        });
    });
    // Get delete id
    let cwDeleteCategory = td.children('#cwDeleteCategory');
    $(cwDeleteCategory).on('click', function() {
        let id = $(this).data('id');
        $('.cw-delete-category').attr('data-id', id);
    });
    // Delete function
    $('.cw-delete-category').on('click', function() {
        let id = $(this).data('id');
        let token = $("meta[name='csrf-token']").attr("content");
        $.ajax({
            type : 'GET',
            url : '/cat-manage-user-roles/destroy/' + id,
            dataType: 'json',
            data : {
                '_token' : token,
                'id' : id,
            },
            success : function(responce) {
                if( responce.status == true ) {
                    $('#cwDeleteCategoryModal').modal('hide');
                    window.location = window.location.href;
                    $('.cw-responce-del').html('<div class="alert alert-success"><strong>Success!</strong>'+responce.message+'.</div>');
                }
            },
            error : function(responce) {
                if( responce.status == false ) {
                    $('#cwDeleteCategoryModal').modal('hide');
                    $('.cw-responce-del').html('<div class="alert alert-success"><strong>Warning!</strong>'+responce.message+'.</div>');
                }
            }
        });
    });
});