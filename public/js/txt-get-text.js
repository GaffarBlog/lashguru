$(document).ready(function() {
    $('#cwCLevelOne').on('change', function() {
        let levelone = $("#cwCLevelOne").val().trim();
        $('#cwcontentdata').children().remove();
        $('#cwCLevelTwo').on('change', function() {
            let leveltwo = $("#cwCLevelTwo").val().trim();
            $('#cwCLevelThree').on('change', function() {
                let levelthree = $("#cwCLevelThree").val().trim();
                $('#cwCLevelFour').on('change', function() {
                    let levelfour = $("#cwCLevelFour").val().trim();
                    $('#cwCLevelFive').on('change', function() {
                        let levelfive = $("#cwCLevelFive").val().trim();
                        $.ajax({
                            method: "GET",
                            url: "/content-txt-get-text/getcontent",
                            data: {
                                '_token' : $("meta[name='csrf-token']").attr("content"),
                                'levelone' : levelone,
                                'leveltwo' : leveltwo,
                                'levelthree' : levelthree,
                                'levelfour' : levelfour,
                                'levelfive' : levelfive
                            },
                            dataType: "json",
                            success: function (responce) {
                                let res = responce.data;
                                $('#cwcontentdata').children().remove();
                                if( res.length == 0 ) {
                                    $('#cwcontentdata').append('<div class="alert alert-success mt-4">No, Result Found</div>');
                                } else {
                                    for(var i = 0; i < res.length; i++) {
                                        $('#cwcontentdata').append('<div class="form-group mt-4"><textarea class="form-control text-dark" name="getcontent" readonly id="getcontent" rows="3">'+res[i].content+'</textarea></div>');
                                    }
                                }
                            },
                            error: function (responce) {
                                $('#cwcontentdata').append('<div class="alert alert-success mt-4">Some, problem occur while fetching the data</div>');
                            }
                        });
                    });
                });
            });
        });
    });
    $('.cw-copy-content').click( function() {
        var temp = jQuery("<input>");
        $("body").append(temp);
        temp.val(jQuery('#edittext').val()).select();
        document.execCommand("copy");
        temp.remove();
        $('.cw-copy-content').text('Code Copied!');
    });
});
// $(function(){
//     var cwcontentdata = $('#cwcontentdata');
//     var cwcontentdatacDiv = cwcontentdata.children('.form-group');
//     var getcontentcat = cwcontentdatacDiv.children('#getcontent');
//     $(getcontentcat).click(function() {
//         alert('Hello');
//         var catContent = $(this).val();
//         $('#edittext').val(catContent);
//     });
// })

$(function(){
    $('body').on('click', '#getcontent textarea', function(){
        alert('Hello');
        var catContent = $(this).val();
        $('#edittext').val(catContent);
    });  
});