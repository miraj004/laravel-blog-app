$(function () {
    $.ajax({
        type: 'GET',
        url: '/test',
        success: function (data) {
            $.each(data, function (i, item) {
                console.log(item);
            });
        }
    });
});
