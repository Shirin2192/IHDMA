<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>assets/images/logo/favicon.png">
    <title>Indian Hyperbaric and Diving Medicine Association</title>
    <meta name="description" content="">
    <?php include 'common/css_files.php'; ?>


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
                                        <option value="nursing">Nursing</option>
                                        <option value="doctor">Doctor</option>
                                        <option value="corporate">Corporate</option>
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
                            <!-- <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form-label">Organization<span class="required">*</span></label>
                                    <input class="form-control" name="rganization" id="organization" type="text">
                                </div>
                            </div> -->
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form-label">City<span class="required">*</span></label>
                                    <input class="form-control" name="city" id="city" type="text">
                                    <div class="text-danger" id="cityError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="state" class="form-label"> State<span class="required">*</span></label>
                                    <select class="form-control chosen-select" id="state" name="state">
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
                                    <div class="text-danger" id="stateError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="country" class="form-label"> Country<span
                                            class="required">*</span></label>
                                    <select class="form-control chosen-select" id="country" name="country">
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
                                    <div class="text-danger" id="countryError" style="font-size: 0.9em;"></div>
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
                            <div class="col-md-12 mt-4">
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
                            </div>
                        </div>
                    </div>

                    <div class="payment-info">
                        <div class="row">
                            <h6 class="text-left">Payment Information</h6>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form-label">Coupon</label>
                                    <input type="text" class="form-control" name="coupon" id="coupon">
                                    <div class="text-danger" id="couponError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>
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
                                        placeholder="$86.50">
                                </div>
                                <div class="text-danger" id="priceError" style="font-size: 0.9em;"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="paymentmethod">Payment Method<span class="required">*</span></label>
                                    </label>
                                    <div class="customRadio radiolabel mb-3 ">
                                        <input type="radio" name="paymentmethod" id="creditcard" value="Credit Card"
                                            class="occ">
                                        <label for="creditcard"> Credit Card </label>
                                        <input type="radio" name="paymentmethod" id="offlinepayment"
                                            value="Offline Payment" class="occ"> <label for="offlinepayment"> Offline
                                            Payment </label>
                                    </div>
                                    <div class="text-danger" id="paymentmethodError" style="font-size: 0.9em;"></div>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form-label">Credit Card Number<span class="required">*</span></label>
                                    <input type="text" class="form-control" name="cardnumber" id="cardnumber">
                                    <div class="text-danger" id="cardnumberError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="expiry">Card Expiry Date</label>
                                    <input type="text" class="form-control" id="expiry" name="expiry"
                                        placeholder="MM/YY" maxlength="5" pattern="(0[1-9]|1[0-2])\/[0-9]{2}">
                                    <div class="text-danger" id="expiryError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form-label">Card (CVV) Code<span class="required">*</span></label>
                                    <input type="text" class="form-control" name="cvvcode" id="cvvcode">
                                    <div class="text-danger" id="cvvcodeError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="form-label">Card Holder Name<span class="required">*</span></label>
                                    <input type="text" class="form-control" name="cardholdername" id="cardholdername">
                                    <div class="text-danger" id="cardholdernameError" style="font-size: 0.9em;"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="rts-btn btn-primary" type="submit">Submit <img
                            src="<?= base_url();?>assets/images/banner/icons/arrow--up-right.svg" alt=""></button>
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