<div class="app-content">
<div class="section">
   <!--  Page-header opened -->
   <div class="page-header">
      <ol class="breadcrumb">
        
      </ol>
   </div>
   
   <!--  Page-header closed -->
   <!-- row opened -->
   <div class="row">
      <div class="col-lg-10 col-xl-12 col-md-12 col-sm-12">
         <div class="card">
            <div class="card-header">
               <h3 class="card-title">Register as User</h3>
            </div>
            <form id="add_edit_form" action="<?php echo base_url().'event/save_user_details' ?>" method="POST" enctype="multipart/form-data">
               <div class="card-body">
                  <div class="row">
                     <div class="col-lg-12 col-md-12">
                        <div class="row">
                           <div class="col-sm-6 col-md-2">
                              <div class="form-group">
                                 <label class="form-label">Name<span class="text-red">*</span></label>
                              </div>
                           </div>
                           <div class="col-sm-6 col-md-8">
                              <div class="form-group">    
                                 <input type="text" class="form-control" name="full_name"  value="" placeholder="Full Name"  >                      
                              </div>
                           </div>
                        </div>
                     </div>
					  <div class="col-lg-12 col-md-12">
                        <div class="row">
                           <div class="col-sm-6 col-md-2">
                              <div class="form-group">
                                 <label class="form-label">Email<span class="text-red">*</span></label>
                              </div>
                           </div>
                           <div class="col-sm-6 col-md-8">
                              <div class="form-group">    
                                 <input type="email" class="form-control" name="email"  value="" placeholder="Enter Your Email Id"  >                      
                              </div>
                           </div>
                        </div>
                     </div>
					  <div class="col-lg-12 col-md-12">
                        <div class="row">
                           <div class="col-sm-6 col-md-2">
                              <div class="form-group">
                                 <label class="form-label">Password<span class="text-red">*</span></label>
                              </div>
                           </div>
                           <div class="col-sm-6 col-md-8">
                              <div class="form-group">    
                                 <input type="password" class="form-control" name="password"  value="" placeholder="Password"  >                      
                              </div>
                           </div>
                        </div>
                     </div>
                   
                  </div>
                  <br/>
                  <div class="card-footer1"> <button type="submit" class="btn btn-primary btn2" value="submit"><i class="fa fa-save"></i> Register</button>
                     <a href="<?php echo base_url().'event/login'; ?>" type="reset" class="btn btn-secondary btn2" data-dismiss="modal"><i class="fa fa-remove"></i> Go Back</a> 
                  </div>
            </form>
            <br>
            </div>
         </div>
      </div>
      <!-- row closed -->
   </div>
</div>