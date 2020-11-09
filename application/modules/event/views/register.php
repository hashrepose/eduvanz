<style type="text/css">
        .datepicker>div {
            display: block;
        }
       
</style>
<div class="app-content">
<div class="section">
   <!--  Page-header opened -->
   
   
   <!--  Page-header closed -->
   <!-- row opened -->
   <div class="row">
      <div class="col-lg-10 col-xl-12 col-md-12 col-sm-12">
         <div class="card">
            <div class="card-header">
               <h3 class="card-title">Register For Event</h3>
            </div>
            <form id="add_edit_form" action="<?php echo base_url().'participant/create' ?>" method="POST" enctype="multipart/form-data">
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
                                 <label class="form-label">Age <span class="text-red">*</span></label>
                              </div>
                           </div>
                           <div class="col-sm-6 col-md-8">
                              <div class="form-group">    
                                 <input type="number" class="form-control" name="age" value=""  min="10" max="100" placeholder="Age"  >                      
                              </div>
                           </div>
                        </div>
                     </div>
					 <div class="col-lg-12 col-md-12">
                        <div class="row">
                           <div class="col-sm-6 col-md-2">
                              <div class="form-group">
                                 <label class="form-label">Profession <span class="text-red">*</span></label>
                              </div>
                           </div>
                           <div class="col-sm-6 col-md-8">
                              <div class="form-group">    
                                 <select name="profession" >
								  <option value="employed" >Employed</option>
								  <option value="student" >Studend</option>
								</select>                     
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-12 col-md-12">
                        <div class="row">
                           <div class="col-sm-6 col-md-2">
                              <div class="form-group">
                                 <label class="form-label">Date Of Birth <span class="text-red">*</span></label>
                              </div>
                           </div>
                           <div class="col-sm-6 col-md-8">
                              <div class="form-group">  
                                 <i class="fa fa-calendar input-icon"></i>                              
                                 <input type="text" name="date_of_birth" class="form-control input-group date" id="dob" value="" autocomplete="off" placeholder="Date Of Birth " style=" padding-left: 27px;">
                              </div>
                           </div>
                        </div>
                     </div>
					  <div class="col-lg-12 col-md-12">
                        <div class="row">
                           <div class="col-sm-6 col-md-2">
                              <div class="form-group">
                                 <label class="form-label">Locality <span class="text-red">*</span></label>
                              </div>
                           </div>
                           <div class="col-sm-6 col-md-8">
                              <div class="form-group">    
                                 <input type="text" class="form-control" name="locality" value="" placeholder="Locality"  >                      
                              </div>
                           </div>
                        </div>
                     </div> 
					 <div class="col-lg-12 col-md-12">
                        <div class="row">
                           <div class="col-sm-6 col-md-2">
                              <div class="form-group">
                                 <label class="form-label">No Of Guest <span class="text-red">*</span></label>
                              </div>
                           </div>
                           <div class="col-sm-6 col-md-8">
                              <div class="form-group">    
                                 <input type="number" class="form-control" name="no_of_guest" value=""  min="0" max="2" placeholder="No Of Guest"  >                      
                              </div>
                           </div>
                        </div>
                     </div>
					 <div class="col-lg-12 col-md-12">
                        <div class="row">
                           <div class="col-sm-6 col-md-2">
                              <div class="form-group">
                                 <label class="form-label">Address <span class="text-red">*</span></label>
                              </div>
                           </div>
                           <div class="col-sm-6 col-md-8">
                              <div class="form-group">    
                                 <textarea style="height:100px"  class="form-control" name="address"  placeholder="Address"  ></textarea> (Max 50 Characters)                     
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br/>
                  <div class="card-footer1"> <button type="submit" class="btn btn-primary btn2" value="submit"><i class="fa fa-save"></i> Update</button>
                     <a href="<?php echo base_url().'event'; ?>" type="reset" class="btn btn-secondary btn2" data-dismiss="modal"><i class="fa fa-remove"></i> Go Back</a> 
                  </div>
				  
				  <input type="hidden" id="uid" name="uid" value="<?php echo $this->session->userdata['logged_in_participant']->id; ?>">
            </form>
            <br>
            </div>
         </div>
      </div>
      <!-- row closed -->
   </div>
</div>