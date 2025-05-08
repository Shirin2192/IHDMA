 <?php 
 $user_session = $this->session->userdata('user_session');

 $user_id = $user_session['user_id'];
 $user_name = $user_session['user_name'];
 $user_email = $user_session['email'];


 ?>
 <!-- header area start -->
 <header class="header-one style-two header--sticky">
     <div class="header-top-area-2">
         <div class="container">
             <div class="header-top-two">
                 <div class="logo w-25">
                     <a href="index.php" class="logo">
                         <img src="<?= base_url()?>assets/images/logo/logo.png" class="" alt="logo_area">
                     </a>
                 </div>
                 <div class="rightarea">
                     <div class="single-contact-area">
                         <div class="header-wrapper-1">
                             <div class="header-right">
                                 <div class="input-area">
                                     <input id="myInput" type="text" placeholder="Search...">
                                     <i class="fa-light fa-magnifying-glass"></i>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="single-contact-area">
                         <i class="fa-light fa-location-dot"></i>
                         <div class="information">
                             <span>Mumbai, India</span>
                         </div>
                     </div>
                     <div class="single-contact-area">
                         <i class="fa-regular fa-clock"></i>
                         <div class="information">
                             <span>Monday - Friday <br> 09:00 - 11:00</span>
                         </div>
                     </div>
                     <div class="single-contact-area">
                         <i class="fa-light fa-phone"></i>
                         <div class="information">
                             <span>Contact No: <br><a href="tel:+919930729923"> +919930729923 </a> </span>
                         </div>
                     </div>
                     <div class="menu-btn" id="menu-btn">
                         <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                             <rect y="14" width="20" height="2" fill="#1F1F25"></rect>
                             <rect y="7" width="20" height="2" fill="#1F1F25"></rect>
                             <rect width="20" height="2" fill="#1F1F25"></rect>
                         </svg>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="header-wrapper-1">
                     <div class="logo-area-start">
                         <div class="nav-area">
                             <ul class="">
                                 <li class="main-nav"><a href="<?=base_url();?>">Home</a></li>
                                 <li class="main-nav"><a href="<?=base_url();?>website/about">About Us</a></li>
                                 <li class="main-nav"><a href="#">HBOT Regulations for India</a></li>
                                 <li class="main-nav has-dropdown"><a href="#">Facility Accreditation</a>
                                     <ul class="submenu parent-nav">
                                         <li><a href="#">Accreditation Support System</a></li>
                                     </ul>
                                 </li>
                                 <li class="main-nav has-dropdown"><a href="#">Memberships</a>
                                     <ul class="submenu parent-nav">
                                         <li><a href="<?= base_url()?>website/benefits_of_membership">Benefits of
                                                 Membership</a></li>
                                         <li><a href="<?=base_url()?>website/join_ihdma">Join IHDMA</a></li>
                                         <li><a href="#">Fellow of Undersea & Hyperbaric Medicine</a></li>
                                     </ul>
                                 </li>
                                 <li class="main-nav has-dropdown"><a href="#">Education</a>
                                     <ul class="submenu parent-nav">
                                         <li><a href="#">Annual Scientific Meetings</a></li>
                                         <li><a href="#">Directly Provided Courses</a>

                                         </li>
                                     </ul>
                                 </li>
                                 <li class="main-nav has-dropdown"><a href="#">Publications</a>
                                     <ul class="submenu parent-nav">
                                         <li><a href="#">IHDMA Journals</a></li>
                                         <li><a href="#">Case Reports</a>
                                         </li>
                                     </ul>
                                 </li>
                                 <li class="main-nav has-dropdown"><a href="#">Resources</a>
                                     <ul class="submenu parent-nav">
                                         <li><a href="#">Position Statement</a></li>
                                         <li><a href="#">Chamber Directory</a></li>
                                         <li><a href="#">HBO Indication</a></li>
                                         <li><a href="#">Links</a></li>
                                         <li><a href="#">Multicenter Registry For Hyperbaric Oxygen Therapy</a></li>
                                         <li><a href="#">News & Announcements</a></li>





                                     </ul>

                                 </li>
                                 <li class="main-nav"><a href="<?= base_url()?>website/contact_us">Contact</a></li>
                             </ul>
                         </div>
                     </div>

                     <div class="header-right">
                         <?php if(!empty($user_id)) { ?>
                         <div class="header-right-user">
                            
                         </div>
                         <?php }else{?>
                         <div class="header-right-user">
                             <button type="button" class="user-icon" data-bs-toggle="modal" data-bs-target="#authModal">
                                 <i class="fa-solid fa-user"></i>
                             </button>
                         </div>
                         <?php }?>

                         <!-- <div class="input-area">
                                <input id="myInput" type="text" placeholder="Search...">
                                <i class="fa-light fa-magnifying-glass"></i>
                            </div> -->
                     </div>
                 </div>
             </div>
         </div>
     </div>


 </header>
 <div class="modal fade userform p-0" id="authModal" tabindex="-1" aria-labelledby="authModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header border-0 pt-0 pb-0">
                 <h6 class="modal-title" id="authTabs">User Login</h6>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <?php if(!empty($user_id)) { ?>

             <?php }else{?>
             <div class="modal-body">
                 <form id="loginForm" class="mt-5">
                     <div class="form-group">
                         <span class="input-icon"><i class="fa fa-user"></i></span>
                         <input type="email" class="form-control" placeholder="Enter Email" name="email">
                         <div class="text-danger" id="email_error" style="font-size: 0.9em;"></div>
                     </div>
                     <div class="form-group">
                         <span class="input-icon"><i class="fas fa-key"></i></span>
                         <input type="password" class="form-control" placeholder="Password" name="password">
                         <div class="text-danger" id="password_error" style="font-size: 0.9em;"></div>
                     </div>
                     <div class="form-group text-danger" id="login_error" style="font-size: 0.9em;"></div>
                     <button class="login-btn" type="submit">Login</button>
                 </form>
                 <div class="remember-forgot mt-3">
                     <label class="remember">
                         <input type="checkbox" id="remember">
                         <span>Remember me</span>
                     </label>
                     <a href="#" class="forgot-link" data-form="forgotForm">Forgot Password?</a>
                 </div>
                 <p class="login-link">Don't have an account? <a href="<?= base_url()?>website/join_ihdma"
                         class="switch-form">Sign Up</a>
                 </p>
             </div>
             <?php }?>
         </div>
     </div>
 </div>
 <!-- header area end -->