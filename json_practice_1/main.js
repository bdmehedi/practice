/**
 * Created by mehedi on 12/20/16.
 */


$(document).ready(function () {
    $('#add').on('submit', function () {
        var that = $(this),
            contents = that.serialize();

        $.ajax({
            url: 'add.php',
            dataType: 'json',
            type: 'post',
            data: contents,
            success: function (data) {
                if (data.success){
                    // alert('The result is: ' + data.result);
                    $('h1').text('The result is: ' + data.result);
                }
            }
        });

        return false;
    });
});