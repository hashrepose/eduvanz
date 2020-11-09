<style>
   .slick-slide{display:block;}
   .card {
   position: relative;
   display: -ms-flexbox;
   display: flex;
   -ms-flex-direction: column;
   flex-direction: column;
   min-width: 0;
   word-wrap: break-word;
   background-color: #fff;
   background-clip: border-box;
   border: 1px solid rgb(255, 255, 255);
   border-radius: .25rem;
   box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.1);
   }
   .text-danger {
   color: #ff3a59!important;
   }
   /*--bg-transparents--*/
   .bg-primary-transparent {
   background: rgba(34, 5, 191, 0.15) !important;
   }
   .bg-secondary-transparent {
   background-color: rgba(247, 138, 95, 0.2)  !important;
   }
   .bg-success-transparent {
   background-color: rgba(54, 179, 126, 0.2)  !important;
   }
   .bg-primary-transparent {
   background-color:#d6e2ff ;
   }
   .bg-info-transparent {
   background-color: #ccf1f7;
   }
   .bg-warning-transparent {
   background-color: #fec !important;
   }
   .bg-danger-transparent {
   background-color: #ffddd6;
   }
   .bg-pink-transparent {
   background-color: rgba(255,43,136, 0.15) ;
   }
   .bg-purple-transparent {
   background-color: rgba(96,77,216, 0.2) ;
   }
   .bg-dark-transparent {
   background-color: rgba(55,66,84, 0.1) ;
   }
   .bg-twitter-transparent {
   background: rgb(28, 157, 235,0.2);
   color:#1c9deb
   }
   .bg-linkedin-transparent {
   background: rgba(0, 119, 181, 0.2);
   color: #0077b5;
   }
   .bg-facebook-transparent {
   background: rgb(95, 144, 204,0.2);
   color: #4064ad;
   }
   .bg-googleplus-transparent {
   background: rgb(216, 75, 63,0.2);
   color:#d84b3f;
   }
   .bg-danger-transparent {
   background: rgba(255, 98, 88, 0.2);
   }
   .widget-stats .cards, .widget-stats .box--share {
   background: #ff000012;   
   }
</style>
<div class="breadcrumbs_area contact_bread">
</div>
<section class="main_content_area my_account">
   <div class="container">
      <div class="account_dashboard">
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
               <div class="breadcrumb_content">
                  <div class="breadcrumb_header">
                     <a href="<?=base_url();?>"><i class="fa fa-home"></i></a>
                     <span><i class="fa fa-angle-right"></i></span>
                     <span> Dashboard</span>
                  </div>
                  <div class="breadcrumb_title">
                     <h3>Dashboard </h3>
                  </div>
               </div>
               <div class="row" >
                  <div class="owl-item col-md-3" >
                     <div class="item">
                        <div class="card bg-success-transparent">
                           <div class="card-body">
                              <h6 class="mb-3">Total Participants</h6>
                              <h2 class="text-right mb-4"><i class="fa fa-product-hunt text-success text-success-shadow fa-lg float-left"></i><span><?php echo $total_participants; ?></span></h2>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <br/>
               <!-- Tab panes -->
               <div class="">
                  <div class=""  role="listbox">
                     <div class="widget widget-stats slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide00" >
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>       	
</section>