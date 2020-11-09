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
    <title>Seller :: <?php echo $this->website->web_meta_title; ?></title>
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
        input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 30px white inset !important;
 
}

        h3.card-title {
 
    font-size: 18px;
    font-weight: 500;
}
        .form-control {
   padding-left: 27px;
}
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
        hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid #969696;
}
.card{ background-color: transparent !important ;
    border:none !important;
}
.box-shadow{
    
         margin-top: 20px;
    margin-bottom: 20px;
    background: #fff;
  margin-left: -6%;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 3px 5px -1px, rgba(0, 0, 0, 0.2) 0px 6px 10px 0px, rgba(0, 0, 0, 0.2) 0px 1px 18px 0px;

}
@media (max-width:575.98px){
    .box-shadow{
    
         margin-top: 20px;
    margin-bottom: 20px;
    background: #fff;
  margin-left:0;
    box-shadow: rgba(0, 0, 0, 0.2) 0px 3px 5px -1px, rgba(0, 0, 0, 0.2) 0px 6px 10px 0px, rgba(0, 0, 0, 0.2) 0px 1px 18px 0px;

}
    }
body{    background-color: #edf1f5;
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
				<img src="<?php echo site_url('../admin/uploads/website/logo/').$this->website->web_company_logo;?>" class="header-brand-img desktop-logo  mb-5" alt="<?=$this->website->web_company_name;?>" style="height:auto">
				</div>
            </div>
            <!-- container opened -->
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 justify-content-center mx-auto text-center">
                        <div class="card">
                            <div class="row" >
                        <div class="col-md-12 col-lg-7 p-6  pr-0 d-none d-lg-block text-justify" style="background:#fff; "> 
					<div class="card-body about-con pabout" style="   padding: 25px 117px 0 15px;">
    <h3 class="card-title ">Sell to crores of customers on <?=$this->website->web_company_name;?>, right from your doorstep!</h3>
    <p><b>All you need to sell on <?=$this->website->web_company_name;?> is</b></p>     
    <p style="font-size: 14px;font-weight: 500;">
      <i class="fa fa-user" style="font-size:16px;color:#00365b"></i>  Regitsre Account  <i class="fa fa-angle-double-right" style="font-size:18px;color:red"></i>   <i class="fa fa-building-o" style="font-size:16px;color:#00365b"></i> GSTIN <i class="fa fa-angle-double-right" style="font-size:18px;color:red"></i> 
        <i class="fa fa-bank" style="font-size:16px;color:#00365b"></i> Bank Account <i class="fa fa-angle-double-right" style="font-size:18px;color:red"></i> 
     <i class="fa fa-product-hunt" style="font-size:16px;color:#00365b"></i> Product to sell</p>
    <p>*GSTIN is not required for sellers who only sell books</p>
    <hr>
    <h4>How will this information be used?</h4>
<p>You can use your Email Address to login to your <?=$this->website->web_company_name;?> Seller Account.</p>
<p>Please note, the 'Email Address' and 'Password' used here are only to access your <?=$this->website->web_company_name;?> Seller Account and can’t be used on <?=$this->website->web_site_url;?> shopping destination.</p>
<hr>
<br>
<br>
<br>

     
    
    
</div>
                    </div>
                                <div class="col-md-12 col-lg-4 pl-0 box-shadow ">
   <div class="card-body p-6 about-con pabout">
    <div class="card-title text-center">SELLER CREATE ACCOUNT </div>
<?php $msg=$this->session->flashdata('msg');  
if($msg){  ?>	
<div class="alert alert-<?php echo $msg['class'] ?> alert-dismissible fade show" role="alert"> <span class="alert-inner--icon"><i class="fe fe-<?php echo $msg['icon'] ?> "></i></span> <span class="alert-inner--text"><strong><?php echo $msg['type'] ?></strong> <?php echo $msg['message']; ?></span> <button type="button" class="close text-white" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
	<?php }?>
	 
	 <form id="register_form" action="<?php echo site_url('login/register');?>" method="POST">
   
		<div class="row">
		<div class="col-md-12">
		<div class="form-group">

            <i class="fa fa-user input-icon"></i>
        <input type="text" name="vnd_name" class="form-control" placeholder="Name">
		</div>
		</div>
		
		<div class="col-md-12">
        <div class="form-group">
            <i class="fa fa-envelope input-icon"></i>
        <input type="email" name="vnd_email" class="form-control" placeholder="Email">
		</div>
		</div>

        <div class="col-md-12">
        <div class="form-group">
            <i class="fa fa-tags input-icon"></i>
        <input type="text" name="vnd_gst_no" class="form-control" placeholder="GST Number">
        </div>
        </div>

          <div class="col-md-12">
        <div class="form-group">
            <i class="fa fa-caret-square-o-down input-icon"></i>
        <select name="vnd_category" class="form-control" >
            <option value="">Select Category</option>    
            <option value="1">Supplier</option>
            <option value="2">Manufacture</option>
            <option value="3">Wholesaler</option>
            <option value="4">Retailer</option>
        </select>
        </div>
        </div>


	    <div class="col-md-12">
        <div class="form-group">
            <i class="fa fa-key input-icon"></i>
        <input type="password" name="vnd_password" id="password2" class="form-control"  placeholder="Password">
		</div>
		</div>
		
		<div class="col-md-12">
        <div class="form-group">
            <i class="fa fa-key input-icon"></i>
        <input type="password" name="confirm_password" id="password2" class="form-control"  placeholder="Retype-Password"> 
		</div>
			</div>
			<div class="col-md-12">
    <div class="form-group">
        <label class="custom-control custom-checkbox ">
            <input type="checkbox" name="vnd_term" class="custom-control-input " checked > <span class="custom-control-label">I Agree With terms and Conditions</span> </label>
    </div>
    </div>
    </div>
    <div class="form-footer mt-2"> <button type="submit" class="btn btn-success btn-block">Sign Up</button> </div>
	</form>
    <div class="text-center  mt-3 mb-0"> Already have an  account? <a href="<?=base_url('login');?>" class="text-primary">Login</a> </div>
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

   
  