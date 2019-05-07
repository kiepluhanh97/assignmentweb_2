$('.ui.dropdown').dropdown();
$('.ui.radio.checkbox').checkbox();

// $('#upload').on('click', function() {
//     var file_data = $('#file').prop('files')[0];   
//     var form_data = new FormData();                  
//     form_data.append('file', file_data);
//     $.ajax({
//         url: '../page/uploadfile.php', // point to server-side PHP script 
//         dataType: 'text',  // what to expect back from the PHP script, if anything
//         cache: false,
//         contentType: false,
//         processData: false,
//         data: form_data,                         
//         type: 'post',
//         success: function(php_script_response){
//             alert(php_script_response); // display response from the PHP script, if any
//         }
//      });
// });

$(document).ready(function (e) {
    $("#upload-form").on('submit', function (e) {
        e.preventDefault();

        var file_data = $('#file').prop('files')[0];
        var image_data = $('#image').prop('files')[0];
        if ($('input[name=name]').val() === "" || $('input[name=description]').val() === "") {
            $('.ui.failed.modal .content').html('Name and Description must not be empty');
            $('.ui.failed.modal').modal('show');
        } else if (typeof file_data === "undefined") {
            $('.ui.failed.modal .content').html('File must not be empty');
            $('.ui.failed.modal').modal('show');
        } else if (typeof image_data === "undefined") {
            $('.ui.failed.modal .content').html('Image must not be empty');
            $('.ui.failed.modal').modal('show');
        } else {
            var form_data = new FormData();
            form_data.append('file', file_data);
            form_data.append('image', image_data);
            form_data.append('name', $('input[name=name]').val());
            form_data.append('description', $('input[name=description]').val());
            form_data.append('type', $('input[name=type]:checked').val());
            $.ajax({
                type: 'POST',
                url: '../page/uploadfile.php',
                dataType: 'text',
                data: form_data,
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function () {
                    $('#upload-form .button').attr("disabled", "disabled");
                    $('#upload-form').css("opacity", ".5");
                },
                success: function (msg) {
                    $('.ui.successful.modal').modal('show');
                    $('#upload-form').css("opacity", "");
                    $('.submitBtn').removeAttr("disabled");
                }
            });
        }
    });

    //file validation
    $("#file").change(function () {
        var file = this.files[0];
        if (file.type !== "application/x-zip-compressed" && file.type !== "application/zip") {
            alert(file.type);
            $("#file").val('');
            return false;
        } else if (file.size >= 40 * 1024 * 1024) {
            alert('File size must be less than 40MB');
            $("#file").val('');
            return false;
        }
    });

    //image validation
    $("#image").change(function () {
        var image = this.files[0];
        var match = ["image/jpeg", "image/png", "image/jpg"];
        if (!match.includes(image.type)) {
            alert('Image type must be PNG or JPEG');
            $("#image").val('');
            return false;
        } else if (image.size >= 2 * 1024 * 1024) {
            alert('Image size must be less than 2MB');
            $("#image").val('');
            return false;
        }
        var reader = new FileReader();
        reader.onload = function (event) {
            $('#upload-form .image').attr("src", this.result);
        };
        reader.readAsDataURL(image);
    });
});