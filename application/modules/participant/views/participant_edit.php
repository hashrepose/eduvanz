<div class="app-content">
<div class="section">
   <!--  Page-header opened -->
   <div class="page-header">
      <ol class="breadcrumb">
         <li class="breadcrumb-item"><a href="<?=base_url('dashboard');?>"><i class="fe fe-home mr-1"></i> Dashboard</a></li>
      </ol>
   </div>
   
   <!--  Page-header closed -->
   <!-- row opened -->
   <div class="row">
      <div class="col-lg-10 col-xl-12 col-md-12 col-sm-12">
         <div class="card">
            <div class="card-header">
               <h3 class="card-title">Edit Participant</h3>
            </div>
            <form id="add_edit_form" action="<?php echo base_url().'participant/update_participant_details' ?>" method="POST" enctype="multipart/form-data">
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
                                 <input type="text" class="form-control" name="full_name"  value="<?php echo ucfirst(strtolower($pDetails[0]->full_name)); ?>" placeholder="Full Name"  >                      
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
                                 <input type="number" class="form-control" name="age" value="<?php echo $pDetails[0]->age; ?>"  min="10" max="100" placeholder="Age"  >                      
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
								  <option value="employed" <?php if($pDetails[0]->profession == 'employed') { ?> selected <?php } ?> >Employed</option>
								  <option value="student" <?php if($pDetails[0]->profession == 'student') { ?> selected <?php } ?>>Studend</option>
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
                                 <input type="text" name="date_of_birth" class="form-control input-group date" id="dob" value="<?php echo $pDetails[0]->date_of_birth; ?>" autocomplete="off" placeholder="Date Of Birth " style=" padding-left: 27px;">
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
                                 <input type="text" class="form-control" name="locality" value="<?php echo $pDetails[0]->locality; ?>" placeholder="Locality"  >                      
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
                                 <input type="number" class="form-control" name="no_of_guest" value="<?php echo $pDetails[0]->no_of_guest; ?>"  min="0" max="2" placeholder="No Of Guest"  >                      
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
                                 <textarea style="height:100px" class="form-control" name="address"  placeholder="Address"  ><?php echo $pDetails[0]->address; ?></textarea> (Max 50 Characters)                     
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br/>
                  <div class="card-footer1"> <button type="submit" class="btn btn-primary btn2" value="submit"><i class="fa fa-save"></i> Update</button>
                     <a href="<?php echo base_url().'participant/getAll'; ?>" type="reset" class="btn btn-secondary btn2" data-dismiss="modal"><i class="fa fa-remove"></i> Go Back</a> 
                  </div>
				  
				  <input type="hidden" id="pid" name="pid" value="<?php echo  base64_encode($pDetails[0]->id); ?>">
            </form>
            <br>
            </div>
         </div>
      </div>
      <!-- row closed -->
   </div>
</div>