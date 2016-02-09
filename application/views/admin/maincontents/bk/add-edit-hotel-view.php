
<div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"><h4 class="page-title"><?php echo $action; ?> Hotel</h4>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url();?>index.php/admin">The Hotels Of India</a></li>
                            <li><a href="<?php echo base_url();?>index.php/admin/manage_hotel">Manage Hotel</a></li>
                            <li class="active"><?php echo $action; ?> Hotel</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box"><h4 class="m-t-0 header-title"><b></b></h4>                           

                            <div class="row">
                                <div class="col-md-6">
                                   <?php if($this->session->flashdata('error_message')) { ?>
                                          <h5 style="color:red;"><?php echo $this->session->flashdata('error_message'); ?></h5>
                                    <?php } ?>
                                    <?php if($this->session->flashdata('success_message')) { ?>
                                          <h5 style="color:green;"><?php echo $this->session->flashdata('success_message'); ?></h5>
                                    <?php } ?>
                                    <?php 	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
											echo form_open_multipart('',$attributes); ?>
                                    <?php
									if(isset($row))
										{   
									   		$state_id = $row->state_id;
											//$city_id = $row->city_id;
											$hotel_name = $row->hotel_name;
											$username = $row->username;
											$actual_password = $row->actual_password;
											$email_id =  $row->email_id;
											$contact_person =  $row->contact_person;
											$contact_number =  $row->contact_number;
											$package_starts_from = $row->package_starts_from;
											$site_link = $row->site_link;
											$short_description = $row->short_description;
											$exclusive = $row->exclusive;
											$air_conditioning = $row->air_conditioning;
											$bar = $row->bar;
											$car_parking = $row->car_parking;
											$atv_rentals = $row->atv_rentals;
											$complimentary_breakfast = $row->complimentary_breakfast;
											$doctor_on_call = $row->doctor_on_call;
											$foreign_exchange_conversion = $row->foreign_exchange_conversion;
											$gymnasium = $row->gymnasium;
											$isd_calling_facility = $row->isd_calling_facility;
											$pickup_dropin_facility = $row->pickup_dropin_facility;
											$restaurant = $row->restaurant;
											$spa_sauna = $row->spa_sauna;
											$swimming_pool = $row->swimming_pool;
											$wifi = $row->wifi;
									 	}
									 	else
									 	{
										 	$state_id = $this->input->post('state_id'); 
											//$city_id = $this->input->post('city_id');
											$hotel_name = $this->input->post('hotel_name');
											$username = $this->input->post('username');
											$actual_password = $this->input->post('password');
											$email_id = $this->input->post('email_id');
											$contact_person = $this->input->post('contact_person');
											$contact_number = $this->input->post('contact_number');
											$package_starts_from = $this->input->post('package_starts_from');
											$site_link = $this->input->post('site_link');
											$short_description = $this->input->post('short_description');
											$exclusive = $this->input->post('exclusive');
											$air_conditioning = $this->input->post('air_conditioning');
											$bar = $this->input->post('bar');
											$car_parking = $this->input->post('car_parking');
											$atv_rentals = $this->input->post('atv_rentals');
											$complimentary_breakfast = $this->input->post('complimentary_breakfast');
											$doctor_on_call = $this->input->post('doctor_on_call');
											$foreign_exchange_conversion = $this->input->post('foreign_exchange_conversion');
											$gymnasium = $this->input->post('gymnasium');
											$isd_calling_facility = $this->input->post('isd_calling_facility');
											$pickup_dropin_facility = $this->input->post('pickup_dropin_facility');
											$restaurant = $this->input->post('restaurant');
											$spa_sauna = $this->input->post('spa_sauna');
											$swimming_pool = $this->input->post('swimming_pool');
											$wifi = $this->input->post('wifi');
									 	}
									?>
                                       <div class="form-group"><label class="col-sm-2 control-label">State</label>

                                            <div class="col-sm-10">
                                            	<?php 
													$js = 'class="form-control" id=state_id';
													echo form_dropdown('state_id',$categories,$state_id,$js);
													echo form_error('state_id'); 
												?>
                                            </div>
                                        </div>
                                        <div class="form-group" id="city_dropdown"><label
                                                class="col-md-2 control-label">City</label>
										<?php  ?>
                                            <div class="col-md-10">
                                            	<div id="city_id"></div>
                                           		<?php 
													//$js = 'class="form-control" id="city"';
													//echo form_dropdown('city_id',$arrCities,$state_id,$js);
													echo form_error('city_id'); 
												?>      
                                            </div>
                                        </div>
                                        <div class="form-group"><label
                                                class="col-md-2 control-label">Hotel</label>
										<?php  ?>
                                            <div class="col-md-10"><input type="text" class="form-control"
                                                                          placeholder="Enter hotel name" name="hotel_name" value="<?php if($action == 'Edit'){echo $hotel_name;} else {echo set_value('hotel_name');} ?>">
                                                                   <?php echo form_error('hotel_name'); ?>       
                                                                          </div>
                                        </div>
                                        <div class="form-group"><label
                                                class="col-md-2 control-label">Username</label>
										<?php  ?>
                                            <div class="col-md-10"><input type="text" class="form-control"
                                                                          placeholder="Enter Username" name="username" value="<?php if($action == 'Edit'){echo $username;} else {echo set_value('username');} ?>">
                                                                   <?php echo form_error('username'); ?>       
                                                                          </div>
                                        </div>
                                        <div class="form-group"><label
                                                class="col-md-2 control-label">Password</label>
										<?php  ?>
                                            <div class="col-md-10"><input type="text" class="form-control"
                                                                          placeholder="Enter Password" name="password" value="<?php if($action == 'Edit'){echo $actual_password;} else {echo set_value('password');} ?>">
                                                                   <?php echo form_error('password'); ?>       
                                                                          </div>
                                        </div>
                                        <div class="form-group"><label
                                                class="col-md-2 control-label">Email Address</label>
										<?php  ?>
                                            <div class="col-md-10"><input type="text" class="form-control"
                                                                          placeholder="Enter Email Address" name="email_id" value="<?php if($action == 'Edit'){echo $email_id;} else {echo set_value('email_id');} ?>">
                                                                   <?php echo form_error('email_id'); ?>       
                                                                          </div>
                                        </div>
                                        <div class="form-group"><label
                                                class="col-md-2 control-label">Contact Person</label>
										<?php  ?>
                                            <div class="col-md-10"><input type="text" class="form-control"
                                                                          placeholder="Enter Contact Person" name="contact_person" value="<?php if($action == 'Edit'){echo $contact_person;} else {echo set_value('contact_person');} ?>">
                                                                   <?php echo form_error('contact_person'); ?>       
                                                                          </div>
                                        </div>
                                        <div class="form-group"><label
                                                class="col-md-2 control-label">Contact Number</label>
										<?php  ?>
                                            <div class="col-md-10"><input type="text" class="form-control"
                                                                          placeholder="Enter Contact Number" name="contact_number" value="<?php if($action == 'Edit'){echo $contact_number;} else {echo set_value('contact_number');} ?>">
                                                                   <?php echo form_error('contact_number'); ?>       
                                                                          </div>
                                        </div>
                                        <div class="form-group">
                                        	<label class="col-md-2 control-label">Exclusive</label>
                                            <div class="col-md-10">
            									<input id="checkbox1" type="checkbox" name="exclusive" <?php if($exclusive == 1) {?> checked="checked"<?php }?>>
                                            <?php echo form_error('exclusive'); ?>       
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        	<label class="col-md-2 control-label">Packeges Starts From(Rs.)</label>
                                            <div class="col-md-10"><input type="text" class="form-control"
                                                                          placeholder="Enter Packeges name" name="package_starts_from" value="<?php if($action == 'Edit'){echo $package_starts_from;} else {echo set_value('package_starts_from');} ?>">
                                                                   <?php echo form_error('package_starts_from'); ?>       
                                                                          </div>
                                        </div>
                                        <div class="form-group"><label
                                                class="col-md-2 control-label">Site Link</label>
										<?php  ?>
                                            <div class="col-md-10"><input type="text" class="form-control"
                                                                          placeholder="Enter Site Link" name="site_link" value="<?php if($action == 'Edit'){echo $site_link;} else {echo set_value('site_link');} ?>">
                                                                   <?php echo form_error('site_link'); ?>       
                                                                          </div>
                                        </div>
                                        <div class="form-group"><label class="col-md-2 control-label">Short Description</label>

                                            <div class="col-md-10"><textarea class="form-control" rows="5" name="short_description"><?php if($action == 'Edit'){echo $short_description;} else {echo set_value('short_description');} ?></textarea>
                                            <?php echo form_error('short_description'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        	<label class="col-md-2 control-label">Image</label>
                                            <div class="col-md-10">
                                            	<?php if($action == 'Edit'){ ?>
                                            	<img src="<?php echo base_url();?>uploads/<?php echo $row->hotel_image;?>" height="50" width="50"/>
                                                <?php } ?>
                                                <?php 	echo form_upload(
														array(
															'name' => 'hotel_image'
														)
													);
												//$image = $row->hotel_image; 
												//form_hidden('image', $image);	
												?>
                                             <?php echo form_error('hotel_image'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        	<label class="col-md-2 control-label">Air conditioning</label>
                                            <div class="col-md-10">
                                            	<input id="checkbox1" type="checkbox" name="air_conditioning" <?php if($air_conditioning == 1) {?> checked="checked"<?php }?>>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        	<label class="col-md-2 control-label">Bar</label>
                                            <div class="col-md-10">
                                            	<input id="checkbox1" type="checkbox" name="bar" <?php if($bar == 1) {?> checked="checked"<?php }?>>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<label class="col-md-2 control-label">Car parking</label>
                                            <div class="col-md-10">
                                            	<input id="checkbox1" type="checkbox" name="car_parking" <?php if($car_parking == 1) {?> checked="checked"<?php }?>>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<label class="col-md-2 control-label">Car/ATV rental</label>
                                            <div class="col-md-10">
                                            	<input id="checkbox1" type="checkbox" name="atv_rentals" <?php if($atv_rentals == 1) {?> checked="checked"<?php }?>>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<label class="col-md-2 control-label">Complimentary Breakfast</label>
                                            <div class="col-md-10">
                                            	<input id="checkbox1" type="checkbox" name="complimentary_breakfast" <?php if($complimentary_breakfast == 1) {?> checked="checked"<?php }?>>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<label class="col-md-2 control-label">Doctor on call</label>
                                            <div class="col-md-10">
                                            	<input id="checkbox1" type="checkbox" name="doctor_on_call" <?php if($doctor_on_call == 1) {?> checked="checked"<?php }?>>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<label class="col-md-2 control-label">Foreign exchange conversion</label>
                                            <div class="col-md-10">
                                            	<input id="checkbox1" type="checkbox" name="foreign_exchange_conversion" <?php if($foreign_exchange_conversion == 1) {?> checked="checked"<?php }?>>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<label class="col-md-2 control-label">Gymnasium</label>
                                            <div class="col-md-10">
                                            	<input id="checkbox1" type="checkbox" name="gymnasium" <?php if($gymnasium == 1) {?> checked="checked"<?php }?>>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<label class="col-md-2 control-label">In-room ISD calling facility</label>
                                            <div class="col-md-10">
                                            	<input id="checkbox1" type="checkbox" name="isd_calling_facility" <?php if($isd_calling_facility == 1) {?> checked="checked"<?php }?>>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<label class="col-md-2 control-label">Pick up and drop-in facility</label>
                                            <div class="col-md-10">
                                            	<input id="checkbox1" type="checkbox" name="pickup_dropin_facility" <?php if($pickup_dropin_facility == 1) {?> checked="checked"<?php }?>>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        	<label class="col-md-2 control-label">Restaurant</label>
                                            <div class="col-md-10">
                                            	<input id="checkbox1" type="checkbox" name="restaurant" <?php if($restaurant == 1) {?> checked="checked"<?php }?>>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        	<label class="col-md-2 control-label">Spa/sauna</label>
                                            <div class="col-md-10">
                                            	<input id="checkbox1" type="checkbox" name="spa_sauna" <?php if($spa_sauna == 1) {?> checked="checked"<?php }?>>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                        	<label class="col-md-2 control-label">Swimming pool</label>
                                            <div class="col-md-10">
                                            	<input id="checkbox1" type="checkbox" name="swimming_pool" <?php if($swimming_pool == 1) {?> checked="checked"<?php }?>>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                        	<label class="col-md-2 control-label">Wi-fi</label>
                                            <div class="col-md-10">
                                            	<input id="checkbox1" type="checkbox" name="wifi" <?php if($wifi == 1) {?> checked="checked"<?php }?>>
                                            </div>
                                        </div>
                                        
                                        <?php if($action == 'Add') 
											{ ?>
												<button type="submit" class="btn btn-purple waves-effect waves-light">Add Hotel</button>
										<?php }
											else if($action == 'Edit')
											{ ?>
												<button type="submit" class="btn btn-purple waves-effect waves-light">Edit Hotel</button>
										<?php }
										?>
                                        
                                   <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
            </div>
        </div>
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>-->
<script src="<?php echo base_url();?>/assets/admin/js/jquery-1.11.2.min.js"></script>
<?php if($action == 'Edit'){ ?>
<script>
	$(document).ready(function(){
		currurl = window.location.href;
		newurl = currurl.split('edit')[0];
		stateID = <?php echo $state_id; ?>;
		ID = <?php echo $id; ?>;
		/*alert(stateID);*/
		$.ajax({
				type: "POST",
				url: newurl+"ajax_call",
				async: false,
				data: {state:stateID, action:'<?php echo $action; ?>', id:ID,sayantan:'ready'},
				dataType: "html",
				success: function(data) {
                        //data is the html of the page where the request is made.
                        $('#city_id').html(data);
				}
			})
		$("#state_id").on('change', function(){
		
			stateID = $(this).val();
			if(stateID == "")
			{
			$("#city_dropdown").hide();	
			}
			$.ajax({
				type: "POST",
				url: newurl+"ajax_call",
				async: false,
				data: {state:stateID, action:'<?php echo $action; ?>',sayantan:'change'},
				dataType: "html",
				success: function(data) {
                        //data is the html of the page where the request is made.
                        $('#city_id').html(data);
				}
			})
		});
	});
</script>
<?php }else if($action == 'Add'){ ?>
<script>
	$(document).ready(function(){
		
		stateID = $(this).val();
			/*if(stateID == "")
			{
			$("#city_dropdown").hide();	
			}*/
			$.ajax({
				type: "POST",
				url: "ajax_call",
				async: false,
				data: {state:stateID, action:'<?php echo $action; ?>'},
				dataType: "html",
				success: function(data) {
                        //data is the html of the page where the request is made.
                        $('#city_id').html(data);
				}
			})
    $("#state_id").on('change', function(){
			/*$("#city_dropdown").show();*/
			
			stateID = $(this).val();
			if(stateID == "")
			{
			$("#city_dropdown").hide();	
			}
			$.ajax({
				type: "POST",
				url: "ajax_call",
				async: false,
				data: {state:stateID, action:'<?php echo $action; ?>'},
				dataType: "html",
				success: function(data) {
                        //data is the html of the page where the request is made.
                        $('#city_id').html(data);
				}
			})
    });
});
</script>
<?php } ?>