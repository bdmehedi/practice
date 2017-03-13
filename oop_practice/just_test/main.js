$(document).ready(function () {

    $('#cal').on('submit', function () {

        var that = $(this),
            contents = that.serialize();

        $.ajax({

            url: 'test.php',
            dataType: 'json',
            data: contents,
            type: 'post',
            success: function (data) {

                if (data.success){
                    $('.result').text("The result is : " + data.result);
                }else {
                    $('.result').text("Opps! invalid inut.");
                }
            }
        });


        return false;
    });
});