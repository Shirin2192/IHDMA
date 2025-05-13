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
        <div class="modal-dialog modal-dialog-centered">
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

    <!-- Modal for Dr. Dhiraj Saxena -->
    <!-- <div class="modal fade teammember" id="teamMemberModal2" tabindex="-1" aria-labelledby="teamMemberModalLabel2"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="teamMemberModalLabel2">Dr. Dhiraj Saxena</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="mb-0">Dr Dhiraj Saxena is practicing Consultant Physician in Apollo Hospital Ahmedabad
                        since 15 years and has to his credit establishing the first Hyperbaric Oxygen Therapy unit in
                        Apollo Hospital, Ahmedabad in 2007 (The first HBOT center in Gujarat).</p>
                    <p>He has a keen interest in Hyperbaric medicine procedures and problem wound management. Over the
                        last 10 years he has helped in establishing New Hyperbaric Oxygen therapy centers in Banglore ,
                        Jaipur, Katni, Miraj , Ahmedabad and he has trained technicians in HBOT procedures. </p>
                </div>

            </div>
        </div>
    </div> -->

    <!-- Modal for Dr. Narayanamurthy -->
    <!-- <div class="modal fade teammember" id="teamMemberModal3" tabindex="-1" aria-labelledby="teamMemberModalLabel3"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="teamMemberModalLabel3">Dr. Narayanamurthy</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Quisque faucibus ex sapien vitae
                        pellentesque sem placerat. In id cursus mi pretium tellus duis convallis. Tempus leo eu aenean
                        sed diam urna tempor. Pulvinar vivamus fringilla lacus nec metus bibendum egestas.</p>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Modal for Dr. Manoj Gupta -->
    <!-- <div class="modal fade teammember" id="teamMemberModal4" tabindex="-1" aria-labelledby="teamMemberModalLabel4"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="teamMemberModalLabel4">Dr. Manoj Gupta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                    <p>Dr. Manoj Gupta is a pioneering figure in hyperbaric medicine, with extensive expertise in wound
                        care, diving medicine, and advanced oxygen therapy. As the Director of Prana Hyperbaric Oxygen
                        Therapy Centre and a leader in the field, he has played a significant role in bringing HBOT to
                        the forefront of modern wellness and regenerative medicine.</p>
                    <h5 class="mb-3">Qualifications & Expertise</h5>
                    <ul>
                        <li>PhD Scholar in Public Health</li>
                        <li>MBBS, MD, DNB, LLB, PGDHA</li>
                        <li>Certificate of Added Qualification (CAQ) in Hyperbaric Medicine (UHMS, USA)</li>
                        <li>B.Sc. Hons. (Hyperbaric Medicine), Stellenbosch University, South Africa</li>
                        <li>Certified Hyperbaric Specialist – American Board of Wound Healing</li>
                        <li>Fellow of the American Professional Wound Care Association</li>
                        <li>Level I Medical Examiner of Divers (DMAC/EDTC, UK)</li>
                        <li>Faculty at HBOT Academy, recognized by Maharashtra University of Health Sciences</li>
                        <li>Director & Founder President of the Indian Hyperbaric and Diving Medicine Association</li>
                    </ul>
                    <h5 class="mb-3">Publications & Contributions</h5>
                    <p>Dr. Gupta has authored multiple research papers and textbooks on hyperbaric oxygen therapy,
                        including "Hyperbaric Oxygen Therapy: Principles and Applications" and several journal articles
                        on HBOT’s role in wound care, regenerative medicine, and neurology. He has also presented at
                        prestigious medical conferences and trained doctors globally in hyperbaric medicine.
                    </p>

                    <h5 class="mb-3">Vision for HBOT</h5>
                    <p>Dr. Gupta believes that hyperbaric oxygen therapy is the future of medicine and wellness,
                        offering unparalleled benefits in cellular regeneration, cognitive enhancement, and healing.
                        With its potential to revolutionize recovery, performance, and longevity, HBOT is at the
                        forefront of non-invasive, science-backed healthcare solutions.
                    </p>
                </div>

            </div>
        </div>
    </div>
     -->
    



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
        modal.querySelector('#member_description').textContent = description;

        // Optionally add more:
        // modal.querySelector('.modal-body').innerHTML += `<img src="${photo}" class="img-fluid mb-2"/>`;

        // You can also update social icons dynamically here if needed
    });
});
</script>

</body>
</html>