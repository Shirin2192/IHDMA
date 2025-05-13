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
    <?php include ('common/header.php'); ?>
    <!-- Header End -->

    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container ptb--40">
            <div class="row">
                <div class="breadcrumb-area-wrapper text-center align-items-center">
                    <h5 class="title mb-0">Member Benefits/Activities of the IHDMA
                    </h5>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->


    <!-- benefits-section area start -->
    <div class="benefits-section rts-section-gap2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-6">
                    <div class="title-wrapper-left">
                        <span class="pre wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s"><?= $benefits['title_benefits'] ?></span>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">
                    <div class="benefits-area">
                        <?= $benefits['benefits']?>                          
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-card">
                        <div class="single-card-details">
                            <div class="top">
                                <h5 class="title">Are you interested in joining ?</h5>
                                <a href="<?= base_url()?>website/join_ihdma" class="rts-btn btn-primary btn-border">Become a member today</a>
                            </div>                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- benefits-section end -->
    <!-- activities-section area start -->
    <div class="activities-section rts-section-gap2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="title-wrapper-left">
                        <span class="pre wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s">Activities of the IHDMA</span>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">
                    <div class="activities-area">
                        <?= $benefits['activities']?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Objective area end -->


    <!-- footer Start -->
    <?php include ('common/footer.php'); ?>
    <!-- footer End -->


    <!-- Mobile Header Start -->
    <?php include ('common/mobile-header.php'); ?>
    <!--Mobile  Header End -->


    <!-- progress area start -->
    <?php include ('common/progress-bar.php'); ?>
    <!-- progress area end -->



    <?php include ('common/js_files.php'); ?>
</body>

</html>