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
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo site_url('../admin/uploads/website/favicon/').$this->website->web_favicon_icon;?>">
    <!-- Title -->
    <title>Seller Forgot Password :: <?php echo $this->website->web_meta_title; ?></title>
	 <meta name="keywords" content="<?php echo $this->website->web_meta_title; ?>" />
   <meta name="description" content="<?php echo $this->website->web_meta_description; ?>" />
   <meta name="Author" content="Manish Kumar" />
    <!-- Bootstrap css -->
    <link href="<?=base_url();?>../admin/assets/plugins/bootstrap-4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Style css -->
    <link href="<?=base_url();?>../admin/assets/css/style.css" rel="stylesheet">
    <link href="<?=base_url();?>../admin/assets/css/default.css" rel="stylesheet">
    <!-- Sidemenu css -->
    <link rel="stylesheet" href="<?=base_url();?>../admin/assets/plugins/sidemenu/sidemenu.css">
    <!-- owl-carousel css-->
    <link href="<?=base_url();?>../admin/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <!--Bootstrap-daterangepicker css-->
    <link rel="stylesheet" href="<?=base_url();?>../admin/assets/plugins/bootstrap-daterangepicker/daterangepicker.css">
    <!--Bootstrap-datepicker css-->
    <link rel="stylesheet" href="<?=base_url();?>../admin/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css">
    <!-- Sidemenu-responsive  css -->
    <link href="<?=base_url();?>../admin/assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css" rel="stylesheet">
    <!-- P-scroll css -->
    <link href="<?=base_url();?>../admin/assets/plugins/p-scroll/p-scroll.css" rel="stylesheet" type="text/css">
    <!--Font icons css-->
    <link href="<?=base_url();?>../admin/assets/css/icons.css" rel="stylesheet">
    <!-- Switcher css -->
    <link href="<?=base_url();?>../admin/assets/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" type="text/css" media="all">
    <!-- Rightsidebar css -->
    <link href="<?=base_url();?>../admin/assets/plugins/sidebar/sidebar.css" rel="stylesheet">
    <!-- Nice-select css  -->
    <link href="<?=base_url();?>../admin/assets/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <!-- Color-palette css-->
    <link rel="stylesheet" href="<?=base_url();?>../admin/assets/css/skins.css">
    <link rel="stylesheet" href="<?=base_url();?>../admin/assets/switcher/demo.css">
    
    <style type="text/css">
        .jqstooltip {
            position: absolute;
            left: 0px;
            top: 0px;
            visibility: hidden;
            background: rgb(0, 0, 0) transparent;
            background-color: rgba(0, 0, 0, 0.6);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            color: white;
            font: 10px arial, san serif;
            text-align: left;
            white-space: nowrap;
            padding: 5px;
            border: 1px solid white;
            z-index: 10000;
        }
        
        .jqsfield {
            color: white;
            font: 10px arial, san serif;
            text-align: left;
        }
    </style>
</head>

<body class="app h-100vh">
    <!-- Loader -->
    <div id="loading" > <img src="<?=base_url();?>../admin/assets/images/other/loader.svg" class="loader-img" alt="Loader"> </div>
    
    <!-- Page opened -->
    <div class="page">
        <div class="">
            <div class="col col-login mx-auto">
                <div class="text-center"> 
				<img src="<?php echo site_url('uploads/website/logo/').$this->website->web_company_logo;?>" class="header-brand-img desktop-logo  mb-5" alt="<?=$this->website->web_company_name;?>" style="height:auto">
				</div>
            </div>
            <!-- container opened -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 justify-content-center mx-auto text-center">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-12 col-lg-7 pr-0 d-none d-lg-block"> <img src="<?=base_url();?>uploads/bestseller.jpg" alt="img" class="br-tl-2 br-bl-2 "> </div>
                                <div class="col-md-12 col-lg-5 pl-0 ">
     <div class="card-body p-6 about-con pabout">
	  <br /><br />
    <div class="card-title text-center  mb-4">SELLER FORGOT PASSWORD</div>
	<hr>
	<br>
	<?php $msg=$this->session->flashdata('msg');  
if($msg){  ?>	
<div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible fade show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-<?php echo $msg['icon'] ?> "></i></span> <span class="alert-inner--text"><strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?></span> <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
	<?php }?>
	 
	 <form id="forgot_password" action="" method="POST">
	 <div class="row">
	  <div class="col-md-12">
     <div class="form-group">
     <input type="email" name="email" class="form-control" placeholder="Enter Your Email Id"> </div>
     
	 
	 </div>
	 
    
	  
      </div>

     <div class="form-footer mt-1"> <button type="submit" class="btn btn-success btn-block">Sent </button> </div>
     </form> 

  <div class="text-center text-muted mt-3 "> Forget it, <a href="<?=base_url();?>" class="text-primary">send me back</a> to the sign in screen. </div>
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
    <script src="<?=base_url();?>../admin/assets/js/vendors/jquery-3.2.1.min.js"></script>
    
    <script src="<?=base_url();?>../admin/assets/plugins/bootstrap-4.1.3/popper.min.js"></script>
    
    <script src="<?=base_url();?>../admin/assets/plugins/bootstrap-4.1.3/js/bootstrap.min.js"></script>
  
    <script src="<?=base_url();?>../admin/assets/js/vendors/jquery.sparkline.min.js"></script>

    <script src="<?=base_url();?>../admin/assets/js/vendors/circle-progress.min.js"></script>
  
    <script src="<?=base_url();?>../admin/assets/plugins/rating/jquery.rating-stars.js"></script>
    
    <script src="<?=base_url();?>../admin/assets/plugins/moment/moment.min.js"></script>
   
    <script src="<?=base_url();?>../admin/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>
   
    <script src="<?=base_url();?>../admin/assets/plugins/owl-carousel/owl.carousel.js"></script>
   
    <script src="<?=base_url();?>../admin/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
  
    <script src="<?=base_url();?>../admin/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
    
    <script src="<?=base_url();?>../admin/assets/plugins/jquery-countdown/countdown.js"></script>
    
    <script src="<?=base_url();?>../admin/assets/plugins/jquery-countdown/jquery.plugin.min.js"></script>
  
    <script src="<?=base_url();?>../admin/assets/plugins/jquery-countdown/jquery.countdown.js"></script>
   
    <script src="<?=base_url();?>../admin/assets/switcher/js/switcher.js"></script>
   
    <script src="<?=base_url();?>../admin/assets/js/custom.js"></script>
    <!-- validation -->
<script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

<script src="<?=base_url();?>assets/js/customvalidation.js"></script>
</body>

</html>
   
  