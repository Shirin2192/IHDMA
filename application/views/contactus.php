<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/images/logo/favicon.png">
    <title>Indian Hyperbaric and Diving Medicine Association</title>
    <meta name="description" content="">
    
    <link rel="stylesheet" href="<?= base_url()?>assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/plugins/magnifying-popup.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css"
        integrity="sha512-0nkKORjFgcyxv3HbE4rzFUlENUMNqic/EzDIeYCgsKa/nwqr2B91Vu/tNAu4Q0cBuG4Xe/D1f/freEci/7GDRA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= base_url()?>assets/css/style-new.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/custom-new.css">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-sV0xS8zO8W4UEgAmR4vD+M0AD+N7EAbDcyDKdROq5rV0Ujqz+U+2KqzK5MReo0gqErDPk0CQkXnxI7yD2c49cw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Header Start -->
    <?php include ('common/headernew.php'); ?>
    <!-- Header End -->


    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container ptb--40">
            <div class="row">
                <div class="breadcrumb-area-wrapper text-center align-items-center">
                    <h5 class="title mb-0">General Contact Information
                    </h5>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->


    <!-- contact us area start -->
    <div class="contat-section rts-section-gap">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-information-card">
                        <div class="icon">
                            <img src="<?= base_url()?>assets/images/contact/01.png" alt="icons">
                        </div>
                        <a href="#">
                            Mumbai
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-information-card">
                        <div class="icon">
                            <img src="<?= base_url()?>assets/images/contact/04.png" alt="icons">
                        </div>
                       <a href="mailto:info@ihdma.com">info@ihdma.com</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="single-contact-information-card">
                        <div class="icon">
                            <img src="<?= base_url()?>assets/images/contact/03.png" alt="icons">
                        </div>
                        <a href="#">
                            Mon-Fri: 09:00 AM – 11:00 PM <br>

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us area end -->





    <!-- google map area start -->
    <div class="google-map-area rts-section-gap bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="gogle-map-wrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15083.708544430945!2d72.87143155206306!3d19.06694096500408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1747655683526!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- google map area end -->


    <section class="login-section rts-section-gap2">
        <div class="container">
            <div class="login-box">
                <div class="login-content">
                    <h6 class="text-center">If you have any questions about the site, please feel free to contact us.
                    </h6>

                </div>
                <form id="contact_form">
                    <div class="account-info mb-5">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="fullname">Full Name<span class="required">*</span></label>
                                    <input class="form-control" name="fullname" id="fullname" type="text">
                                    <small class="text-danger" id="fullname_error"></small>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone">Phone Number<span class="required">*</span></label>
                                    <input class="form-control" name="phone" id="phone" maxlength="12" type="number">
                                    <small class="text-danger" id="phone_error"></small>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email<span class="required">*</span></label>
                                    <input class="form-control" name="email" id="email" type="email">
                                    <small class="text-danger" id="email_error"></small>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="address">Address<span class="required">*</span></label>
                                    <input class="form-control" name="address" id="address" type="text">
                                    <small class="text-danger" id="address_error"></small>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="city">City<span class="required">*</span></label>
                                    <input class="form-control" name="city" id="city" type="text">
                                    <small class="text-danger" id="city_error"></small>
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="stateSelect" class="form-label">State<span
                                            class="required">*</span></label>
                                    <select class="form-control" id="stateSelect" name="state">
                                        <option value="" disabled selected>Choose a state</option>
                                        <option value="AP">Andhra Pradesh</option>
                                        <option value="AR">Arunachal Pradesh</option>
                                        <option value="AS">Assam</option>
                                        <option value="BR">Bihar</option>
                                        <option value="CG">Chhattisgarh</option>
                                        <option value="GA">Goa</option>
                                        <option value="GJ">Gujarat</option>
                                        <option value="HR">Haryana</option>
                                        <option value="HP">Himachal Pradesh</option>
                                        <option value="JH">Jharkhand</option>
                                        <option value="KA">Karnataka</option>
                                        <option value="KL">Kerala</option>
                                        <option value="MP">Madhya Pradesh</option>
                                        <option value="MH">Maharashtra</option>
                                        <option value="MN">Manipur</option>
                                        <option value="ML">Meghalaya</option>
                                        <option value="MZ">Mizoram</option>
                                        <option value="NL">Nagaland</option>
                                        <option value="OD">Odisha</option>
                                        <option value="PB">Punjab</option>
                                        <option value="RJ">Rajasthan</option>
                                        <option value="SK">Sikkim</option>
                                        <option value="TN">Tamil Nadu</option>
                                        <option value="TS">Telangana</option>
                                        <option value="TR">Tripura</option>
                                        <option value="UP">Uttar Pradesh</option>
                                        <option value="UK">Uttarakhand</option>
                                        <option value="WB">West Bengal</option>
                                        <option value="AN">Andaman and Nicobar Islands</option>
                                        <option value="CH">Chandigarh</option>
                                        <option value="DN">Dadra and Nagar Haveli and Daman and Diu</option>
                                        <option value="DL">Delhi</option>
                                        <option value="JK">Jammu and Kashmir</option>
                                        <option value="LA">Ladakh</option>
                                        <option value="LD">Lakshadweep</option>
                                        <option value="PY">Puducherry</option>
                                    </select>
                                    <small class="text-danger" id="state_error"></small>
                                </div>
                            </div>

                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="countrySelect" class="form-label">Country<span
                                            class="required">*</span></label>
                                    <select class="form-control" id="countrySelect" name="country">
                                        <option value="" disabled selected>Choose a country</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AO">Angola</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BR">Brazil</option>
                                        <option value="CA">Canada</option>
                                        <option value="CN">China</option>
                                        <option value="CO">Colombia</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="EG">Egypt</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="DE">Germany</option>
                                        <option value="GR">Greece</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IT">Italy</option>
                                        <option value="JP">Japan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KR">South Korea</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MX">Mexico</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NO">Norway</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RU">Russia</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SG">Singapore</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TR">Turkey</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="VN">Vietnam</option>
                                    </select>
                                    <small class="text-danger" id="country_error"></small>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pincode">Pincode<span class="required">*</span></label>
                                    <input type="number" class="form-control" name="pincode" id="pincode" maxlength="6">
                                    <small class="text-danger" id="pincode_error"></small>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <label for="w3review">Message</label>
                                    <textarea id="w3review" name="w3review" rows="4" cols="50"
                                        class="form-control"></textarea>
                                    <small class="text-danger" id="w3review_error"></small>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="submit_button"><button type="submit" class="btn-transparent" id="submit_form_btn">
                        Submit <i class="fa-solid fa-arrow-right-long"></i>
                    </button></div>
                </form>

            </div>
        </div>
    </section>

    <!-- footer Start -->
    <?php include ('common/footer.php'); ?>
    <!-- footer End -->


    <!-- Mobile Header Start -->
    <?php include ('common/mobile-header.php'); ?>
    <!--Mobile  Header End -->


    <!-- progress area start -->
    <?php include ('common/progress-bar.php'); ?>
    <!-- progress area end -->

    <?php include('common/js_files.php');?>
    <script src="<?= base_url()?>assets/view_js/contact_us.js"></script>

</body>

</html>