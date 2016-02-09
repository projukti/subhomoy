<div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"><h4 class="page-title"><?php echo $action; ?> Offer Text</h4>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url();?>index.php/admin">ADS Furniture</a></li>
                            <li><a href="<?php echo base_url();?>index.php/admin/manage_result">Manage Offer Text</a></li>
                            <li class="active"><?php echo $action; ?> Offer Text</li>
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
											echo form_open('',$attributes); ?>
                                    <?php
									if(isset($row))
										{   
											$subjectCode = $row->subjectCode;
											$appeared = $row->appeared;
											//$passed = $row->passed;
									 	}
									 	else
									 	{
											$subjectCode = $this->input->post('subjectCode');
											$appeared = '';
											//$passed = '';
									 	}
									?>                                       
                                        <div class="form-group"><label
                                                class="col-md-4 control-label">Offer Text Date</label>
										<?php  ?>
                                            <div class="col-md-8">
                                             <input type="text" class="form-control" placeholder="Enter Offer Date" id="datepicker-autoclose1" name="subjectCode" value="<?php if($action == 'Edit'){echo $subjectCode;} else {echo set_value('subjectCode');} ?>">                             
                                                                   <?php echo form_error('subjectCode'); ?>       
                                                                          </div>
                                        </div>
                                        <div class="form-group"><label
                                                class="col-md-4 control-label">Offer Text</label>
										<?php  ?>
                                            <div class="col-md-8"><input type="text" class="form-control"
                                                                          placeholder="Enter Offer" name="appeared" value="<?php if($action == 'Edit'){echo $appeared;} else {echo set_value('appeared');} ?>">
                                                                   <?php echo form_error('appeared'); ?>       
                                                                          </div>
                                        </div>
                                        <!--<div class="form-group"><label
                                                class="col-md-4 control-label">Location</label>
										<?php  ?>
                                            <div class="col-md-8"><input type="text" class="form-control"
                                                                          placeholder="Enter Location" name="passed" value="<?php if($action == 'Edit'){echo $passed;} else {echo set_value('passed');} ?>">
                                                                   <?php echo form_error('passed'); ?>       
                                                                          </div>
                                        </div>-->
                                       
                                       
                                        <?php if($action == 'Add') 
											{ ?>
												<button type="submit" class="btn btn-purple waves-effect waves-light">Add Offer Text</button>
										<?php }
											else if($action == 'Edit')
											{ ?>
												<button type="submit" class="btn btn-purple waves-effect waves-light">Edit Offer Text</button>
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