$(document).ready(function() {
    var cwImageList = $('#cwImageList');
    var tableBody = cwImageList.children('tbody');
    var tableRow = tableBody.children('tr');
    var tableTd = tableRow.children('td');
    var cwCropImg = tableTd.children('.cw-crop-img');
    $(cwCropImg).on('click', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        $('.cwImageId').text('Image-ID: '+id);
        var token = $("meta[name='csrf-token']").attr("content");
        var homeUrl = document.location.origin;
        $.ajax({
            type : 'GET',
            url : '/cw-tasks-img-crop/getimage/' + id,
            data : {
                '_token' : token,
                'id' : id
            },
            success : function(responce) {
                let selectedImage = responce.UploadImage;
                $('#cw-cropped-modal-body').children().remove();
                var img = document.createElement('img');
                img.setAttribute('id', 'cwSelectedImg');
                img.setAttribute('class', 'img-fluid rounded');
                img.setAttribute('src', homeUrl+'/storage/uploads/'+selectedImage.filename); 
                document.getElementById('cw-cropped-modal-body').appendChild(img);
                $('.cwImageKeywords span').text(selectedImage.keywords);
                $('.cw-crop-btn').attr('data-id', selectedImage.id);
                $('.cw-crop-btn').attr('data-step', '0');
                $('.cw-crop-btn').attr('data-img', selectedImage.filename);
                $('#cropModal').modal('show');  
                var width = $('.cw-crop-btn').data('width');
                var height = $('.cw-crop-btn').data('height');
                cwCroopingImg(width, height);
            }
        });
    });
    // Croping Function 
    function cwCroopingImg(width, height) {
        var width = width;
        var height = height;
        var homeUrl = document.location.origin;
        var cwSelectedImg = document.getElementById('cwSelectedImg');
        var cropper = new Cropper(cwSelectedImg, {
            viewMode: 1,
            aspectRatio: width / height,
            ready : function() {
                $('.cw-crop-btn').on('click', function() {
                    $(this).html('<span class="spinner-border spinner-border-sm"></span>&nbsp;Croping...');
                    var id = $(this).data('id');
                    var imgname = $(this).data('img');
                    var newtoken = $("meta[name='csrf-token']").attr("content");
                    canvas = cropper.getCroppedCanvas({
                        width: width,
                        height: height,
                    });
                    canvas.toBlob(function(blob) {
                        url = URL.createObjectURL(blob);
                        var reader = new FileReader();
                        reader.readAsDataURL(blob);
                        reader.onloadend = function() {
                            var base64data = reader.result;
                            $.ajax({
                                type: 'POST',
                                url: 'cw-tasks-img-crop',
                                dataType: 'json',
                                data: {
                                    '_token' : newtoken,
                                    'crop_image' : base64data,
                                    'id' : id,
                                    'width' : width,
                                    'height' : height,
                                },
                                success: function(responce) {
                                    var status = responce.status;
                                    var step = responce.step;
                                    if( status == true ) {
                                        if( step == 1 ) {
                                            $('#cw-cropped-modal-body').children().remove();
                                            $('.cw-crop-btn').remove();
                                            $('.cwCropStep').text('Crop 2 of 6 in 2400 x 1000 px');
                                            var img = document.createElement('img');
                                            img.setAttribute('id', 'cwSelectedImg');
                                            img.setAttribute('class', 'img-fluid rounded');
                                            img.setAttribute('src', homeUrl+'/storage/uploads/'+imgname); 
                                            document.getElementById('cw-cropped-modal-body').appendChild(img);
                                            $('.cwActionBtn').append('<button type="button" class="btn btn-primary cw-crop-btn" data-width="2400" data-height="1000" data-id="'+id+'" data-img="'+imgname+'" data-step="'+step+'">Crop</button>');
                                            cwCroopingImg('2400', '1000');
                                        }
                                        if( step == 2 ) {
                                            $('#cw-cropped-modal-body').children().remove();
                                            $('.cw-crop-btn').remove();
                                            $('.cwCropStep').text('Crop 3 of 6 in 2400 x 750 px');
                                            var img = document.createElement('img');
                                            img.setAttribute('id', 'cwSelectedImg');
                                            img.setAttribute('class', 'img-fluid rounded');
                                            img.setAttribute('src', homeUrl+'/storage/uploads/'+imgname); 
                                            document.getElementById('cw-cropped-modal-body').appendChild(img);
                                            $('.cwActionBtn').append('<button type="button" class="btn btn-primary cw-crop-btn" data-width="2400" data-height="750" data-id="'+id+'" data-img="'+imgname+'" data-step="'+step+'">Crop</button>');
                                            cwCroopingImg('2400', '750');
                                        }
                                        if( step == 3 ) {
                                            $('#cw-cropped-modal-body').children().remove();
                                            $('.cw-crop-btn').remove();
                                            $('.cwCropStep').text('Crop 4 of 6 in 2400 x 500 px');
                                            var img = document.createElement('img');
                                            img.setAttribute('id', 'cwSelectedImg');
                                            img.setAttribute('class', 'img-fluid rounded');
                                            img.setAttribute('src', homeUrl+'/storage/uploads/'+imgname); 
                                            document.getElementById('cw-cropped-modal-body').appendChild(img);
                                            $('.cwActionBtn').append('<button type="button" class="btn btn-primary cw-crop-btn" data-width="2400" data-height="500" data-id="'+id+'" data-img="'+imgname+'" data-step="'+step+'">Crop</button>');
                                            cwCroopingImg('2400', '500');
                                        }
                                        if( step == 4 ) {
                                            $('#cw-cropped-modal-body').children().remove();
                                            $('.cw-crop-btn').remove();
                                            $('.cwCropStep').text('Crop 5 of 6 in 600 x 600 px');
                                            var img = document.createElement('img');
                                            img.setAttribute('id', 'cwSelectedImg');
                                            img.setAttribute('class', 'img-fluid rounded');
                                            img.setAttribute('src', homeUrl+'/storage/uploads/'+imgname); 
                                            document.getElementById('cw-cropped-modal-body').appendChild(img);
                                            $('.cwActionBtn').append('<button type="button" class="btn btn-primary cw-crop-btn" data-width="600" data-height="600" data-id="'+id+'" data-img="'+imgname+'" data-step="'+step+'">Crop</button>');
                                            cwCroopingImg('600', '600');
                                        }
                                        if( step == 5 ) {
                                            $('#cw-cropped-modal-body').children().remove();
                                            $('.cw-crop-btn').remove();
                                            $('.cwCropStep').text('Crop 5 of 6 in 450 x 600 px');
                                            var img = document.createElement('img');
                                            img.setAttribute('id', 'cwSelectedImg');
                                            img.setAttribute('class', 'img-fluid rounded');
                                            img.setAttribute('src', homeUrl+'/storage/uploads/'+imgname); 
                                            document.getElementById('cw-cropped-modal-body').appendChild(img);
                                            $('.cwActionBtn').append('<button type="button" class="btn btn-primary cw-crop-btn" data-width="450" data-height="600" data-id="'+id+'" data-img="'+imgname+'" data-step="'+step+'">Crop</button>');
                                            cwCroopingImg('450', '600');
                                            $('#cropModal').modal('hide');
                                            window.location = window.location.href;   
                                        }
                                    }
                                }, 
                                error : function(responce){
                                    console.log(responce);
                                }
                            });
                        };
                    });
                });
            }
        });
    }

    $('.cw-skip-btn').on('click', function() {
        var step = $('.cw-crop-btn').data('step');
        var imgname = $('.cw-crop-btn').data('img');
        var homeUrl = document.location.origin;
        if( step == 0 ) {
            $('#cw-cropped-modal-body').children().remove();
            $('.cw-crop-btn').remove();
            $('.cwCropStep').text('Crop 2 of 6 in 2400 x 1000 px');
            var img = document.createElement('img');
            img.setAttribute('id', 'cwSelectedImg');
            img.setAttribute('class', 'img-fluid rounded');
            img.setAttribute('src', homeUrl+'/storage/uploads/'+imgname); 
            document.getElementById('cw-cropped-modal-body').appendChild(img);
            $('.cwActionBtn').append('<button type="button" class="btn btn-primary cw-crop-btn" data-width="2400" data-height="1000" data-id="'+id+'" data-img="'+imgname+'" data-step="'+step+'">Crop</button>');
        } else if(step == 1) {
            $('#cw-cropped-modal-body').children().remove();
            $('.cw-crop-btn').remove();
            $('.cwCropStep').text('Crop 3 of 6 in 2400 x 750 px');
            var img = document.createElement('img');
            img.setAttribute('id', 'cwSelectedImg');
            img.setAttribute('class', 'img-fluid rounded');
            img.setAttribute('src', homeUrl+'/storage/uploads/'+imgname); 
            document.getElementById('cw-cropped-modal-body').appendChild(img);
            $('.cwActionBtn').append('<button type="button" class="btn btn-primary cw-crop-btn" data-width="2400" data-height="750" data-id="'+id+'" data-img="'+imgname+'" data-step="'+step+'">Crop</button>');
        } else if(step == 2) {
            $('#cw-cropped-modal-body').children().remove();
            $('.cw-crop-btn').remove();
            $('.cwCropStep').text('Crop 4 of 6 in 2400 x 500 px');
            var img = document.createElement('img');
            img.setAttribute('id', 'cwSelectedImg');
            img.setAttribute('class', 'img-fluid rounded');
            img.setAttribute('src', homeUrl+'/storage/uploads/'+imgname); 
            document.getElementById('cw-cropped-modal-body').appendChild(img);
            $('.cwActionBtn').append('<button type="button" class="btn btn-primary cw-crop-btn" data-width="2400" data-height="500" data-id="'+id+'" data-img="'+imgname+'" data-step="'+step+'">Crop</button>');
        } else if(step == 3) {
            $('#cw-cropped-modal-body').children().remove();
            $('.cw-crop-btn').remove();
            $('.cwCropStep').text('Crop 5 of 6 in 600 x 600 px');
            var img = document.createElement('img');
            img.setAttribute('id', 'cwSelectedImg');
            img.setAttribute('class', 'img-fluid rounded');
            img.setAttribute('src', homeUrl+'/storage/uploads/'+imgname); 
            document.getElementById('cw-cropped-modal-body').appendChild(img);
            $('.cwActionBtn').append('<button type="button" class="btn btn-primary cw-crop-btn" data-width="600" data-height="600" data-id="'+id+'" data-img="'+imgname+'" data-step="'+step+'">Crop</button>');
        } else if(step == 4) {
            $('#cw-cropped-modal-body').children().remove();
            $('.cw-crop-btn').remove();
            $('.cwCropStep').text('Crop 5 of 6 in 450 x 600 px');
            var img = document.createElement('img');
            img.setAttribute('id', 'cwSelectedImg');
            img.setAttribute('class', 'img-fluid rounded');
            img.setAttribute('src', homeUrl+'/storage/uploads/'+imgname); 
            document.getElementById('cw-cropped-modal-body').appendChild(img);
            $('.cwActionBtn').append('<button type="button" class="btn btn-primary cw-crop-btn" data-width="450" data-height="600" data-id="'+id+'" data-img="'+imgname+'" data-step="'+step+'">Crop</button>');
        }
    });
    // Search Function
    $('.cwSearchCropImg').on('click', function(e) {
        e.preventDefault();
        var cropdeminsion = $(this).data('search');
        var keyword = $('#cwKeywordSearch').val();
        window.location = '?search='+cropdeminsion+'&keyword='+keyword;
    });
});