
<div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"><h4 class="page-title">Manage Header Panel Ads</h4>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url();?>index.php/admin">The Hotels Of India</a></li>
                            <li class="active">Header Panel Ads</li>
                        </ol>
                    </div>
                    
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box m-b-10">
                        	<h5 style="color:#9933FF; border:3px solid green; width:11%; border-radius:5px;">Header Ad Slot 1</h5>
                            <div id="city_id"></div>
                            <div class="card-box"><h4 class="m-t-0 header-title"><b>Ad 1.1</b></h4> 
                                        <?php if($this->session->flashdata('error_message11')) { ?>
                                              <h5 style="color:red;"><?php echo $this->session->flashdata('error_message11'); ?></h5>
                                        <?php } ?>
                                        <?php if($this->session->flashdata('success_message11')) { ?>
                                              <h5 style="color:green;"><?php echo $this->session->flashdata('success_message11'); ?></h5>
                                        <?php } ?>
                                 <?php 	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                                echo form_open_multipart('',$attributes); ?>
                                <div class="table-box opport-box">
                                    
                                    <div class="table-detail">
                                        <?php if($row11) {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/<?php echo $row11->image;?>" height="80" width="80"/>
                                        <?php } else {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/no-ad.png" height="80" width="80"/>
                                        <?php }?>
                                    </div>
                                    <div class="table-detail">
                                        <div class="member-info"><h4 class="m-t-0"><b>
                                            <?php 	echo form_upload(
                                                            array(
                                                                'name' => 'ad11'
                                                            )
                                                    );
                                            ?>
                                            <h6 style="color:red;"><?php echo $this->session->flashdata('message11')."<br>";?></h6>
                                            </b></h4>
                                    </div>
                                    </div>
                                    
                                    <div class="table-detail">
    
                                                    <div class="col-sm-9">
                                                        <div class="input-group"><input type="text" class="form-control"
                                                                                        placeholder="Expiry Date"
                                                                                        id="datepicker-autoclose1" name="expiry_date11" value="<?php if($row11) {echo $row11->expiry_date;} ?>">
                                                       <h6 style="color:red;"><?php echo $this->session->flashdata('expiry_date11')."<br>";?></h6>
                                                                                         <span
                                                                class="input-group-addon bg-custom b-0 text-white"><i
                                                                class="icon-calender"></i></span></div>
                                                    </div>
                                    </div>
                                    <div class="table-detail">
                                        <?php if(isset($row11->hidden_value)) {?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Edit Ads</button>
                                        <input type="hidden" name="adid" value="11" />
                                        <input type="hidden" name="action" value="edit" />
                                        <?php } else { ?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Add Ads</button>
                                        <input type="hidden" name="adid" value="11" />
                                        <input type="hidden" name="action" value="add" />
                                        <?php } ?>
                                        
                                        <!--<input type="submit" class="btn btn-purple waves-effect waves-light" name="submit" value="Add Ads" />-->
                                    </div>
                                    <div class="table-detail table-actions-bar">
                                        <?php if($row11) {?>
                                        <a href="<?php echo base_url();?>index.php/admin/manage_ad/confirm_header_ad_Delete/<?php echo $row11->id; ?>/<?php echo $row11->hidden_value; ?>" class="table-action-btn" title="Delete" data-del-id="<?php echo $row11->id; ?>" data-del-hidden="<?php echo $row11->hidden_value; ?>"><i class="md md-close"></i></a>
                                        
                                        <?php } ?>
                                    </div>
                                   
                                </div>
                                 <?php echo form_close(); ?>
                            </div>
                            
                        <div class="card-box"><h4 class="m-t-0 header-title"><b>Ad 1.2</b></h4> 
                                        <?php if($this->session->flashdata('error_message12')) { ?>
                                              <h5 style="color:red;"><?php echo $this->session->flashdata('error_message12'); ?></h5>
                                        <?php } ?>
                                        <?php if($this->session->flashdata('success_message12')) { ?>
                                              <h5 style="color:green;"><?php echo $this->session->flashdata('success_message12'); ?></h5>
                                        <?php } ?>
                                 <?php 	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                                echo form_open_multipart('',$attributes); ?>
                                <div class="table-box opport-box">
                                    
                                    <div class="table-detail">
                                        <?php if($row12) {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/<?php echo $row12->image;?>" height="80" width="80"/>
                                        <?php } else {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/no-ad.png" height="80" width="80"/>
                                        <?php }?>
                                    </div>
                                    <div class="table-detail">
                                        <div class="member-info"><h4 class="m-t-0"><b>
                                            <?php 	echo form_upload(
                                                            array(
                                                                'name' => 'ad12'
                                                            )
                                                    );
                                            ?>
                                            <h6 style="color:red;"><?php echo $this->session->flashdata('message12')."<br>";?></h6>
                                            </b></h4>
                                    </div>
                                    </div>
                                    
                                    <div class="table-detail">
    
                                                    <div class="col-sm-9">
                                                        <div class="input-group"><input type="text" class="form-control"
                                                                                        placeholder="Expiry Date"
                                                                                        id="datepicker-autoclose2" name="expiry_date12" value="<?php if($row12) {echo $row12->expiry_date;} ?>">
                                                       <h6 style="color:red;"><?php echo $this->session->flashdata('expiry_date12')."<br>";?></h6>
                                                                                         <span
                                                                class="input-group-addon bg-custom b-0 text-white"><i
                                                                class="icon-calender"></i></span></div>
                                                    </div>
                                    </div>
                                    <div class="table-detail">
                                        <?php if(isset($row12->hidden_value)) {?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Edit Ads</button>
                                        <input type="hidden" name="adid" value="12" />
                                        <input type="hidden" name="action" value="edit" />
                                        <?php } else { ?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Add Ads</button>
                                        <input type="hidden" name="adid" value="12" />
                                        <input type="hidden" name="action" value="add" />
                                        <?php } ?>
                                        
                                        <!--<input type="submit" class="btn btn-purple waves-effect waves-light" name="submit" value="Add Ads" />-->
                                    </div>
                                    <div class="table-detail table-actions-bar">
                                        <?php if($row12) {?>
                                        <a href="<?php echo base_url();?>index.php/admin/manage_ad/confirm_header_ad_Delete/<?php echo $row12->id; ?>/<?php echo $row12->hidden_value; ?>" class="table-action-btn" title="Delete"><i class="md md-close"></i></a>
                                        <?php } ?>
                                    </div>
                                   
                                </div>
                                 <?php echo form_close(); ?>
                            </div>
                            
                        <div class="card-box"><h4 class="m-t-0 header-title"><b>Ad 1.3</b></h4> 
                                        <?php if($this->session->flashdata('error_message13')) { ?>
                                              <h5 style="color:red;"><?php echo $this->session->flashdata('error_message13'); ?></h5>
                                        <?php } ?>
                                        <?php if($this->session->flashdata('success_message13')) { ?>
                                              <h5 style="color:green;"><?php echo $this->session->flashdata('success_message13'); ?></h5>
                                        <?php } ?>
                                 <?php 	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                                echo form_open_multipart('',$attributes); ?>
                                <div class="table-box opport-box">
                                    
                                    <div class="table-detail">
                                        <?php if($row13) {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/<?php echo $row13->image;?>" height="80" width="80"/>
                                        <?php } else {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/no-ad.png" height="80" width="80"/>
                                        <?php }?>
                                    </div>
                                    <div class="table-detail">
                                        <div class="member-info"><h4 class="m-t-0"><b>
                                            <?php 	echo form_upload(
                                                            array(
                                                                'name' => 'ad13'
                                                            )
                                                    );
                                            ?>
                                            <h6 style="color:red;"><?php echo $this->session->flashdata('message13')."<br>";?></h6>
                                            </b></h4>
                                    </div>
                                    </div>
                                    
                                    <div class="table-detail">
    
                                                    <div class="col-sm-9">
                                                        <div class="input-group"><input type="text" class="form-control"
                                                                                        placeholder="Expiry Date"
                                                                                        id="datepicker-autoclose3" name="expiry_date13" value="<?php if($row13) {echo $row13->expiry_date;} ?>">
                                                       <h6 style="color:red;"><?php echo $this->session->flashdata('expiry_date13')."<br>";?></h6>
                                                                                         <span
                                                                class="input-group-addon bg-custom b-0 text-white"><i
                                                                class="icon-calender"></i></span></div>
                                                    </div>
                                    </div>
                                    <div class="table-detail">
                                        <?php if(isset($row13->hidden_value)) {?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Edit Ads</button>
                                        <input type="hidden" name="adid" value="13" />
                                        <input type="hidden" name="action" value="edit" />
                                        <?php } else { ?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Add Ads</button>
                                        <input type="hidden" name="adid" value="13" />
                                        <input type="hidden" name="action" value="add" />
                                        <?php } ?>
                                        
                                        <!--<input type="submit" class="btn btn-purple waves-effect waves-light" name="submit" value="Add Ads" />-->
                                    </div>
                                    <div class="table-detail table-actions-bar">
                                        <?php if($row13) {?>
                                        <a href="<?php echo base_url();?>index.php/admin/manage_ad/confirm_header_ad_Delete/<?php echo $row13->id; ?>/<?php echo $row13->hidden_value; ?>" class="table-action-btn" title="Delete"><i class="md md-close"></i></a>
                                        <?php } ?>
                                    </div>
                                   
                                </div>
                                 <?php echo form_close(); ?>
                            </div>
                        	
                	</div>
                    
                    <div class="col-lg-12">
                        <div class="card-box m-b-10">
                        	<h5 style="color:#9933FF; border:3px solid green; width:11%; border-radius:5px;">Header Ad Slot 2</h5>
                            <div class="card-box"><h4 class="m-t-0 header-title"><b>Ad 2.1</b></h4> 
                                        <?php if($this->session->flashdata('error_message21')) { ?>
                                              <h5 style="color:red;"><?php echo $this->session->flashdata('error_message21'); ?></h5>
                                        <?php } ?>
                                        <?php if($this->session->flashdata('success_message21')) { ?>
                                              <h5 style="color:green;"><?php echo $this->session->flashdata('success_message21'); ?></h5>
                                        <?php } ?>
                                 <?php 	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                                echo form_open_multipart('',$attributes); ?>
                                <div class="table-box opport-box">
                                    
                                    <div class="table-detail">
                                        <?php if($row21) {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/<?php echo $row21->image;?>" height="80" width="80"/>
                                        <?php } else {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/no-ad.png" height="80" width="80"/>
                                        <?php }?>
                                    </div>
                                    <div class="table-detail">
                                        <div class="member-info"><h4 class="m-t-0"><b>
                                            <?php 	echo form_upload(
                                                            array(
                                                                'name' => 'ad21'
                                                            )
                                                    );
                                            ?>
                                            <h6 style="color:red;"><?php echo $this->session->flashdata('message21')."<br>";?></h6>
                                            </b></h4>
                                    </div>
                                    </div>
                                    
                                    <div class="table-detail">
    
                                                    <div class="col-sm-9">
                                                        <div class="input-group"><input type="text" class="form-control"
                                                                                        placeholder="Expiry Date"
                                                                                        id="datepicker-autoclose4" name="expiry_date21" value="<?php if($row21) {echo $row21->expiry_date;} ?>">
                                                       <h6 style="color:red;"><?php echo $this->session->flashdata('expiry_date11')."<br>";?></h6>
                                                                                         <span
                                                                class="input-group-addon bg-custom b-0 text-white"><i
                                                                class="icon-calender"></i></span></div>
                                                    </div>
                                    </div>
                                    <div class="table-detail">
                                        <?php if(isset($row21->hidden_value)) {?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Edit Ads</button>
                                        <input type="hidden" name="adid" value="21" />
                                        <input type="hidden" name="action" value="edit" />
                                        <?php } else { ?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Add Ads</button>
                                        <input type="hidden" name="adid" value="21" />
                                        <input type="hidden" name="action" value="add" />
                                        <?php } ?>
                                        
                                        <!--<input type="submit" class="btn btn-purple waves-effect waves-light" name="submit" value="Add Ads" />-->
                                    </div>
                                    <div class="table-detail table-actions-bar">
                                        <?php if($row21) {?>
                                        <a href="<?php echo base_url();?>index.php/admin/manage_ad/confirm_header_ad_Delete/<?php echo $row21->id; ?>/<?php echo $row21->hidden_value; ?>" class="table-action-btn" title="Delete"><i class="md md-close"></i></a>
                                        <?php } ?>
                                    </div>
                                   
                                </div>
                                 <?php echo form_close(); ?>
                            </div>
                            
                        <div class="card-box"><h4 class="m-t-0 header-title"><b>Ad 2.2</b></h4> 
                                        <?php if($this->session->flashdata('error_message22')) { ?>
                                              <h5 style="color:red;"><?php echo $this->session->flashdata('error_message22'); ?></h5>
                                        <?php } ?>
                                        <?php if($this->session->flashdata('success_message22')) { ?>
                                              <h5 style="color:green;"><?php echo $this->session->flashdata('success_message22'); ?></h5>
                                        <?php } ?>
                                 <?php 	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                                echo form_open_multipart('',$attributes); ?>
                                <div class="table-box opport-box">
                                    
                                    <div class="table-detail">
                                        <?php if($row22) {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/<?php echo $row22->image;?>" height="80" width="80"/>
                                        <?php } else {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/no-ad.png" height="80" width="80"/>
                                        <?php }?>
                                    </div>
                                    <div class="table-detail">
                                        <div class="member-info"><h4 class="m-t-0"><b>
                                            <?php 	echo form_upload(
                                                            array(
                                                                'name' => 'ad22'
                                                            )
                                                    );
                                            ?>
                                            <h6 style="color:red;"><?php echo $this->session->flashdata('message22')."<br>";?></h6>
                                            </b></h4>
                                    </div>
                                    </div>
                                    
                                    <div class="table-detail">
    
                                                    <div class="col-sm-9">
                                                        <div class="input-group"><input type="text" class="form-control"
                                                                                        placeholder="Expiry Date"
                                                                                        id="datepicker-autoclose5" name="expiry_date22" value="<?php if($row22) {echo $row22->expiry_date;} ?>">
                                                       <h6 style="color:red;"><?php echo $this->session->flashdata('expiry_date22')."<br>";?></h6>
                                                                                         <span
                                                                class="input-group-addon bg-custom b-0 text-white"><i
                                                                class="icon-calender"></i></span></div>
                                                    </div>
                                    </div>
                                    <div class="table-detail">
                                        <?php if(isset($row22->hidden_value)) {?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Edit Ads</button>
                                        <input type="hidden" name="adid" value="22" />
                                        <input type="hidden" name="action" value="edit" />
                                        <?php } else { ?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Add Ads</button>
                                        <input type="hidden" name="adid" value="22" />
                                        <input type="hidden" name="action" value="add" />
                                        <?php } ?>
                                        
                                        <!--<input type="submit" class="btn btn-purple waves-effect waves-light" name="submit" value="Add Ads" />-->
                                    </div>
                                    <div class="table-detail table-actions-bar">
                                        <?php if($row22) {?>
                                        <a href="<?php echo base_url();?>index.php/admin/manage_ad/confirm_header_ad_Delete/<?php echo $row22->id; ?>/<?php echo $row22->hidden_value; ?>" class="table-action-btn" title="Delete"><i class="md md-close"></i></a>
                                        <?php } ?>
                                    </div>
                                   
                                </div>
                                 <?php echo form_close(); ?>
                            </div>
                            
                        <div class="card-box"><h4 class="m-t-0 header-title"><b>Ad 2.3</b></h4> 
                                        <?php if($this->session->flashdata('error_message23')) { ?>
                                              <h5 style="color:red;"><?php echo $this->session->flashdata('error_message23'); ?></h5>
                                        <?php } ?>
                                        <?php if($this->session->flashdata('success_message23')) { ?>
                                              <h5 style="color:green;"><?php echo $this->session->flashdata('success_message23'); ?></h5>
                                        <?php } ?>
                                 <?php 	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                                echo form_open_multipart('',$attributes); ?>
                                <div class="table-box opport-box">
                                    
                                    <div class="table-detail">
                                        <?php if($row23) {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/<?php echo $row23->image;?>" height="80" width="80"/>
                                        <?php } else {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/no-ad.png" height="80" width="80"/>
                                        <?php }?>
                                    </div>
                                    <div class="table-detail">
                                        <div class="member-info"><h4 class="m-t-0"><b>
                                            <?php 	echo form_upload(
                                                            array(
                                                                'name' => 'ad23'
                                                            )
                                                    );
                                            ?>
                                            <h6 style="color:red;"><?php echo $this->session->flashdata('message23')."<br>";?></h6>
                                            </b></h4>
                                    </div>
                                    </div>
                                    
                                    <div class="table-detail">
    
                                                    <div class="col-sm-9">
                                                        <div class="input-group"><input type="text" class="form-control"
                                                                                        placeholder="Expiry Date"
                                                                                        id="datepicker-autoclose6" name="expiry_date23" value="<?php if($row23) {echo $row23->expiry_date;} ?>">
                                                       <h6 style="color:red;"><?php echo $this->session->flashdata('expiry_date23')."<br>";?></h6>
                                                                                         <span
                                                                class="input-group-addon bg-custom b-0 text-white"><i
                                                                class="icon-calender"></i></span></div>
                                                    </div>
                                    </div>
                                    <div class="table-detail">
                                        <?php if(isset($row23->hidden_value)) {?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Edit Ads</button>
                                        <input type="hidden" name="adid" value="23" />
                                        <input type="hidden" name="action" value="edit" />
                                        <?php } else { ?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Add Ads</button>
                                        <input type="hidden" name="adid" value="23" />
                                        <input type="hidden" name="action" value="add" />
                                        <?php } ?>
                                        
                                        <!--<input type="submit" class="btn btn-purple waves-effect waves-light" name="submit" value="Add Ads" />-->
                                    </div>
                                    <div class="table-detail table-actions-bar">
                                        <?php if($row23) {?>
                                        <a href="<?php echo base_url();?>index.php/admin/manage_ad/confirm_header_ad_Delete/<?php echo $row23->id; ?>/<?php echo $row23->hidden_value; ?>" class="table-action-btn" title="Delete"><i class="md md-close"></i></a>
                                        <?php } ?>
                                    </div>
                                   
                                </div>
                                 <?php echo form_close(); ?>
                            </div>
                        	
                	</div>
                    
                    <div class="col-lg-12">
                        <div class="card-box m-b-10">
                        	<h5 style="color:#9933FF; border:3px solid green; width:11%; border-radius:5px;">Header Ad Slot 3</h5>
                            <div class="card-box"><h4 class="m-t-0 header-title"><b>Ad 3.1</b></h4> 
                                        <?php if($this->session->flashdata('error_message31')) { ?>
                                              <h5 style="color:red;"><?php echo $this->session->flashdata('error_message31'); ?></h5>
                                        <?php } ?>
                                        <?php if($this->session->flashdata('success_message31')) { ?>
                                              <h5 style="color:green;"><?php echo $this->session->flashdata('success_message31'); ?></h5>
                                        <?php } ?>
                                 <?php 	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                                echo form_open_multipart('',$attributes); ?>
                                <div class="table-box opport-box">
                                    
                                    <div class="table-detail">
                                        <?php if($row31) {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/<?php echo $row31->image;?>" height="80" width="80"/>
                                        <?php } else {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/no-ad.png" height="80" width="80"/>
                                        <?php }?>
                                    </div>
                                    <div class="table-detail">
                                        <div class="member-info"><h4 class="m-t-0"><b>
                                            <?php 	echo form_upload(
                                                            array(
                                                                'name' => 'ad31'
                                                            )
                                                    );
                                            ?>
                                            <h6 style="color:red;"><?php echo $this->session->flashdata('message31')."<br>";?></h6>
                                            </b></h4>
                                    </div>
                                    </div>
                                    
                                    <div class="table-detail">
    
                                                    <div class="col-sm-9">
                                                        <div class="input-group"><input type="text" class="form-control"
                                                                                        placeholder="Expiry Date"
                                                                                        id="datepicker-autoclose7" name="expiry_date31" value="<?php if($row31) {echo $row31->expiry_date;} ?>">
                                                       <h6 style="color:red;"><?php echo $this->session->flashdata('expiry_date31')."<br>";?></h6>
                                                                                         <span
                                                                class="input-group-addon bg-custom b-0 text-white"><i
                                                                class="icon-calender"></i></span></div>
                                                    </div>
                                    </div>
                                    <div class="table-detail">
                                        <?php if(isset($row31->hidden_value)) {?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Edit Ads</button>
                                        <input type="hidden" name="adid" value="31" />
                                        <input type="hidden" name="action" value="edit" />
                                        <?php } else { ?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Add Ads</button>
                                        <input type="hidden" name="adid" value="31" />
                                        <input type="hidden" name="action" value="add" />
                                        <?php } ?>
                                        
                                        <!--<input type="submit" class="btn btn-purple waves-effect waves-light" name="submit" value="Add Ads" />-->
                                    </div>
                                    <div class="table-detail table-actions-bar">
                                        <?php if($row31) {?>
                                        <a href="<?php echo base_url();?>index.php/admin/manage_ad/confirm_header_ad_Delete/<?php echo $row31->id; ?>/<?php echo $row31->hidden_value; ?>" class="table-action-btn" title="Delete"><i class="md md-close"></i></a>
                                        <?php } ?>
                                    </div>
                                   
                                </div>
                                 <?php echo form_close(); ?>
                            </div>
                            
                        <div class="card-box"><h4 class="m-t-0 header-title"><b>Ad 3.2</b></h4> 
                                        <?php if($this->session->flashdata('error_message32')) { ?>
                                              <h5 style="color:red;"><?php echo $this->session->flashdata('error_message32'); ?></h5>
                                        <?php } ?>
                                        <?php if($this->session->flashdata('success_message32')) { ?>
                                              <h5 style="color:green;"><?php echo $this->session->flashdata('success_message32'); ?></h5>
                                        <?php } ?>
                                 <?php 	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                                echo form_open_multipart('',$attributes); ?>
                                <div class="table-box opport-box">
                                    
                                    <div class="table-detail">
                                        <?php if($row32) {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/<?php echo $row32->image;?>" height="80" width="80"/>
                                        <?php } else {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/no-ad.png" height="80" width="80"/>
                                        <?php }?>
                                    </div>
                                    <div class="table-detail">
                                        <div class="member-info"><h4 class="m-t-0"><b>
                                            <?php 	echo form_upload(
                                                            array(
                                                                'name' => 'ad32'
                                                            )
                                                    );
                                            ?>
                                            <h6 style="color:red;"><?php echo $this->session->flashdata('message32')."<br>";?></h6>
                                            </b></h4>
                                    </div>
                                    </div>
                                    
                                    <div class="table-detail">
    
                                                    <div class="col-sm-9">
                                                        <div class="input-group"><input type="text" class="form-control"
                                                                                        placeholder="Expiry Date"
                                                                                        id="datepicker-autoclose8" name="expiry_date32" value="<?php if($row32) {echo $row32->expiry_date;} ?>">
                                                       <h6 style="color:red;"><?php echo $this->session->flashdata('expiry_date32')."<br>";?></h6>
                                                                                         <span
                                                                class="input-group-addon bg-custom b-0 text-white"><i
                                                                class="icon-calender"></i></span></div>
                                                    </div>
                                    </div>
                                    <div class="table-detail">
                                        <?php if(isset($row32->hidden_value)) {?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Edit Ads</button>
                                        <input type="hidden" name="adid" value="32" />
                                        <input type="hidden" name="action" value="edit" />
                                        <?php } else { ?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Add Ads</button>
                                        <input type="hidden" name="adid" value="32" />
                                        <input type="hidden" name="action" value="add" />
                                        <?php } ?>
                                        
                                        <!--<input type="submit" class="btn btn-purple waves-effect waves-light" name="submit" value="Add Ads" />-->
                                    </div>
                                    <div class="table-detail table-actions-bar">
                                        <?php if($row32) {?>
                                        <a href="<?php echo base_url();?>index.php/admin/manage_ad/confirm_header_ad_Delete/<?php echo $row32->id; ?>/<?php echo $row32->hidden_value; ?>" class="table-action-btn" title="Delete"><i class="md md-close"></i></a>
                                        <?php } ?>
                                    </div>
                                   
                                </div>
                                 <?php echo form_close(); ?>
                            </div>
                            
                        <div class="card-box"><h4 class="m-t-0 header-title"><b>Ad 3.3</b></h4> 
                                        <?php if($this->session->flashdata('error_message33')) { ?>
                                              <h5 style="color:red;"><?php echo $this->session->flashdata('error_message33'); ?></h5>
                                        <?php } ?>
                                        <?php if($this->session->flashdata('success_message33')) { ?>
                                              <h5 style="color:green;"><?php echo $this->session->flashdata('success_message33'); ?></h5>
                                        <?php } ?>
                                 <?php 	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
                                                echo form_open_multipart('',$attributes); ?>
                                <div class="table-box opport-box">
                                    
                                    <div class="table-detail">
                                        <?php if($row33) {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/<?php echo $row33->image;?>" height="80" width="80"/>
                                        <?php } else {?>
                                        <img src="<?php echo base_url();?>uploads/header_panel/no-ad.png" height="80" width="80"/>
                                        <?php }?>
                                    </div>
                                    <div class="table-detail">
                                        <div class="member-info"><h4 class="m-t-0"><b>
                                            <?php 	echo form_upload(
                                                            array(
                                                                'name' => 'ad33'
                                                            )
                                                    );
                                            ?>
                                            <h6 style="color:red;"><?php echo $this->session->flashdata('message33')."<br>";?></h6>
                                            </b></h4>
                                    </div>
                                    </div>
                                    
                                    <div class="table-detail">
    
                                                    <div class="col-sm-9">
                                                        <div class="input-group"><input type="text" class="form-control"
                                                                                        placeholder="Expiry Date"
                                                                                        id="datepicker-autoclose9" name="expiry_date33" value="<?php if($row33) {echo $row33->expiry_date;} ?>">
                                                       <h6 style="color:red;"><?php echo $this->session->flashdata('expiry_date33')."<br>";?></h6>
                                                                                         <span
                                                                class="input-group-addon bg-custom b-0 text-white"><i
                                                                class="icon-calender"></i></span></div>
                                                    </div>
                                    </div>
                                    <div class="table-detail">
                                        <?php if(isset($row33->hidden_value)) {?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Edit Ads</button>
                                        <input type="hidden" name="adid" value="33" />
                                        <input type="hidden" name="action" value="edit" />
                                        <?php } else { ?>
                                        <button type="submit" class="btn btn-purple waves-effect waves-light" name="submit">Add Ads</button>
                                        <input type="hidden" name="adid" value="33" />
                                        <input type="hidden" name="action" value="add" />
                                        <?php } ?>
                                        
                                        <!--<input type="submit" class="btn btn-purple waves-effect waves-light" name="submit" value="Add Ads" />-->
                                    </div>
                                    <div class="table-detail table-actions-bar">
                                        <?php if($row33) {?>
                                        <a href="<?php echo base_url();?>index.php/admin/manage_ad/confirm_header_ad_Delete/<?php echo $row33->id; ?>/<?php echo $row33->hidden_value; ?>" class="table-action-btn" title="Delete"><i class="md md-close"></i></a>
                                        <?php } ?>
                                    </div>
                                   
                                </div>
                                 <?php echo form_close(); ?>
                            </div>
                        	
                	</div>
                        
                </div>
                    
                
             
            	
            
            
             </div>
		</div> 
</div>

