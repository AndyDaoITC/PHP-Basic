$(document).ready(function() {
    $('#factor').click(function() {
        var n = $('#n').val();
        $.ajax({
            url: 'Lesson9.3_ajax.php',
            data: {
                'n': n
            },
            method: 'POST',
            success: function(response) {
                var result = JSON.parse(response);
                if (result.status) {
                    var data = result.data;
                    $('#result').html(data);
                    $('#n').val('');
                }
            }
        }); 
    });
});