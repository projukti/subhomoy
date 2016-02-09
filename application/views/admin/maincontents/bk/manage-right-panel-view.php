
<div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"><h4 class="page-title">Manage Right Panel Ads</h4>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url();?>index.php/admin">The Hotels Of India</a></li>
                            <li class="active">Right Panel Ads</li>
                        </ol>
                    </div>
                    
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box m-b-10">
                        <div class="card-box"><h4 class="m-t-0 header-title"><b>Ad 1</b></h4> 
                        			<?php if($this->session->flashdata('error_message1')) { ?>
                                          <h5 style="color:red;"><?php echo $this->session->flashdata('error_message1'); ?></h5>
                                    <?php } ?>
                                    <?php if($this->session->flashdata('success_message1')) { ?>
                                          <h5 style="color:green;"><?php echo $this->session->flashdata('success_message1'); ?></h5>
                                    <?php } ?>
                        	 <?php 	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
											echo form_open_multipart('',$attributes); ?>
                            <div class="table-box opport-box">
                            	
                                <div class="table-detail">
                                	<?php if($row1) {?>
                                    <img src="<?php echo base_url();?>uploads/right_panel_add/<?php echo $row1->image;?>" height="80" width="80"/>
                                	<?php } else {?>
                                    <img src="<?php echo base_url();?>uploads/right_panel_add/no-ad.png" height="80" width="80"/>
                                    <?php }?>
                                </div>
                                <div class="table-detail">
                                    <div class="member-info"><h4 class="m-t-0"><b>
										<?php 	echo form_upload(
														array(
															'name' => 'ad1'
														)
												);
										?>
                                        <h6 style="color:red;"><?php echo $this->session->flashdata('message1')."<br>";?></h6>
                                        </b></h4>
								</div>
                                </div>
                                
                                <div class="table-detail">

                                                <div class="col-sm-9">
                                                    <div class="input-group"><input type="text" class="form-control"
                                                                                    placeholder="Expiry Date"
                                                                                    id="datepicker-autoclose" name="expiry_date1" value="<?php if($row1) {echo $row1->expiry_date;} ?>">
                                                   <h6 style="color:red;"><?php echo $this->session->flashdata('expiry_date1')."<br>";?></h6>
                                                                                     <span
                                                            class="input-group-addon bg-custom b-0 text-white"><i
                                                            class="icon-calender"></i></span></div>
                                                </div>
                                </div>
                                <div class="table-detail">
                                	<?php if(isset($row1->hidden_value)) {?>
                                	<button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Edit Ads</button>
                                    <input type="hidden" name="adid" value="1" />
                                    <input type="hidden" name="action" value="edit" />
                                    <?php } else { ?>
                                    <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Add Ads</button>
                                    <input type="hidden" name="adid" value="1" />
                                    <input type="hidden" name="action" value="add" />
                                    <?php } ?>
                                    
                                    <!--<input type="submit" class="btn btn-purple waves-effect waves-light" name="submit" value="Add Ads" />-->
                                </div>
                                <div class="table-detail table-actions-bar">
                                	<?php if($row1) {?>
                                    <a href="<?php echo base_url();?>index.php/admin/manage_ad/confirmDelete/<?php echo $row1->id; ?>/<?php echo $row1->hidden_value; ?>" class="table-action-btn" title="Delete"><i class="md md-close"></i></a>
                                    <?php } ?>
                                </div>
                               
                            </div>
                             <?php echo form_close(); ?>
                        </div>
                        
                        <div class="card-box"><h4 class="m-t-0 header-title"><b>Ad 2</b></h4>
                        	<?php if($this->session->flashdata('error_message2')) { ?>
                                          <h5 style="color:red;"><?php echo $this->session->flashdata('error_message2'); ?></h5>
                                    <?php } ?>
                                    <?php if($this->session->flashdata('success_message2')) { ?>
                                          <h5 style="color:green;"><?php echo $this->session->flashdata('success_message2'); ?></h5>
                                    <?php } ?> 
                        	 <?php 	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
											echo form_open_multipart('',$attributes); ?>
                            <div class="table-box opport-box">
                            	
                                <div class="table-detail">
                                <?php if($row2) {?>
                                	<img src="<?php echo base_url();?>uploads/right_panel_add/<?php echo $row2->image;?>" height="80" width="80"/>
                                <?php } else {?>
                                    <img src="<?php echo base_url();?>uploads/right_panel_add/no-ad.png" height="80" width="80"/>
                                <?php }?>
                                </div>
                                <div class="table-detail">
                                    <div class="member-info"><h4 class="m-t-0"><b>
										<?php 	echo form_upload(
														array(
															'name' => 'ad2'
														)
												);
										?>
                                        <h6 style="color:red;"><?php echo $this->session->flashdata('message2')."<br>";?></h5>
                                        </b></h4>
								</div>
                                </div>
                                
                                <div class="table-detail">

                                                <div class="col-sm-9">
                                                    <div class="input-group"><input type="text" class="form-control"
                                                                                    placeholder="Expiry Date"
                                                                                    id="datepicker-autoclose1" name="expiry_date2" value="<?php if($row2) {echo $row2->expiry_date; } ?>">
                                                          <h6 style="color:red;"><?php echo $this->session->flashdata('expiry_date2')."<br>";?></h6> 
                                                                                     <span
                                                            class="input-group-addon bg-custom b-0 text-white"><i
                                                            class="icon-calender"></i></span></div>
                                                </div>
                                </div>
                                <div class="table-detail">
                                	<?php if(isset($row2->hidden_value)) {?>
                                	<button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Edit Ads</button>
                                    <input type="hidden" name="adid" value="2" />
                                    <input type="hidden" name="action" value="edit" />
                                    <?php } else { ?>
                                    <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Add Ads</button>
                                    <input type="hidden" name="adid" value="2" />
                                    <input type="hidden" name="action" value="add" />
                                    <?php } ?>	
                                </div>
                                <div class="table-detail table-actions-bar">
                                <?php if($row2) {?>
                                    <a href="<?php echo base_url();?>index.php/admin/manage_ad/confirmDelete/<?php echo $row2->id; ?>/<?php echo $row2->hidden_value; ?>" class="table-action-btn" title="Delete"><i class="md md-close"></i></a>
                                    <?php }?>
                                </div>
                               
                            </div>
                             <?php echo form_close(); ?>
                        </div>
                        
                        <div class="card-box"><h4 class="m-t-0 header-title"><b>Ad 3</b></h4> 
                        	<?php if($this->session->flashdata('error_message3')) { ?>
                                          <h5 style="color:red;"><?php echo $this->session->flashdata('error_message3'); ?></h5>
                                    <?php } ?>
                                    <?php if($this->session->flashdata('success_message3')) { ?>
                                          <h5 style="color:green;"><?php echo $this->session->flashdata('success_message3'); ?></h5>
                                    <?php } ?> 
                        	 <?php 	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
											echo form_open_multipart('',$attributes); ?>
                            <div class="table-box opport-box">
                                <div class="table-detail">
                                	<?php if($row3) {?>
                                	<img src="<?php echo base_url();?>uploads/right_panel_add/<?php echo $row3->image;?>" height="80" width="80"/>
                               		<?php } else {?>
                                    <img src="<?php echo base_url();?>uploads/right_panel_add/no-ad.png" height="80" width="80"/>
                                	<?php }?>
                                </div>
                                <div class="table-detail">
                                    <div class="member-info"><h4 class="m-t-0"><b>
										<?php 	echo form_upload(
														array(
															'name' => 'ad3'
														)
												);
										?>
                                        <h6 style="color:red;"><?php echo $this->session->flashdata('message3')."<br>";?></h5>
                                        </b></h4>
								</div>
                                </div>
                                
                                <div class="table-detail">

                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Expiry Date" id="datepicker-autoclose2" name="expiry_date3" value="<?php if($row3) {echo $row3->expiry_date;} ?>">
                                                     <h6 style="color:red;"><?php echo $this->session->flashdata('expiry_date3')."<br>";?></h6>
                                                                                     <span
                                                            class="input-group-addon bg-custom b-0 text-white"><i
                                                            class="icon-calender"></i></span></div>
                                                </div>
                                </div>
                                <div class="table-detail">
                                	<?php if(isset($row3->hidden_value)) {?>
                                	<button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Edit Ads</button>
                                    <input type="hidden" name="adid" value="3" />
                                    <input type="hidden" name="action" value="edit" />
                                    <?php } else { ?>
                                    <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Add Ads</button>
                                    <input type="hidden" name="adid" value="3" />
                                    <input type="hidden" name="action" value="add" />
                                    <?php } ?>
                                </div>
                                <div class="table-detail table-actions-bar">
                                <?php if($row3) {?>
                                    <a href="<?php echo base_url();?>index.php/admin/manage_ad/confirmDelete/<?php echo $row3->id; ?>/<?php echo $row3->hidden_value; ?>" class="table-action-btn" title="Delete"><i class="md md-close"></i></a>
                                    <?php }?>
                                </div>
                               
                            </div>
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
<script>
	$(document).ready(function(){
		currurl = window.location.href;
		newurl = currurl.split('edit')[0];
		stateID = <?php //echo $state_id; ?>;
		ID = <?php //echo $id; ?>;
		/*alert(stateID);*/
		$.ajax({
				type: "POST",
				url: newurl+"ajax_call",
				async: false,
				data: {state:stateID, action:'<?php //echo $action; ?>', id:ID,sayantan:'ready'},
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
				data: {state:stateID, action:'<?php //echo $action; ?>',sayantan:'change'},
				dataType: "html",
				success: function(data) {
                        //data is the html of the page where the request is made.
                        $('#city_id').html(data);
				}
			})
		});
	});
</script>
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
				data: {state:stateID, action:'<?php //echo $action; ?>'},
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
				data: {state:stateID, action:'<?php //echo $action; ?>'},
				dataType: "html",
				success: function(data) {
                        //data is the html of the page where the request is made.
                        $('#city_id').html(data);
				}
			})
    });
});
</script>