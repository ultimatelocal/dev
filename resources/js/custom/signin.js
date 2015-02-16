$(document).ready(function() {
    
    $('#loginbtn').click(function() {
        var username = $('#username').val();
        var password = $('#password').val();
        
        if(username==""){
            $('#username').focus();
            alert("Please enter your Username");
        }
        else if(password=="") {
            $('#password').focus();
            alert("Please enter your Password");
        }
        else {
            getUser(username,password);
        }
    });
});

    function getUser(username,password) {
        $.ajax({
            url: "user/get_user",
            data: {username: username,
                   password: password},
            type: "POST",
            dataType: 'json',
            success: function(data) {
                if (data.error) {
//                    alert(data.error);
                    $('.mar-btm').addClass('alert alert-danger fade in');
                    $('.mar-btm em').text(data.error);
                } else {
//                      alert(data.system_id);
//                    $('.mar-btm em').append("System ID: " + data.system_id);
                       location.reload();
                }
            }
        });
    }