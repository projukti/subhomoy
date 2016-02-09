<div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"><h4 class="page-title"><?php echo $action; ?> Slider</h4>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url();?>index.php/admin">The Hotels Of India</a></li>
                            <li><a href="<?php echo base_url();?>index.php/admin/manage_slider">Manage Slider</a></li>
                            <li class="active"><?php echo $action; ?> Slider</li>
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
                                   
                                        <div class="form-group">
                                        	<label class="control-label">
                                            	Home Page Image Slider
                                        	</label>
                                            <br />
                                            <h5 style="color:red;">Minimum Width: 1920<br />
                                            Minimum Height: 1080</h5>
                                            <?php if($action == 'Edit') { ?>
                                            <img src="<?php echo base_url();?>uploads/slider/<?php echo $slider_image;?>" height="80" width="80"/>
                                            <?php }?>
                                            <br />
                                            <input type="file" class="filestyle" data-buttonname="btn-white" name="slider_image">
                                           	<h6 style="color:red;"><?php echo $this->session->flashdata('message')."<br>";?></h5>

                                            </div>                                   
                                        		<input name="submit" type="submit" class="btn btn-purple waves-effect waves-light" value="<?php echo $action; ?> Slider" />
                                                
                                                
												<!--<button name="submit" type="submit" class="btn btn-purple waves-effect waves-light"><?php echo $action; ?> Slider</button>-->
										
                                   <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                
            </div>
        </div>