$(document).ready(function() {
    let parentDiv = $('.form-group');
    let childDiv = parentDiv.children('.d-flex');
    let editContent = childDiv.children('#cwEditContent');
    let delContent = childDiv.children('#cwDelContent');
    // Dlete Content
    $(delContent).on('click', function() {
        let id = $(this).data('id');
        $('.cw-delete-content').attr('data-id', id);
    });
    $('.cw-delete-content').on('click', function() {
        let id = $(this).data('id');
        $.ajax({
            type: "DELETE",
            url: "/txt-manage-text/destroy/" + id,
            data: {
                '_token' : $("meta[name='csrf-token']").attr("content"),
                'id' : id
            },
            dataType: "json",
            success: function (response) {
                if( response.status == true ) {
                    $('#cwDelModal').modal('hide');
                    window.location = window.location.href;
                }
            },
            error: function (responce) {
                if( responce.status == false ) {
                    $('#cwDelModal').modal('hide');
                    alert(responce.message);
                }
            }
        });
    });
    // Edit Content
    $(editContent).on('click', function() {
        let id = $(this).data('id');
        $('.cw-edit-content').attr('data-id', id);
        $.ajax({
            type: "GET",
            url: "/txt-manage-text/edit/" + id,
            data: {
                '_token' : $("meta[name='csrf-token']").attr("content"),
                'id' : id
            },
            dataType: "json",
            success: function (responce) {
                if( responce.status == true ) {
                    let data = responce.message;
                    loadcat(data.level_one, data.level_two, data.level_three, data.level_four, data.level_five);
                    console.log(responce.message);
                    $('#businesstext').val(data.content);
                }
            },
            error: function (responce) {
                if( responce.status == false ) {
                    $('#').modal('hide');
                    alert(responce.message);
                }
            }
        });
    });

    function loadcat(level_one, level_two, level_three, level_four, level_five) {
        $.ajax({
            type: "GET",
            url: "/txt-manage-text/levelone",
            data: {
                '_token' : $("meta[name='csrf-token']").attr("content")
            },
            dataType: "json",
            success: function (ress) {
                let res = ress.message;
                $('#cwCLevelOne').children().remove();
                $('#cwCLevelOne').append('<option class="bg-white text-dark" value="select">--- SELECT ---</option>');
                for( var i = 0; i < res.length; i++ ) {
                    if( res[i].category_name.trim() == level_one ) {
                        $('#cwCLevelOne').append('<option class="bg-white text-dark" value="'+ res[i].category_name +'" data-id="'+res[i].id+'" selected>'+ res[i].category_name +'</option>');
                    } else {
                        $('#cwCLevelOne').append('<option class="bg-white text-dark" value="'+ res[i].category_name +'" data-id="'+res[i].id+'">'+ res[i].category_name +'</option>');
                    }
                }
                let level_one_id = $('option:selected', '#cwCLevelOne').data('id');
                $.ajax({
                    type: "GET",
                    url: "/txt-add-text/leveltwo/" + level_one_id,
                    data: {
                        '_token' : $("meta[name='csrf-token']").attr("content"),
                        'id' : level_one_id
                    },
                    dataType: "json",
                    success: function (response) {
                        if( response.status == true ) {
                            let res = response.message;
                            $('#cwCLevelTwo').removeAttr('disabled');
                            $('#cwCLevelTwo').children().remove();
                            $('#cwCLevelTwo').append('<option class="bg-white text-dark" value="select">--- SELECT ---</option>');
                            for( var i = 0; i < res.length; i++ ) {
                                if( res[i].category_name.trim() == level_two ) {
                                    var sel = "selected";
                                } else {
                                    var sel = "";
                                }
                                if( level_one_id == res[i].level_two && res[i].level_three == 0 && res[i].level_four == 0 && res[i].level_five == 0 ) {
                                    $('#cwCLevelTwo').append('<option class="bg-white text-dark" value="'+ res[i].category_name +'" data-id="'+res[i].id+'" '+sel+'>'+ res[i].category_name +'</option>');
                                }
                            }
                            let level_two_id = $('option:selected', '#cwCLevelTwo').data('id');
                            $.ajax({
                                type: "GET",
                                url: "/txt-add-text/levelthree/" + level_two_id,
                                data: {
                                    '_token' : $("meta[name='csrf-token']").attr("content"),
                                    'id' : level_two_id
                                },
                                dataType: "json",
                                success: function (response) {
                                    if( response.status == true ) {
                                        let res = response.message;
                                        $('#cwCLevelThree').removeAttr('disabled');
                                        $('#cwCLevelThree').children().remove();
                                        $('#cwCLevelThree').append('<option class="bg-white text-dark" value="select">--- SELECT ---</option>');
                                        for( var i = 0; i < res.length; i++ ) {
                                            if( res[i].category_name.trim() == level_three ) {
                                                var sel = "selected";
                                            } else {
                                                var sel = "";
                                            }
                                            $('#cwCLevelThree').append('<option class="bg-white text-dark" value="'+ res[i].category_name +'" data-id="'+res[i].id+'" '+sel+'>'+ res[i].category_name +'</option>');
                                        }
                                        let level_three_id = $('option:selected', '#cwCLevelThree').data('id');
                                        $.ajax({
                                            type: "GET",
                                            url: "/txt-add-text/levelfour/" + level_three_id,
                                            data: {
                                                '_token' : $("meta[name='csrf-token']").attr("content"),
                                                'id' : level_three_id
                                            },
                                            dataType: "json",
                                            success: function (response) {
                                                if( response.status == true ) {
                                                    let res = response.message;
                                                    $('#cwCLevelFour').removeAttr('disabled');
                                                    $('#cwCLevelFour').children().remove();
                                                    $('#cwCLevelFour').append('<option class="bg-white text-dark" value="select">--- SELECT ---</option>');
                                                    for( var i = 0; i < res.length; i++ ) {
                                                        if( res[i].category_name.trim() == level_four ) {
                                                            var sel = "selected";
                                                        } else {
                                                            var sel = "";
                                                        }
                                                        $('#cwCLevelFour').append('<option class="bg-white text-dark" value="'+ res[i].category_name +'" data-id="'+res[i].id+'" '+sel+'>'+ res[i].category_name +'</option>');
                                                    }
                                                    let level_four_id = $('option:selected', '#cwCLevelFour').data('id');
                                                    $.ajax({
                                                        type: "GET",
                                                        url: "/txt-add-text/levelfive/" + level_four_id,
                                                        data: {
                                                            '_token' : $("meta[name='csrf-token']").attr("content"),
                                                            'id' : level_four_id
                                                        },
                                                        dataType: "json",
                                                        success: function (response) {
                                                            if( response.status == true ) {
                                                                let res = response.message;
                                                                $('#cwCLevelFive').removeAttr('disabled');
                                                                $('#cwCLevelFive').children().remove();
                                                                $('#cwCLevelFive').append('<option class="bg-white text-dark" value="select">--- SELECT ---</option>');
                                                                for( var i = 0; i < res.length; i++ ) {
                                                                    if( res[i].category_name.trim() == level_five ) {
                                                                        var sel = "selected";
                                                                    } else {
                                                                        var sel = "";
                                                                    }
                                                                    $('#cwCLevelFive').append('<option class="bg-white text-dark" value="'+ res[i].category_name +'" data-id="'+res[i].id+'" '+sel+'>'+ res[i].category_name +'</option>');
                                                                }
                                                            }
                                                        },
                                                        error : function (responce) {
                                                            alert("Some Problem Occur on Your Server!");
                                                        }
                                                    });
                                                }
                                            },
                                            error : function (responce) {
                                                alert("Some Problem Occur on Your Server!");
                                            }
                                        });
                                    }
                                },
                                error : function (responce) {
                                    alert("Some Problem Occur on Your Server!");
                                }
                            });
                        }
                    },
                    error : function (responce) {
                        alert("Some Problem Occur on Your Server!");
                    }
                });
            }
        })
    }
    $('.cw-edit-content').on('click', function() {
        let id = $(this).data('id');
        $.ajax({
            type: "PUT",
            url: "/txt-manage-text/update/" + id,
            data: {
                '_token' : $("meta[name='csrf-token']").attr("content"),
                'id' : id,
                'levelone' : $('#cwCLevelOne').val(),
                'leveltwo' : $('#cwCLevelTwo').val(),
                'levelthree' : $('#cwCLevelThree').val(),
                'levelfour' : $('#cwCLevelFour').val(),
                'levelfive' : $('#cwCLevelFive').val(),
                'businesstext' : $('#businesstext').val()
            },
            dataType: "json",
            success: function (responce) {
                if( responce.status == true ) {
                    $('#cwEditModal').modal('hide');
                    window.location = window.location.href;
                }
            },
            error: function(responce) {
                if( responce.status == false ) {
                    $('#cwEditModal').modal('hide');
                    alert(responce.message);
                }
            }
        })
    });
});