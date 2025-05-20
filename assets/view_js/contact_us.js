$(document).ready(function () {
    $('.chosen-select').chosen({
        width: '100%',           // Optional: makes it responsive
        no_results_text: "No result matched: " // Optional
    });
});
$(document).ready(function() {
     $('#contact_form').on('submit', function (e) {
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
                 if (response.status === 'error') {
                   $.each(response.errors, function (field, message) {
                        let errorId = '#' + field + '_error';
                        if ($(errorId).length === 0) {
                            $('#' + field).after('<div class="text-danger" id="' + field + '_error">' + message + '</div>');
                        } else {
                            $(errorId).html(message);
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
$('#country').change(function () {
  var countryId = $(this).val();

  if (countryId !== '') {
    $.ajax({
      url: frontend + "website/get_states", // Make sure `frontend` is defined somewhere
      type: 'POST',
      data: { country_id: countryId },
      dataType: 'json',
      success: function (response) {
        var html ='';
        $('#state').empty().append('<option value="">Select State</option>');
       
          $.each(response.states, function (index, state) {
            console.log(state.id);
           html += '<option value="' + state.id + '">' + state.name + '</option>';
          });

          $('#state').html(html);
          $(".chosen-select").chosen({ width: "100%" }).trigger("chosen:updated");
      },
      error: function () {
        $('#state').html('<option value="">Select State</option>');
        console.error("Failed to fetch states");
      }
    });
  } else {
    $('#state').html('<option value="">Select State</option>');
  }
});