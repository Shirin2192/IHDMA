<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>assets/images/logo/favicon.png">
    <title>Indian Hyperbaric and Diving Medicine Association</title>
    <meta name="description" content="">
    <?php include ('common/css_files.php'); ?>


</head>

<body>


    <!-- Header Start -->
    <?php include ('common/header.php'); ?>
    <!-- Header End -->


    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container ptb--40">
            <div class="row">
                <div class="breadcrumb-area-wrapper text-center align-items-center">
                    <h5 class="title mb-0">User Registration
                    </h5>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <section class="login-section rts-section-gap2">
        <div class="container">
            <div class="login-box">
                <h4>
                    <?= $type_name ?>
                </h4>
                <p>Please enter the information below to purchase your
                    <?= $type_name ?>. The price you will need to pay is
                    <?= $symbol ?>
                    <?= $price ?>.
                </p>
                <div class="login-content">
                    <h6 class="text-center">Please enter your details</h6>

                </div>
                <form id="registerForm" class="mt-5">
                    <div class="account-info mb-5">
                        <div class="row">
                            <h6 class="text-left">Account Information</h6>
                            <div class="col-md-4">
                                <input type="hidden" id="razorpay_payment_id" name="razorpay_payment_id">
                                <input type="hidden" id="razorpay_order_id" name="razorpay_order_id">
                                <input type="hidden" id="razorpay_signature" name="razorpay_signature">
                                <div class="form-group">
                                    <label for="membershiptype">Membership Type<span class="required">*</span></label>
                                    <select class="form-control chosen-select" id="membershiptype" name="membershiptype"
                                        data-placeholer="Select Membership Type">
                                        
                                        <option value=""></option>
                                        <?php foreach ($membership_type as $membership_type_row) { ?>
                                            <option value="<?= $membership_type_row['id'] ?>" 
                                                <?= ($membership_type_row['type_name'] == $type_name) ? 'selected' : '' ?>>
                                                <?= $membership_type_row['type_name'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                    <div class="text-danger" id="membershiptypeError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form-label">Username<span class="required">*</span></label>
                                    <input class="form-control" name="username" id="username" type="text">
                                    <div class="text-danger" id="usernameError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form-label">Password<span class="required">*</span></label>
                                    <input class="form-control" name="password" id="password" type="text">
                                    <div class="text-danger" id="passwordError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form-label">Full Name<span class="required">*</span></label>
                                    <input class="form-control" name="fullname" id="fullname" type="text">
                                    <div class="text-danger" id="fullnameError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form-label">Phone Number<span class="required">*</span></label>
                                    <input class="form-control" name="phone" id="phone" maxlength="12" type="number">
                                    <div class="text-danger" id="phoneError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form-label">Email<span class="required">*</span></label>
                                    <input class="form-control" name="email" id="email" type="email">
                                    <div class="text-danger" id="emailError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="form-label">Address<span class="required">*</span></label>
                                    <input class="form-control" name="address" id="address" type="text">
                                    <div class="text-danger" id="addressError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>
                            
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="country" class="form-label"> Country<span
                                            class="required">*</span></label>
                                    <select class="form-control chosen-select" id="country" name="country">
                                        <option value="" disabled selected>Choose a country</option>
                                        <?php
                                            foreach($countries as $countries_key => $countries_row) {
                                        ?>
                                        <option value="<?= $countries_row['id']?>"><?= $countries_row['name'] ?></option>
                                        <?php }?>
                                    </select>
                                    <div class="text-danger" id="countryError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="state" class="form-label"> State<span class="required">*</span></label>
                                    <select class="form-control chosen-select" id="state" name="state" data-placeholer="Select State">
                                        <option value="" ></option>                                         
                                    </select>
                                    <div class="text-danger" id="stateError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>          
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form-label">City<span class="required">*</span></label>
                                    <input class="form-control" name="city" id="city" type="text">
                                    <div class="text-danger" id="cityError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>                  
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form-label">Pincode<span class="required">*</span></label>
                                    <input type="number" class="form-control" name="pincode" id="pincode" maxlength="6">
                                    <div class="text-danger" id="pincodeError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>
                            <div class="infoswitch">
                                <label class="infolabel" for="DefectiveVision">Did a current Associate member refer you
                                    to
                                    our Society?</label>
                                <div class="switch-field">
                                    <input type="radio" class="radio-changer policyactive" id="DefectiveVisionYes1"
                                        name="DefectiveVision" value="Yes">
                                    <label for="DefectiveVisionYes1">Yes</label>
                                    <input type="radio" class="radio-changer policyinactive" id="DefectiveVisionNo1"
                                        name="DefectiveVision" value="No" checked="">
                                    <label for="DefectiveVisionNo1">No</label>
                                </div>
                              

                            </div>
                            <div class="col-md-12">
                                  <div class="mt-4" id="referrerNameField" style="display: none;">
                                    <input type="text" class="form-control" placeholder="Enter referring member's name">
                                </div>
                            </div>
                            <!-- <div class="col-md-12 mt-4">
                                <div class="infoswitch">
                                    <label class="infolabel" for="DefectiveVision"> Contribute to the multicenter for
                                        hyperbaric oxygen therapy registry
                                    </label>
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" id="checkbox1">
                                        <label class="form-check-label ms-2" for="checkbox1">Yes
                                        </label>
                                    </div>

                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="checkbox" id="checkbox2">
                                        <label class="form-check-label ms-2" for="checkbox2"> No</label>
                                    </div>

                                </div>
                            </div> -->
                        </div>
                    </div>

                    <div class="payment-info">
                        <div class="row">
                            <h6 class="text-left">Payment Information</h6>
                            <!-- <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form-label">Coupon</label>
                                    <input type="text" class="form-control" name="coupon" id="coupon">
                                    <div class="text-danger" id="couponError" style="font-size: 0.9em;"></div>
                                </div>
                            </div> -->
                            <!-- <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form-label">Payment Terms
                                    </label>
                                    <input type="text" class="form-control" name="coupon" id="coupon" disabled
                                        placeholder="$86.50 for each Year">
                                </div>
                            </div> -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form-label">Price
                                    </label>
                                    <input class="form-control" type="text" name="price" id="price" readonly
                                        placeholder="<?= $symbol ?><?= $price ?>" value="<?= $price?>">
                                </div>
                                <div class="text-danger" id="priceError" style="font-size: 0.9em;"></div>
                            </div>
                        </div>
                    </div>
                   <div class="submit_button"><button class="rts-btn btn-primary btn-transparent" type="submit">Pay Now<i class="fa-solid fa-arrow-right-long"></i></button></div>
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
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script src="<?= base_url();?>assets/view_js/register.js"></script>

</body>

</html>