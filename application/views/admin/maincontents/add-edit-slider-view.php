<div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"><h4 class="page-title"><?php echo $action; ?> Portfolio</h4>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url();?>index.php/admin">ADS Furniture</a></li>
                            <li><a href="<?php echo base_url();?>index.php/admin/manage_slider">Manage Portfolio</a></li>
                            <li class="active"><?php echo $action; ?> Portfolio</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box"><h4 class="m-t-0 header-title"><b></b></h4>                           

                            <div class="row">
                                <div class="col-md-8">
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
									   		$slider_title = $row->slider_title;
											$slider_description = $row->slider_description;
									 	}
									 	else
									 	{
										 	$slider_title = ''; 
											$slider_description = '';
									 	}
									?>
                                    
                                   		<div class="form-group"><label
                                                class="col-md-4 control-label">Image Title</label>
										<?php  ?>
                                            <div class="col-md-8"><input type="text" class="form-control"
                                                                          placeholder="Enter Portfolio Image Title" name="slider_title" value="<?php if($action == 'Edit'){echo $slider_title;} else {echo set_value('slider_title');} ?>">
                                                                   <?php echo form_error('slider_title'); ?>       
                                                                          </div>
                                        </div>
                                        <div class="form-group"><label
                                                class="col-md-4 control-label">Image Description</label>
										<?php  ?>
                                            <div class="col-md-8">
                                            
                                           	<textarea class="form-control" placeholder="Enter Portfolio Image Description" name="slider_description">
                                            <?php if($action == 'Edit'){echo $slider_description;} else {echo set_value('slider_description');} ?>
                                            </textarea>
                                                                   <?php echo form_error('slider_description'); ?>       
                                                                          </div>
                                        </div>
                                        <div class="form-group">
                                        	<label class="col-md-4 control-label">
                                            	Portfolio Image
                                        	</label>
                                           
                                            <div class="col-md-8">
                                            <?php if($action == 'Edit') { ?>
                                            <img src="<?php echo base_url();?>uploads/slider/<?php echo $slider_image;?>" height="80" width="80"/>
                                            <?php }?>
                                           <br /><br />
                                            <input type="file" class="filestyle" data-buttonname="btn-white" name="slider_image">
                                           	<h6 style="color:red;"><?php echo $this->session->flashdata('message')."<br>";?></h5>
											</div>
                                            </div>                                   
                                        		<!--<input name="submit" type="submit" class="btn btn-purple waves-effect waves-light" value="<?php echo $action; ?> Slider" />-->
                                                
                                                
												<button name="submit" type="submit" class="btn btn-purple waves-effect waves-light"><?php echo $action; ?> Portfolio</button>
                                                <input type="hidden" name="slider1" value="1" />
										
                                   <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
            </div>
        </div>