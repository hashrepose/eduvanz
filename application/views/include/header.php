<?php error_reporting(0); ?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Dashboard :: Admin</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        
		<!-- all css here -->
        <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap.min.css">
          <link rel="stylesheet" href="<?=base_url();?>assets/plugins/select2/select2.min.css">
         <link rel="stylesheet" href="<?=base_url();?>assets/plugins/multipleselect/multiple-select.css">
         <link href="<?=base_url();?>assets/plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
         <link href="<?=base_url();?>assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
         <link href="<?=base_url();?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">
         <link href="<?=base_url();?>assets/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/bundle.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/plugins.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">
		 <link rel="stylesheet" href="<?=base_url();?>assets/css/card.css">
        <link rel="stylesheet" href="<?=base_url();?>assets/css/responsive.css">
        <script src="<?=base_url();?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
        <link rel="stylesheet" href="https://rawgit.com/select2/select2/master/dist/css/select2.min.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		
   
		<script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
</script>
    </head>
    <body onload="startTime()">
         
            
         <!--header area start-->
        <div class="header_area">
           
            <!--header top start-->
            <div class="header_top top_four">
                <div class="container1">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="top_left_sidebar left_sidebar_two">
 <div class="logo logo_four">
                            </div>
                            </div>
                        </div>
						<div class="col-lg-3 datetime hidden" >
						 
                    <?=date('l d-M-Y');?> <span id="txt"></span>
							   </div>
							   
                        <div class="col-lg-6">

						
<div class="header_right_info right_info_two ">
 <ul>    
                                           

 <li class="languages">
 <a href="javascript:void(0);">
 <div style="display: flex;">
 <span class="vendor-name"><br>
 <p class="seller">Admin</p></span>

 </div>
 
</a>
 <ul class="dropdown_languages">
  <li class="select"><a href="<?=base_url('login/logout');?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out </a></li>

</ul>
                                        </li>
	
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel-->
            <div class="header_middle middle_four">
                <div class="container1">
                    <div class="row align-items-center">
                       
                        <div class="col-lg-12">
                            <div class="main_menu_inner menu_inner_four">
                                <div class="main_menu menu_four d-none d-lg-block">
										<nav>
										  <ul>
										 <li class="<?php echo'active';?>"><a href="<?=base_url('dashboard');?>"><i class="fa fa-dashboard"></i>Dashboard </a></li>
										 <li class="dropdown_item"><a href="javascript:void(0);"><i class="fa fa-th"></i> Participants<i class="fa fa-angle-down"></i></a>
										   <ul class="sub_menu"> 
											   <li><a href="<?=base_url('participant/getAll');?>"><i class="fa fa-angle-right"></i>List Participant</a></li>
											</ul>
										</li>
										<li class=""><a href="<?=base_url('login/logout');?>"><i class="fa fa-sign-out"></i>Logout </a></li>										
										</nav>
                                </div>
                                
     
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
 
        </div>
         <!--header area end-->
          
       