<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/images/logo/favicon.png">
    <title>Indian Hyperbaric and Diving Medicine Association</title>
    <meta name="description" content="">
    
   <?php include ('common/css_files.php'); ?>
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
                                    <div class="text-danger" id="fullname_error"></div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone">Phone Number<span class="required">*</span></label>
                                    <input class="form-control" name="phone" id="phone" maxlength="12" type="number">
                                    <div class="text-danger" id="phone_error"></div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email<span class="required">*</span></label>
                                    <input class="form-control" name="email" id="email" type="email">
                                    <div class="text-danger" id="email_error"></div>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="address">Address<span class="required">*</span></label>
                                    <input class="form-control" name="address" id="address" type="text">
                                    <div class="text-danger" id="address_error"></div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="countrySelect" class="form-label">Country<span
                                            class="required">*</span></label>
                                    <select class="form-control chosen-select" id="country" name="country" data-placeholder="Select Country">
                                        <option value=""></option>
                                        <?php
                                            foreach($countries as $countries_key => $countries_row) {
                                        ?>
                                        <option value="<?= $countries_row['id']?>"><?= $countries_row['name'] ?></option>
                                        <?php }?>
                                    </select>
                                    <div class="text-danger" id="country_error"></div>
                                </div>
                            </div>                           
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="stateSelect" class="form-label">State<span
                                            class="required">*</span></label>
                                    <select class="form-control chosen-select" id="state" name="state" data-placeholder="Select State">
                                        
                                    </select>
                                    <div class="text-danger" id="state_error"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="city">City<span class="required">*</span></label>
                                    <input class="form-control" name="city" id="city" type="text">
                                    <div class="text-danger" id="city_error"></div>
                                </div>
                            </div>    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="pincode">Pincode<span class="required">*</span></label>
                                    <input type="number" class="form-control" name="pincode" id="pincode" maxlength="6">
                                    <div class="text-danger" id="pincode_error"></div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group mb-0">
                                    <label for="w3review">Message</label>
                                    <textarea id="w3review" name="w3review" rows="4" cols="50"
                                        class="form-control"></textarea>
                                    <div class="text-danger" id="w3review_error"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="submit_button"><button type="submit" class="rts-btn btn-primary btn-transparent" id="submit_form_btn">
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