var API = "https://api.mlab.com/api/1/databases/storephone/collections/user?apiKey=bwNYaefhPGW4uN-jmu-pBF-gzp7FiG4M";
var API2 = "http://heroku-laravel-1900.herokuapp.com/api/user";

$(document).ready(function () {
    getAPIdemo();
    $('body').on('click', '#deleteUser', function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        var API2 = 'https://api.mlab.com/api/1/databases/storephone/collections/user/'+ id +'?apiKey=bwNYaefhPGW4uN-jmu-pBF-gzp7FiG4M';

        $.ajax({
            url:API2,
            type : "DELETE",
            async: true,
            timeout: 30000,
            success: function (data) {
                window.location.href = "/listUserAdmin";
            },
            error: function (xhr, status, err) {
                console.log(err + 'Lỗi');
            }
        });
    });
});

function getApi() {
    $.ajax({
        method: 'get',
        //url: 'http://127.0.0.1:8000/api/user',
        //url: 'http://heroku-laravel-1900.herokuapp.com/api/user',
        url: 'http://quiet-cliffs-41062.herokuapp.com/api/user',
        //url: 'https://quiet-cliffs-41062.herokuapp.com/api/products',
        data: {
            '_token': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function (data) {
        var output = '';
        $.each(data, function (key, data) {
            console.log(data);
                output += '<tr>';
                output += '<td></td>';
                output += '<th class="col-md-2">'+
                        '<div class="card" style="background-image: url('+data.avatar+'); background-size: cover; width: 60px; height: 60px;">'+
                        '</div>' + '</th>' ;
                output += '<td>'+data.fullname +'</td>';
                output += '<td>'+data.phone +'</td>';
                output += '<td>'+data.password +'</td>';
                output += '<td>'+data.email +'</td>';
                output += '<td>'+data.gender +'</td>';
                output += '</tr>';
        });
        // in vào List User
        $('#demo-get').html(output);
    });
}


function getAPIdemo() {
    var url = 'http://127.0.0.1:8000/api/user';
    var url1 = 'http://quiet-cliffs-41062.herokuapp.com/api/user';
    $.ajax({
       url: url1,
       type:'GET',
       contentType: "applycation/json; charset=utf-8",
        async: false,
        dataType : 'json',
        success: function (data, status, jqXHR) {
            console.log(data)
        }
    }).done(function () {
        console.log('ok')
        }).fail(function () {
            console.log(error())
        }).always(function () {
            console.log(error())
        });
}
