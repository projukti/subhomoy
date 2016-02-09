<div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"><h4 class="page-title"><?php echo $action; ?> Finance</h4>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url();?>index.php/admin">The Hotels Of India</a></li>
                            <li><a href="<?php echo base_url();?>index.php/admin/manage_finance">Manage Finance</a></li>
                            <li class="active"><?php echo $action; ?> Finance</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <div class="row">
                                
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="p-20">
                                        <?php if($this->session->flashdata('error_message')) { ?>
                                          <h5 style="color:red;"><?php echo $this->session->flashdata('error_message'); ?></h5>
                                    	<?php } ?>
                                    	<?php if($this->session->flashdata('success_message')) { ?>
                                          <h5 style="color:green;"><?php echo $this->session->flashdata('success_message'); ?></h5>
                                    	<?php } ?>
                                    	<?php 	$attributes = array('class' => 'form-horizontal', 'id' => 'myform');
											echo form_open('',$attributes); ?>
                                            
                                            <?php
											if(isset($row))
												{   
													$state_id = $row->hotel_id;
													$start_date = $row->start_date;
													$end_date = $row->end_date;
													$amount = $row->amount;
												}
												else
												{
													$state_id = $this->input->post('state_id'); 
													$start_date = $this->input->post('start_date');
													$end_date = $this->input->post('end_date');
													$amount = $this->input->post('amount');
												}
											?>
                                           <div class="form-group"><label class="col-sm-4 control-label">Hotel Name</label>
    
                                                <div class="col-sm-8">
                                                    <?php 
                                                        $js = 'class="form-control"';
                                                        echo form_dropdown('state_id',$categories,$state_id,$js);
                                                        echo form_error('state_id'); 
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="control-label col-sm-4">Start Date</label>

                                                <div class="col-sm-8">
                                                    <div class="input-group"><input type="text" class="form-control"
                                                                                    placeholder="mm/dd/yyyy"
                                                                                    id="datepicker-autoclose" name="start_date" value="<?php if($action == 'Edit'){echo $start_date;} else {echo set_value('start_date');} ?>">
                                                                                    <?php echo form_error('start_date'); ?> 
                                                                                     <span
                                                            class="input-group-addon bg-custom b-0 text-white"><i
                                                            class="icon-calender"></i></span></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label class="control-label col-sm-4">End
                                                Date</label>

                                                <div class="col-sm-8">
                                                    <div class="input-group"><input type="text" class="form-control"
                                                                                    placeholder="mm/dd/yyyy"
                                                                                    id="datepicker-autoclose1" name="end_date" value="<?php if($action == 'Edit'){echo $end_date;} else {echo set_value('end_date');} ?>"> 
                                                                                    <?php echo form_error('end_date'); ?> 
                                                                                    <span
                                                            class="input-group-addon bg-custom b-0 text-white"><i
                                                            class="icon-calender"></i></span></div>
                                                </div>
                                            </div>
                                            <div class="form-group"><label
                                                class="col-md-4 control-label">Amount</label>
										<?php  ?>
                                            <div class="col-md-8"><input type="text" class="form-control"
                                                                          placeholder="Enter city name" name="amount" value="<?php if($action == 'Edit'){echo $amount;} else {echo set_value('amount');} ?>">
                                                                   <?php echo form_error('amount'); ?>       
                                                                          </div>
                                        </div>
                                             <?php if($action == 'Add') 
											{ ?>
												<button type="submit" class="btn btn-purple waves-effect waves-light">Add Finance</button>
										<?php }
											else if($action == 'Edit')
											{ ?>
												<button type="submit" class="btn btn-purple waves-effect waves-light">Edit Finance</button>
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
</div>