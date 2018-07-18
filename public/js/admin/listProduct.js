$(document).ready(function () {
    getAPIdemo();
});



function getAPIdemo() {
    var url = 'http://127.0.0.1:8000/api/user';
    $.ajax({
        url: url,
        method: 'get',
        data: {
            '_token': $('meta[name="csrf-token"]').attr('content')
        }
    }).done(function (data) {
        $.each(data, function (key, data) {
            console.log(data);
        });
    });
}