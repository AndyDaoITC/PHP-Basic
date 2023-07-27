$(document).ready(function() {
    $('#myBtn').click(function() {
        var fullName = $('#fullName').val();
        $.ajax({
            url: 'Lesson8_ajax.php',
            data: {
                'fullName': fullName
            },
            method: 'POST',
            success: function(response) {
                var result = JSON.parse(response);
                if (result.status) {
                    var data = result.data;
                    $('#result').html(data);
                    $('#fullName').val('');
                }
            }
        }); 
    });
});