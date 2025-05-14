<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/images/logo/favicon.png">
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
                    <h5 class="title mb-0">Join IHDMA
                    </h5>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->


    <!-- Join IHDMA section start -->
    <div class="join-ihdma-section rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="join-ihdma">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 border-end">
                            <div class="title-wrapper-center">
                                <span class="pre wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s">Register
                                    Online
                                </span>
                            </div>
                            <div class="d-flex align-items-center flex-column">
                                <a href="#" class="rts-btn btn-primary mt--20 mb--20">Click Here to Register as an
                                    Individual
                                    <img src="<?=base_url()?>assets/images/banner/icons/arrow--up-right.svg" alt="">
                                </a>
                                <a href="#" class="rts-btn btn-primary">Click Here to Register as a
                                    Corporation/Organization
                                    <img src="<?=base_url()?>assets/images/banner/icons/arrow--up-right.svg" alt="">
                                </a>
                            </div>


                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="title-wrapper-center">
                                <span class="pre wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s">Print/ Mail
                                </span>
                            </div>
                            <div class="d-flex align-items-center flex-column">
                                <a href="#" class="rts-btn btn-primary mb-4 mt-5">Click here to download the form in
                                    Word
                                    format
                                    <img src="<?=base_url()?>assets/images/banner/icons/arrow--up-right.svg" alt="">
                                </a>
                                <a href="#" class="rts-btn btn-primary">Click here to download the form in PDF format
                                    <img src="<?=base_url()?>assets/images/banner/icons/arrow--up-right.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- publcationsection end -->

    <!-- Individual membership section start -->
    <div class="individual-membership-section rts-section-gap bg-light">
        <div class="container">
            <div class="row">
                <div class="individual-membership-details">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="title-wrapper-center">
                                <span class="pre mb-5 wow fadeInUp" data-wow-delay=".2s"
                                    data-wow-duration=".8s">Categories</span>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".8s">
                                    <?= $individual_category['category_name']  ?>
                                </h2>
                                <p class="disc text-center wow fadeInUp mb-3" data-wow-delay=".6s"
                                    data-wow-duration=".8s">
                                    <?= $individual_category['description']  ?>
                                </p>
                                <!-- <p class="disc text-center wow fadeInUp mb-3" data-wow-delay=".8s"
                                    data-wow-duration=".8s">
                                    All Memberships receive online access to a pdf version of our IHDMA Journal. If you
                                    wish to order a Hard Copy of the UHM Journal (ADDITIONAL FEE), once registered and
                                    approved, you will need to log-in to the member site.
                                </p>
                                <p class="disc text-center wow fadeInUp mb-5" data-wow-delay="1s"
                                    data-wow-duration=".8s">
                                    As a member of the Society who lives anywhere, you will be linked with the Ihdma
                                    Chapter group within your region (Click here to see Chapter Map) to receive emails
                                    with news about your region. Each Chapter has its own webpage, where you can find
                                    information on the Chapter leadership and the next Chapter meeting, including the
                                    date/location/schedule/registration. We hope you will support your local chapter by
                                    attending their meeting.
                                </p> -->
                                <h4 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".8s">
                                    Membership is Available at the Following Levels (all fees are annual)
                                </h4>
                            </div>
                        </div>
                    </div>
                   
                    <div class="row g-75 mt--0">
                    <?php
                    foreach($membershiptype as $membershiptype_key => $membershiptype_row){
                        if($membershiptype_row['fk_category_id']==1){
                            $price = $membershiptype_row['price'];
                            if($price != 0){
                                $prices = $membershiptype_row['symbol'].' ' .$membershiptype_row['price'];
                            }else{
                                $prices = 'Free';
                            }
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".2s"
                            data-wow-duration=".8s">
                            <div class="single-pricing-area">
                                <div class="pricing-head">
                                    <h6 class="title"><?= $membershiptype_row['type_name'] ?></h6>
                                    <h3 class="price"><?= $prices ?></h3>
                                </div>
                                <div class="body">
                                    <div class="read-block">
                                        <p class="disc mb-0">
                                        <?= $membershiptype_row['full_description'] ?>
                                            <span class="dots"></span>
                                            <span class="more-text">                                            
                                            </span>
                                        </p>
                                        <span class="read-toggle">Read more</span>
                                    </div>
                                    <?php 
                                    $price = $membershiptype_row['price'];
                                    $symbol = $membershiptype_row['symbol'];
                                    $type_name = $membershiptype_row['type_name'];
                                    $data = [
                                        'price' => $price,
                                        'symbol' => $symbol,
                                        'type_name' => $type_name,
                                    ];
                                    $encodedData = urlencode(base64_encode(json_encode($data)));
                                    ?>
                                    <a href="<?= base_url() ?>website/register?price=<?= $encodedData ?>" class="rts-btn btn-primary">Join
                                        Now
                                        <img src="<?=base_url()?>assets/images/banner/icons/arrow--up-right.svg"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                        <?php } }?>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Individual membership section end -->


    <!-- Corporate membership section start -->
    <div class="corporate-membership-section rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="corporate-membership-details">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12">
                            <div class="title-wrapper-center">
                                <span class="pre mb-5 wow fadeInUp" data-wow-delay=".2s"
                                    data-wow-duration=".8s">Categories</span>
                                <h2 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".8s">
                                    Corporate Membership Categories
                                </h2>
                                <p class="disc text-center wow fadeInUp mb-5" data-wow-delay=".6s"
                                    data-wow-duration=".8s">
                                    <?= $corporate_category['description']  ?>
                                <h4 class="title wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".8s">
                                    Levels of Corporate Partnerships
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="row g-75 mt--0">
                    <?php
                    foreach($membershiptype as $membershiptype_key => $membershiptype_row){
                        if($membershiptype_row['fk_category_id']==2){
                            $price = $membershiptype_row['price'];
                            if($price != 0){
                                $prices = $membershiptype_row['symbol'].' ' .$membershiptype_row['price'];
                            }else{
                                $prices = 'Free';
                            }
                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".2s"
                            data-wow-duration=".8s">
                            <div class="single-pricing-area">
                                <div class="pricing-head">
                                    <h6 class="title"><?= $membershiptype_row['type_name'] ?></h6>
                                    <h3 class="price"><?= $prices ?></h3>
                                </div>
                                <div class="body">
                                    <div class="read-block">
                                        <p class="disc mb-0">
                                        <?= $membershiptype_row['full_description'] ?>
                                            <span class="dots"></span>
                                            <span class="more-text">                                            
                                            </span>
                                        </p>
                                        <span class="read-toggle">Read more</span>
                                    </div>
                                    <?php 
                                    $price = $membershiptype_row['price'];
                                    $symbol = $membershiptype_row['symbol'];
                                    $type_name = $membershiptype_row['type_name'];
                                    $data = [
                                        'price' => $price,
                                        'symbol' => $symbol,
                                        'type_name' => $type_name,
                                    ];
                                    $encodedData = urlencode(base64_encode(json_encode($data)));
                                    ?>
                                    <a href="<?= base_url() ?>website/register?price=<?= $encodedData ?>" class="rts-btn btn-primary">Join
                                        Now
                                        <img src="<?=base_url()?>assets/images/banner/icons/arrow--up-right.svg"
                                            alt=""></a>
                                </div>
                            </div>
                        </div>
                        <?php } }?>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Individual membership section end -->


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

</body>

</html>