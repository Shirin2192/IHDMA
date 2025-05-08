$(document).ready(function () {
    $('.chosen-select').chosen({
        width: '100%',           // Optional: makes it responsive
        no_results_text: "No result matched: " // Optional
    });
});
$(document).ready(function () {
    $('#registerForm').on('submit', function (e) {
        e.preventDefault();
        $('.text-danger').text(''); // Clear previous error messages

        $.ajax({
            url: frontend + "website/submit_registration", 
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (response) {
                if (response.status === 'error') {
                    $.each(response.errors, function (field, message) {
                        $('#' + field + 'Error').html(message); // show message under each field
                    });
                } else {
                    alert(response.message);
                    $('#registerForm')[0].reset();
                }
            }
        });
    });
});

