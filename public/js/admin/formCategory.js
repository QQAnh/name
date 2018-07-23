var API = 'https://api.mlab.com/api/1/databases/storephone/collections/user?apiKey=bwNYaefhPGW4uN-jmu-pBF-gzp7FiG4M';

var CLOUDINARY_URL = 'https://api.cloudinary.com/v1_1/aptech-fpt/upload';
var CLOUDINARY_UPLOAD_PRESET = 'DemoImg';
var imgPreview = '';

$(document).ready(function () {
    var fileUpload = document.getElementById('image_url');
    fileUpload.addEventListener('change', function (event) {
        var file = event.target.files[0];
        var formData = new FormData();
        formData.append('file',file);
        formData.append('upload_preset',CLOUDINARY_UPLOAD_PRESET);
        $.ajax({
            url: CLOUDINARY_URL,
            type: 'POST',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (res) {
                // imgPreview= res.secure_url;
                console.log('Upload Img Thành Công');
                return $('#avatar2').val(res.secure_url);
            },
            error: function (res, message) {
                console.log(res + message);
            }
        });
    });

    $('.fullname-err').hide();
    $('.fullname-icon-err').hide();

    $('.phone-err').hide();
    $('.phone-icon-err').hide();

    $('.email-err').hide();
    $('.password-err').hide();
    $('.email-icon-err').hide();
    $('.password-icon-err').hide();


    $('#fullname').keyup(function () {
        fullname_check();
    });
    $('#phone').keyup(function () {
        phone_check();
    });
    $('#email').keyup(function () {
        email_check();
    });
    $('#password').keyup(function () {
        password_check();
    });
});
function fullname_check() {
    var regex = /^[a-zA-Z\s]{3,30}$/;
    var fullname_err = true;
    var fullname = $('#fullname').val();
    if (fullname.length <3 || fullname.length >50) {
        $('.fullname-err').show();
        $('.fullname-err').html('Họ và tên không bao gồm số và ký tự đặc biệt gồm 3 đến 30 ký tự');
        $('.fullname-err').focus();
        $('.fullname-err').css('color', 'red');
        $('.fullname-icon-err').hide();
        fullname_err = false;
        return false;
    }
    else {
        $('.fullname-err').hide();
        $('.fullname-icon-err').show();
    }

}
function phone_check() {
    var regex = /^[0-9]{10,11}$/;
    var phone_err = true;
    var phone = $("#phone").val();
    if (phone.match(regex) ){
        $('.phone-err').hide();
        $('.phone-icon-err').show();
    }else {
        $('.phone-err').show();
        $('.phone-err').html('Mời bạn nhập đúng số điện thoại để tiện cho việc đặt hàng');
        $('.phone-err').focus();
        $('.phone-err').css('color', 'red');
        $('.phone-icon-err').hide();
        phone_err = false;
        return false;
    }
}
function email_check(){
    var email = $('#email').val();
    var regex = /^[a-z][a-z0-9_\.]{4,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/;
    if (email.match(regex   )){
        $('.email-err').hide();
        $('.email-icon-err').show();
    }else {
        $('.email-err').show();
        $('.email-err').html('Địa chỉ email không đúng định dạng');
        $('.email-err').focus();
        $('.email-err').css('color', 'red');
        $('.email-icon-err').hide();
    }
}

function password_check() {
    var password = $('#password').val();
    var regex = /^[a-zA-Z0-9]{7,50}$/;
    if (password.match(regex)){
        $('.password-err').hide();
        $('.password-icon-err').show();
    }else {
        $('.password-err').show();
        $('.password-err').html('Mật khẩu không bao gồm ký tự đặc, có ít nhất 7 ký tự');
        $('.password-err').focus();
        $('.password-err').css('color','red');
        $('.password-icon-err').hide();
    }
}

// $('#add-user').on('submit',function (e) {
//     e.preventDefault();
//     var fullname = $('#fullname').val();
//     var phone = $('#phone').val();
//     var password = $('#password').val();
//     var email = $('#email').val();
//     var role = 2; // Thành viên là 2, Admin là 1
//     var gender = $('[name="gender"]:radio:checked').val();
//     var Gender = gender;
//     var random = Math.floor((Math.random() * 1000000) + 1);
//     var date =new Date();
//     $.ajax({
//         url:API,
//         data: JSON.stringify({
//             "fullname": fullname,
//             "phone" : phone,
//             "password":password,
//             "email": email,
//             "role": role,
//             "gender": Gender,
//             "salt": random,
//             "status":1,
//             "avatar": imgPreview,
//             "created_at" : date.toLocaleDateString(),
//             "updated_at":date.toLocaleDateString(),
//         }),
//         type : "POST",
//         contentType : "application/json;charset=utf-8",
//         success: function (data) {
//             window.location.href = "/listUserAdmin";
//         },
//         error: function (xhr, status, err) {
//            console.log(err + 'Lỗi');
//         }
//     });
// });
