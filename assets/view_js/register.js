$(document).ready(function () {
    $('.chosen-select').chosen({
        width: '100%',           // Optional: makes it responsive
        no_results_text: "No result matched: " // Optional
    });
});
$(document).ready(function () {
    $('#registerForm').on('submit', function (e) {
        e.preventDefault();
        $('.text-danger').text('');

        // First, make AJAX call to generate Razorpay order_id
        $.ajax({
            url: frontend + "website/create_order", // You must create this backend method
            method: 'POST',
            data: $('#registerForm').serialize(),
            dataType: 'json',
            success: function (orderData) {
                if (orderData.status === 'error') {
                    alert(orderData.message || 'Error creating order.');
                    return;
                }
                const options = {
                    key: orderData.key_id, // Razorpay Key ID from backend
                    amount: orderData.amount, // in paise
                    currency: "INR",
                    name: "IHDMA",
                    description: "Membership Registration",
                    order_id: orderData.order_id,
                    handler: function (response) {
                        // Append Razorpay fields to the form
                        $('<input>').attr({
                            type: 'hidden',
                            name: 'razorpay_payment_id',
                            value: response.razorpay_payment_id
                        }).appendTo('#registerForm');
                        $('<input>').attr({
                            type: 'hidden',
                            name: 'razorpay_order_id',
                            value: response.razorpay_order_id
                        }).appendTo('#registerForm');
                        $('<input>').attr({
                            type: 'hidden',
                            name: 'razorpay_signature',
                            value: response.razorpay_signature
                        }).appendTo('#registerForm');

                        // Now submit registration with payment verification
                        $.ajax({
                            url: frontend + "website/submit_registration",
                            method: 'POST',
                            data: $('#registerForm').serialize(),
                            dataType: 'json',
                            success: function (response) {
                                if (response.status === 'error') {
                                    $.each(response.errors, function (field, message) {
                                        $('#' + field + 'Error').html(message);
                                    });
                                } else {
                                    alert(response.message);
                                    $('#registerForm')[0].reset();
                                }
                            }
                        });
                    },
                    prefill: {
                        name: $('#fullname').val(),
                        email: $('#email').val(),
                        contact: $('#phone').val()
                    },
                    theme: {
                        color: "#3399cc"
                    }
                };

                const rzp = new Razorpay(options);
                rzp.open();
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

$('#membershiptype').change(function(){
    var id = $(this).val();

  if (id !== '') {
        $.ajax({
        url: frontend + "website/get_price_from_membershiptype", // Make sure `frontend` is defined somewhere
        type: 'POST',
        data: { id: id },
        dataType: 'json',
        success: function (response) {
                $('#price').val(response['price'].price)
        }
        });
    }
});