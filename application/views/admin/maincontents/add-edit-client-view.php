<div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"><h4 class="page-title"><?php echo $action; ?> Client</h4>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url();?>index.php/admin">Caravan</a></li>
                            <li><a href="<?php echo base_url();?>index.php/admin/manage_client">Manage Client</a></li>
                            <li class="active"><?php echo $action; ?> Client</li>
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
									   		//$category_id = $row->category_id;
											$slider_image = $row->slider_image;
											/*$project_title = $row->project_title;
											$feature1 = $row->feature1;
											$feature2 = $row->feature2;
											$dimension = $row->dimension;
											$description = $row->description;*/
									 	}
									 	else
									 	{
										 	//$category_id = $this->input->post('category_id'); 
											$slider_image = '';
											/*$project_title = '';
											$feature1 = '';
											$feature2 = '';
											$dimension = '';
											$description = '';*/
									 	}
									?>
                                      <div class="form-group"><label
                                                class="col-md-3 control-label">Client Image</label>
										<?php  ?>
                                            <div class="col-md-9">
                                            	<?php if($action == 'Edit') { ?>
											<img src="<?php echo base_url();?>uploads/client_image/<?php echo $row->slider_image;?>" height="75" width="75" /><br /><br />
												<?php } ?>
                                                <input type="file" class="filestyle" data-buttonname="btn-white" name="slider_image" />             
                                                <h6 style="color:red;"><?php echo $this->session->flashdata('message')."<br>";?></h5>  
                                             </div>
                                        </div>
                                        
                                        <?php if($action == 'Add') 
											{ ?>
												<button type="submit" class="btn btn-purple waves-effect waves-light">Add Client</button>
                                                <input type="hidden" name="slider1" value="1" />
										<?php }
											else if($action == 'Edit')
											{ ?>
												<button type="submit" class="btn btn-purple waves-effect waves-light">Edit Client</button>
                                                <input type="hidden" name="slider1" value="1" />
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