
<script>
$(document).ready(function() {
setInterval(function()
	{
		 $('#message').hide();
	}, 3000);
});
</script>

<div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12"><h4 class="page-title">Manage Hotel</h4>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url();?>index.php/admin">The Hotels Of India</a></li>
                            <li class="active">Manage Hotel</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
					<?php echo anchor('admin/manage_hotel/add', 'Add Hotel', 'title="Add Hotel" class="btn btn-default waves-effect waves-light"');?>
                        <div class="card-box">
                        	<div id="message">
								<?php if($this->session->flashdata('success_message')) { ?>
                                        <h5 style="color: green;font-size: 20px;font-weight: 600;margin-left: 279px;margin-top: -5px;"><?php echo $this->session->flashdata('success_message'); ?></h5>
                                <?php } ?>
                                
                                <?php if($this->session->flashdata('error_message')) { ?>
                                        <h5 style="color: red;font-size: 20px;font-weight: 600;margin-left: 279px;margin-top: -5px;"><?php echo $this->session->flashdata('error_message'); ?></h5>
                                <?php } ?>
                             </div>   

							<?php if($rows) { ?>
                            <table id="datatable" class="table table-striped table-bordered">
                            	
                                <thead>
                                <tr>
                                	<th>Sl No.</th>
                                    <th>State Name</th>
                                    <th>City name</th>
                                    <th>Hotel name</th>
                                    <th>Image</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Action</th>                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i =1; ?>
								<?php foreach($rows as $row) {	?>
                                <tr>
                                	<td><?php echo $i++; ?></td>
                                    <td><?php echo $row->state_name; ?></td>
                                    <td><?php echo $row->city_name; ?></td>
                                    <td><?php echo $row->hotel_name; ?></td>
                                    <td><img src="<?php echo base_url();?>uploads/<?php echo $row->hotel_image;?>" height="50" width="50"/></td>
                                    <td><?php echo $row->username; ?></td>
                                    <td><?php echo $row->actual_password; ?></td>
                                    <td>
                                    	<div class="col-sm-6 col-md-4 col-lg-3"><p><a href="<?php echo base_url();?>index.php/admin/manage_hotel/view/<?php echo $row->id; ?>" title="View"><i class="md md-visibility"></i></a></p></div>
                                    	<div class="col-sm-6 col-md-4 col-lg-3"><p><a href="<?php echo base_url();?>index.php/admin/manage_hotel/edit/<?php echo $row->id; ?>" title="Edit"><i class="md md-mode-edit"></i></a></p></div>
                                        <div class="col-sm-6 col-md-4 col-lg-3"><p><a href="<?php echo base_url();?>index.php/admin/manage_hotel/confirmDelete/<?php echo $row->id; ?>" title="Delete"><i class="md md-delete"></i></a></p></div>
                                        
                                        <?php if($row->published == 1)  { ?>
                                        <div class="col-sm-6 col-md-4 col-lg-3"><p><a href="<?php echo base_url();?>index.php/admin/manage_hotel/deactive/<?php echo $row->id; ?>" title="Deactivate"><i class="md md-radio-button-on"></i></a></p></div>
                                        <?php } else if($row->published == 0)  { ?>
                                        <div class="col-sm-6 col-md-4 col-lg-3"><p><a href="<?php echo base_url();?>index.php/admin/manage_hotel/active/<?php echo $row->id; ?>" title="Activate"><i class="md md-radio-button-off"></i></a></p></div>
                                        <?php } ?>
                                    </td>                                    
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                            <?php }
									else
									{ ?>
									<p>No records found.</p>
							<?php 	}  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
  