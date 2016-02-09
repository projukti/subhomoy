
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
                    <div class="col-sm-12"><h4 class="page-title">Manage Finance</h4>
                        <ol class="breadcrumb">
                            <li><a href="<?php echo base_url();?>index.php/admin">The Hotels Of India</a></li>
                            <li class="active">Manage Finance</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
					<?php echo anchor('admin/manage_finance/add', 'Add Finance', 'title="Add Finance" class="btn btn-default waves-effect waves-light"');?>
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
                                	<th>SL NO.</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Amount</th>
                                    <th>Action</th>                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i =1; ?>
								<?php foreach($rows as $row) {	?>
                                <tr>
                                	<td><?php echo $i++; ?></td>
                                    <td><?php echo $row->start_date; ?></td>
                                    <td><?php echo $row->end_date; ?></td>
                                    <td><?php echo $row->amount; ?></td>
                                    <td>
                                    	<div class="col-sm-6 col-md-4 col-lg-3"><p><a href="<?php echo base_url();?>index.php/admin/manage_finance/edit/<?php echo $row->id; ?>" title="Edit"><i class="md md-mode-edit"></i></a></p></div>
                                        <div class="col-sm-6 col-md-4 col-lg-3"><p><a href="<?php echo base_url();?>index.php/admin/manage_finance/confirmDelete/<?php echo $row->id; ?>" title="Delete"><i class="md md-delete"></i></a></p></div>
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
   
  