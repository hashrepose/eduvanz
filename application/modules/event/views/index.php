<div class="breadcrumbs_area contact_bread">
</div>
<section class="main_content_area my_account">
   <div class="container">
      <div class="account_dashboard">
         <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
               <div class="row" >
                  <div class="owl-item col-md-3" >
                     <div class="item">
                        <a href="<?php echo base_url().'event/register'; ?>" >
                           <div class="card bg-success-transparent">
                              <div class="card-body">
                                 <h6 class="mb-3">Register For event</h6>
                                 <h2 class="text-right mb-4"><span></span></h2>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div><br/><br/><br/>
			   
			   
			   <div class="row" >
                  <div class="owl-item col-md-3" >
                     <div class="item">
                        <a href="<?php 
							if(!empty($this->session->userdata['logged_in_participant']))
								echo base_url().'event/logout'; 
							else
								echo base_url().'event/login';
							
							?>" >
                           <div class="card bg-success-transparent">
                              <div class="card-body">
                                 <h6 class="mb-3"><?php 
									if(!empty($this->session->userdata['logged_in_participant']))
										echo 'Logout';
									else
										echo 'Login to update Information';
								 ?></h6>
                                 <h2 class="text-right mb-4"><span></span></h2>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
			   
			   
               <br/>
			   
<?php if(!empty($this->session->userdata['logged_in_participant'])){ ?>			   
<!-------------------------------------- Participant Data Div --------------------------------------->			   
	<table  class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="example_info">
										<thead>
											<tr role="row">
												<th class="w-15p sorting_asc" style="width: 98px;">Sr no</th>
												<th class="w-15p sorting_asc" style="width: 98px;">Name</th>
												<th class="wd-15p sorting" style="width: 300px;">Age</th>
												<th class="wd-15p sorting" style="width: 111px;">Date Of Birth</th>
												<th class="wd-15p sorting" style="width: 111px;">Profession</th>
												<th class="wd-15p sorting" style="width: 103px;">Locality</th>
												<th class="wd-15p sorting" style="width: 111px;">No Of guest</th>
												<th class="wd-15p sorting" style="width: 111px;">Address</th>
												<th class="wd-10p sorting"  style="width: 105px;">Action</th>
											</tr>
										</thead>
										<tbody>
                                       <?php 
									   // echo '<pre>';
									   // print_r($participant_list);
									   // exit;
										if(!empty($participant_list))
										{
											$i = 1;
											foreach($participant_list as $key => $value)
											{
												
										?>		<tr role="row" class="odd">
												<td class="sorting_1" align="center"><?php echo $i; ?></td>
												<td class="sorting_1" align="center"><?php echo ucfirst(strtolower($value->full_name)); ?></td>
												<td align="center"><?php echo $value->age; ?></td>
												<td align="center"><?php echo $value->date_of_birth; ?></td>
												<td align="center"><?php echo $value->profession; ?></td>
												<td align="center"><?php echo $value->locality; ?></td>
												 <td align="center"><?php echo $value->no_of_guest; ?></td>
												<td align="center"><?php echo $value->address; ?></span></a></td>
		
												 <td>
													<a href="<?php echo base_url().'event/edit_details/'.base64_encode($value->id); ?>"class="btn btn-info btn-sm mb-2 mb-xl-0 text-white" data-toggle="tooltip" data-original-title="View"><i class="fa fa-edit" style="color:yellow"></i></a>Action
												</td>
											</tr>
										<?php	
												$i++;	
											}
										}
										
									   ?>                    
                                    
                                </tbody>
									</table>      
<!-------------------------------------- Participant Data Div End --------------------------------------->
<?php } ?>

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