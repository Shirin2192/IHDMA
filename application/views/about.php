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
                    <h5 class="title mb-0">About the IHDMA
                    </h5>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->


    <!-- aboutus area start -->
    <div class="aboutus-section rts-section-gap2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="aboutus-details">
                        <p class="mb--30">
                           <?= $about['about_us']?>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- aboutus area end -->


    <!-- Objective area start -->
    <div class="objective-section rts-section-gap2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="title-wrapper-left">
                        <span class="pre wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s">Objectives</span>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">
                    <div class="objective-area">
                       <?= $objectives['objectives'] ?> 
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Objective area end -->



    <!-- team member section start -->
    <div class="team-section rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="team-style-wrapper">
                    <div class="title-between-areas">
                        <div class="title-wrapper-left">
                            <span class="pre wow fadeInUp" data-wow-delay=".2s" data-wow-duration=".8s">Meet
                                Our Team</span>
                            <h2 class="title mb-0 wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".8s">
                                Discover Expert <br> Team Member
                            </h2>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".8s">
                            Emphasize the pride the IHDMA takes in being a leading source of knowledge
                            and expertise in the field.
                        </p>
                    </div>
                    <div class="row mt--40 mb--40">
                        <?php
                        $base_path = 'http://localhost/idhma_admin/';
                        foreach($team_members as $team_members_row){ 
                         ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 fadeInLeft wow" data-wow-duration="1s"
                            data-wow-delay=".1s">
                            <div class="single-team-area-start team-absolute-bottom" data-bs-toggle="modal"
                                data-bs-target="#teamMemberModal1"
                                 data-name="<?= htmlspecialchars($team_members_row['name']) ?>"
                                data-designation="<?= htmlspecialchars($team_members_row['designation']) ?>"
                                data-description="<?= htmlspecialchars($team_members_row['description']) ?>"
                                data-photo="<?= $base_path . $team_members_row['photo'] ?>"
                                data-facebook="<?= $team_members_row['facebook_link'] ?>"
                                data-linkedin="<?= $team_members_row['linkedin_link'] ?>"
                                data-twitter="<?= $team_members_row['twitter_link'] ?>"
                                data-youtube="<?= $team_members_row['youtube_link'] ?>">
                                <img src="<?= $base_path.$team_members_row['photo'] ?>" alt="team">
                                <div class="bottom">
                                    <div class="social-area-tranaparent">
                                        <ul>
                                           
                                            <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            
                                        </ul>
                                    </div>
                                    <h6 class="title"><?= $team_members_row['name']?></h6>
                                    <p class="mb-0"><?= $team_members_row['designation']?></p>
                                </div>
                            </div>
                        </div>
                        <?php }?>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- team member section end -->

    <!-- Modal for Dr. Himanshu Agarwal -->
    <div class="modal fade teammember" id="teamMemberModal1" tabindex="-1" aria-labelledby="teamMemberModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title member_name" id="teamMemberModalLabel1"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">                  
                    <p class="mb-0" id="member_description"></p>
                </div>
            </div>
        </div>
    </div>



    <!-- footer Start -->
     <?php include('common/footer.php');?>
    <!-- footer End -->


    <!-- Mobile Header Start -->
    <?php include ('common/mobile-header.php'); ?>
    <!--Mobile  Header End -->


    <!-- progress area start -->
    <?php include ('common/progress-bar.php'); ?>
    <!-- progress area end -->
    <?php include('common/js_files.php');?>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('teamMemberModal1');
        
    modal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget;

        // Get data attributes from clicked team card
        const name = button.getAttribute('data-name');
        const designation = button.getAttribute('data-designation');
        const description = button.getAttribute('data-description');
        const photo = button.getAttribute('data-photo');
        const linkedin = button.getAttribute('data-linkedin');
        const facebook = button.getAttribute('data-facebook');
        const twitter = button.getAttribute('data-twitter');
        const youtube = button.getAttribute('data-youtube');

        // Set modal content
        modal.querySelector('.member_name').textContent = name;
        modal.querySelector('#member_description').innerHTML = description;


        // Optionally add more:
        // modal.querySelector('.modal-body').innerHTML += `<img src="${photo}" class="img-fluid mb-2"/>`;

        // You can also update social icons dynamically here if needed
    });
});
</script>

</body>
</html>