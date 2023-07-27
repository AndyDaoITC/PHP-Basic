$(document).ready(function() {
    $('#add').click(function() {
        var a = $('#a').val();
        var b = $('#b').val();
        $.ajax({
            url: 'Lesson9.1_ajax.php',
            data: {
                'a': a,
                'b': b
            },
            method: 'POST',
            success: function(response) {
                var result = JSON.parse(response);
                if (result.status) {
                    var data = result.data;
                    $('#result').html(data);
                    $('#a').val('');
                    $('#b').val('');
                }
            }
        }); 
    });
});