$(document).ready(function(){
    $("#loginForm").submit(function(event){
        event.preventDefault(); // Prevent default form submission
        $.ajax({
            url: frontend + "website/login_user", 
            type: "POST",
            data: $(this).serialize(),
            dataType: "json",
            success: function(response) {
                $(".text-danger").html(""); // Clear all error messages
                $("#login_error").addClass("d-none"); // Hide general error

                if (response.status == "error") {
                    if (response.email_error) {
                        $("#email_error").html(response.email_error);
                    }
                    if (response.password_error) {
                        $("#password_error").html(response.password_error);
                    }
                    if (response.login_error) {
                        $("#login_error").removeClass("d-none").html(response.login_error);
                    }
                } else if (response.status == "success") {
                    window.location.href = response.url; // Fixed: match PHP response
                }
            }
        });
    });
});
