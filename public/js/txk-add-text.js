$(document).ready(function() {
    // Level Two Cat Ajax
    $('#cwCLevelOne').on('change', function() {
        let catName = $(this).val();
        let id = $('option:selected', this).data('id');
        $('#cwCLevelTwo, #cwCLevelThree, #cwCLevelFour, #cwCLevelFive').children().remove();
        $('#cwCLevelTwo, #cwCLevelThree, #cwCLevelFour, #cwCLevelFive').append('<option class="bg-white text-dark" value="select">--- SELECT ---</option>');
        $('#cwCLevelTwo, #cwCLevelThree, #cwCLevelFour, #cwCLevelFive').attr('disabled', 'disabled');
        if( catName != 'select' ) {
            $.ajax({
                type: "GET",
                url: "/txt-add-text/leveltwo/" + id,
                data: {
                    '_token' : $("meta[name='csrf-token']").attr("content"),
                    'id' : id
                },
                dataType: "json",
                success: function (response) {
                    if( response.status == true ) {
                        let res = response.message;
                        $('#cwCLevelTwo').removeAttr('disabled');
                        $('#cwCLevelTwo').children().remove();
                        $('#cwCLevelTwo').append('<option class="bg-white text-dark" value="select">--- SELECT ---</option>');
                        for( var i = 0; i < res.length; i++ ) {
                            if( id == res[i].level_two && res[i].level_three == 0 && res[i].level_four == 0 && res[i].level_five == 0 ) {
                                $('#cwCLevelTwo').append('<option class="bg-white text-dark" value="'+ res[i].category_name +'" data-id="'+res[i].id+'">'+ res[i].category_name +'</option>');
                            }
                        }
                    }
                },
                error : function (responce) {
                    alert("Some Problem Occur on Your Server!");
                }
            });
        }
    });
    // Level Three Cat Ajax
    $('#cwCLevelTwo').on('change', function() {
        let catName = $(this).val();
        let id = $('option:selected', this).data('id');
        if( catName != 'select' ) {
            $.ajax({
                type: "GET",
                url: "/txt-add-text/levelthree/" + id,
                data: {
                    '_token' : $("meta[name='csrf-token']").attr("content"),
                    'id' : id
                },
                dataType: "json",
                success: function (response) {
                    if( response.status == true ) {
                        let res = response.message;
                        $('#cwCLevelThree').removeAttr('disabled');
                        $('#cwCLevelThree').children().remove();
                        $('#cwCLevelThree').append('<option class="bg-white text-dark" value="select">--- SELECT ---</option>');
                        for( var i = 0; i < res.length; i++ ) {
                            $('#cwCLevelThree').append('<option class="bg-white text-dark" value="'+ res[i].category_name +'" data-id="'+res[i].id+'">'+ res[i].category_name +'</option>');
                        }
                    }
                },
                error : function (responce) {
                    alert("Some Problem Occur on Your Server!");
                }
            });
        }
    });
    // Level Four Cat Ajax
    $('#cwCLevelThree').on('change', function() {
        let catName = $(this).val();
        let id = $('option:selected', this).data('id');
        if( catName != 'select' ) {
            $.ajax({
                type: "GET",
                url: "/txt-add-text/levelfour/" + id,
                data: {
                    '_token' : $("meta[name='csrf-token']").attr("content"),
                    'id' : id
                },
                dataType: "json",
                success: function (response) {
                    if( response.status == true ) {
                        let res = response.message;
                        $('#cwCLevelFour').removeAttr('disabled');
                        $('#cwCLevelFour').children().remove();
                        $('#cwCLevelFour').append('<option class="bg-white text-dark" value="select">--- SELECT ---</option>');
                        for( var i = 0; i < res.length; i++ ) {
                            $('#cwCLevelFour').append('<option class="bg-white text-dark" value="'+ res[i].category_name +'" data-id="'+res[i].id+'">'+ res[i].category_name +'</option>');
                        }
                    }
                },
                error : function (responce) {
                    alert("Some Problem Occur on Your Server!");
                }
            });
        }
    });
    // Level Five Cat Ajax
    $('#cwCLevelFour').on('change', function() {
        let catName = $(this).val();
        let id = $('option:selected', this).data('id');
        if( catName != 'select' ) {
            $.ajax({
                type: "GET",
                url: "/txt-add-text/levelfive/" + id,
                data: {
                    '_token' : $("meta[name='csrf-token']").attr("content"),
                    'id' : id
                },
                dataType: "json",
                success: function (response) {
                    if( response.status == true ) {
                        let res = response.message;
                        $('#cwCLevelFive').removeAttr('disabled');
                        $('#cwCLevelFive').children().remove();
                        $('#cwCLevelFive').append('<option class="bg-white text-dark" value="select">--- SELECT ---</option>');
                        for( var i = 0; i < res.length; i++ ) {
                            $('#cwCLevelFive').append('<option class="bg-white text-dark" value="'+ res[i].category_name +'" data-id="'+res[i].id+'">'+ res[i].category_name +'</option>');
                        }
                    }
                },
                error : function (responce) {
                    alert("Some Problem Occur on Your Server!");
                }
            });
        }
    });
    // Word Count Function
    function wordCount(field) {
        var number = 0;
        var matches = $(field).val().split(" ");
        // Count number of words
        number = matches.filter(function (word) {
            return word.length > 0;
        }).length;
        // Final number of words
        $(".cw-word-count").text(number + ' Words');
    }
    // Letter Count Function
    function letterCount(field) {
        var number = 0;
        var val = $(field).val();
        number = val.length;
        // Final number of words
        $(".cw-letter-count").text(number + ' Signs / ');
    }
    $("#businesstext").each(function () {
        // Count words when keyboard key is released
        $(this).keyup(function () {
            wordCount('#businesstext');
            letterCount('#businesstext');
        });
    });
});