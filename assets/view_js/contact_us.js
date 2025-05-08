$(document).ready(function() {
    $('.rts-btn').click(function(e) {
        e.preventDefault();

        // Clear previous errors
        $('.text-danger').remove();

        var formData = $('#contact_form').serialize();

        $.ajax({
            type: 'POST',
            url: frontend + 'website/submit_enquiry_form',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.status === false) {
                    // Display field-specific errors
                    $.each(response.errors, function(field, message) {
                        if (message) {
                            var inputName = field.replace('_error', '');
                            $('[name="' + inputName + '"]').after('<div class="text-danger">' + message + '</div>');
                        }
                    });
                } else {
                    alert(response.message); // Or use a modal/toast
                    $('#contact_form')[0].reset(); // Reset form
                }
            },
            error: function() {
                alert('Something went wrong. Please try again later.');
            }
        });
    });
});
