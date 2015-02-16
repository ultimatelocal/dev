$(document).ready(function() {
    $('#submitBtn').click(function() {
        var email = $('#email').val();
        getUser(email);
    });
});
function getUser(email) {
    $.ajax({
        url: "user/get_user",
        data: {email: email},
        type: "POST",
        dataType: 'json',
        success: function(data) {
            if (data.error) {
                alert(data.error);
            } else {
                $('#welcome').html("Your password is: " + data.password);
            }
        }
    });
}