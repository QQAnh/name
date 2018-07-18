var URL_MLAB = 'https://api.mlab.com/api/1/databases/assignment-phone/collections/product-phone?apiKey=K4mVgyqjIRMy6RUEf3uAVIl-jUE1qKgY';

$(document).ready(function () {
    $('#add-product').on('submit',function (e) {
       e.preventDefault();
       var name =$('#name').val();
       var phone = $('#phone').val();
       $.ajax({
           url: URL_MLAB,
           data : JSON.stringify({
               "name" :name,
               "phone":phone,
           }),
           type : "POST",
           contentType: "application/json",
           success: function (data) {
               console.log('Thành Công');
           },
           error: function (xhr, status,err) {
               console.log(err);
           }
       });

    });
});