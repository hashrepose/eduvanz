<?php
   defined('BASEPATH') OR exit('No direct script access allowed');
   ?>
<!doctype html>
<html lang="en" dir="ltr">
   <head>
      <!-- Meta data -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <!-- Favicon-->
      <!-- Title -->
      <title>Eduvanz :: </title>
      <meta name="keywords" content="Metatitle" />
      <meta name="description" content="Description" />
      <meta name="Author" content="Test" />
      <!-- Bootstrap css -->
      <link href="<?=base_url();?>assets/plugins/bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet">
      <!-- Style css -->
      <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
      <link href="<?=base_url();?>assets/css/default.css" rel="stylesheet">
      <!-- Sidemenu css -->
      <link rel="stylesheet" href="<?=base_url();?>assets/plugins/sidemenu/sidemenu.css">
      <!-- owl-carousel css-->
      <link href="<?=base_url();?>assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
      <!--Bootstrap-daterangepicker css-->
      <link rel="stylesheet" href="<?=base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css">
      <!--Bootstrap-datepicker css-->
      <link rel="stylesheet" href="<?=base_url();?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css">
      <!-- Sidemenu-responsive  css -->
      <link href="<?=base_url();?>assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css" rel="stylesheet">
      <!-- P-scroll css -->
      <link href="<?=base_url();?>assets/plugins/p-scroll/p-scroll.css" rel="stylesheet" type="text/css">
      <!--Font icons css-->
      <link href="<?=base_url();?>assets/css/icons.css" rel="stylesheet">
      <!-- Switcher css -->
      <link href="<?=base_url();?>assets/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" type="text/css" media="all">
      <!-- Rightsidebar css -->
      <link href="<?=base_url();?>assets/plugins/sidebar/sidebar.css" rel="stylesheet">
      <!-- Nice-select css  -->
      <link href="<?=base_url();?>assets/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
      <!-- Color-palette css-->
      <link rel="stylesheet" href="<?=base_url();?>assets/css/skins.css">
      <link rel="stylesheet" href="<?=base_url();?>assets/switcher/demo.css">
     
   </head>
   <body class="app h-100vh">
      <!-- Loader -->
      <div id="loading" > <img src="<?=base_url();?>assets/images/other/loader.svg" class="loader-img" alt="Loader"> </div>
      <!-- Page opened -->
      <div class="page">
         <div class="">
            <!-- container opened -->
            <div class="container">
               <div class="row">
                  <div class="col-xl-12 justify-content-center mx-auto text-center">
                     <div class="card">
                        <div class="row">
                           <div class="col-md-8 col-lg-7 p-6 box-shadow ">
                              <div class="card-body p-6 about-con pabout">
                                 <br /><br />
                                 <div class="card-title text-center  mb-4">Participant Login</div>
                                 <br/>
                                 <hr>
                                 <a href="<?php echo base_url().'event/register_user'; ?>">Register as User</a><br/>
                                 <form id="login_form" action="<?php echo site_url('event/verify');?>" method="POST">
                                    <div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <i class="fa fa-envelope input-icon"></i>
                                             <input type="email" name="email" class="form-control" placeholder="Enter Your Email Id"> 
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <i class="fa fa-key input-icon"></i>
                                             <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="form-footer mt-1"> <button type="submit" class="btn btn-danger btn-block">SignIn</button> </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- container closed -->
         </div>
      </div>
      <!-- Page closed -->
      <!-- Dashboard js -->   
      <script src="<?=base_url();?>assets/js/vendors/jquery-3.2.1.min.js"></script>
      <script src="<?=base_url();?>assets/plugins/bootstrap-4.1.3/popper.min.js"></script>
      <script src="<?=base_url();?>assets/plugins/bootstrap-4.1.3/js/bootstrap.min.js"></script>
      <script src="<?=base_url();?>assets/js/vendors/jquery.sparkline.min.js"></script>
      <script src="<?=base_url();?>assets/js/vendors/circle-progress.min.js"></script>
      <script src="<?=base_url();?>assets/plugins/rating/jquery.rating-stars.js"></script>
      <script src="<?=base_url();?>assets/plugins/moment/moment.min.js"></script>
      <script src="<?=base_url();?>assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="<?=base_url();?>assets/plugins/owl-carousel/owl.carousel.js"></script>
      <script src="<?=base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
      <script src="<?=base_url();?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
      <script src="<?=base_url();?>assets/plugins/jquery-countdown/countdown.js"></script>
      <script src="<?=base_url();?>assets/plugins/jquery-countdown/jquery.plugin.min.js"></script>
      <script src="<?=base_url();?>assets/plugins/jquery-countdown/jquery.countdown.js"></script>
      <script src="<?=base_url();?>assets/switcher/js/switcher.js"></script>
      <script src="<?=base_url();?>assets/js/custom.js"></script>
      <!-- validation -->
      <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
      <script src="<?=base_url();?>assets/js/customvalidation.js"></script>
   </body>
</html>