
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
                                <?php if($row) { ?>
                                   <table width="902" class="table table-striped table-bordered" id="datatable">               	
                                	 <tbody>
                                            <tr>
                                                <td>State Name</td>
                                                <td><?php echo $row->state_name; ?></td>                                                                   
                                            </tr>
                                            <tr>
                                                <td>City Name</td>
                                                <td><?php echo $row->city_name; ?></td>                                                                     
                                            </tr>
                                            <tr>
                                                <td>Username</td>
                                                <td><?php echo $row->username; ?></td>                                                                     
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td><?php echo $row->actual_password; ?></td>                                                                     
                                            </tr>                                    
                                            <tr>
                                                <td>Hotel name</td>
                                                <td><?php echo $row->hotel_name; ?></td>                                                                     
                                            </tr>
                                            <tr>
                                                <td>Email Address</td>
                                                <td><?php echo $row->email_id; ?></td>                                                                     
                                            </tr>
                                            <tr>
                                                <td>Contact Person</td>
                                                <td><?php echo $row->contact_person; ?></td>                                                                     
                                            </tr>
                                            <tr>
                                                <td>Contact Number</td>
                                                <td><?php echo $row->contact_number; ?></td>                                                                     
                                            </tr>
                                             <tr>
                                                <td>Package starts from (Rs.)</td>
                                                <td><?php echo $row->package_starts_from; ?></td>                                                                     
                                            </tr>
                                            <tr>
                                                <td>Exclusive</td>
                                                <td><?php echo $row->exclusive == 1 ? 'Yes':'No'; ?></td>                                                                     
                                            </tr>
                                             <tr>
                                                <td>Hotel Image</td>
                                                <td><img src="<?php echo base_url();?>uploads/<?php echo $row->hotel_image;?>" width="75" height="75" /></td>                                                                     
                                            </tr>
                                            <tr>
                                                <td>site link</td>
                                                <td><?php echo $row->site_link; ?></td>                                                                     
                                            </tr>
                                             <tr>
                                                <td>Short description</td>
                                                <td><?php echo $row->short_description; ?></td>                                                                     
                                            </tr>
                                            <tr>
                                                <td>Air conditioning</td>
                                                <td><?php echo $row->air_conditioning == 1 ? 'Yes':'No'; ?></td>                                                                     
                                            </tr>
                                             <tr>
                                                <td>Bar</td>
                                                <td><?php echo $row->bar == 1 ? 'Yes':'No'; ?></td>                                                                     
                                            </tr>
                                            <tr>                                                 
                                                <td>Car parking</td>
                                                <td><?php echo $row->car_parking == 1 ? 'Yes':'No'; ?></td>                                                                    
                                            </tr>
                                            <tr>
                                                <td>Car/ATV rental</td>
                                                <td><?php echo $row->atv_rentals == 1 ? 'Yes':'No'; ?></td>                                                                     
                                            </tr>
                                             <tr>
                                                <td>Complimentary breakfast</td>
                                                <td><?php echo $row->complimentary_breakfast == 1 ? 'Yes':'No'; ?></td>                                                                     
                                            </tr>
                                            <tr>
                                                <td>Doctor on call</td>
                                                <td><?php echo $row->doctor_on_call == 1 ? 'Yes':'No'; ?></td>                                                                     
                                            </tr>
                                             <tr>
                                                <td>Foreign exchange conversion</td>
                                                <td><?php echo $row->foreign_exchange_conversion == 1 ? 'Yes':'No'; ?></td>                                                                     
                                            </tr>
                                            <tr>
                                                <td>Gymnasium</td>
                                                <td><?php echo $row->gymnasium == 1 ? 'Yes':'No'; ?></td>                                                                     
                                            </tr>
                                             <tr>
                                                <td>In-room ISD calling facility</td>
                                                <td><?php echo $row->isd_calling_facility == 1 ? 'Yes':'No'; ?></td>                                                                     
                                            </tr>
                                            <tr>
                                                <td>Pick up and drop-in facility</td>
                                                <td><?php echo $row->pickup_dropin_facility == 1 ? 'Yes':'No'; ?></td>                                                                     
                                            </tr>
                                             <tr>
                                                <td>Restaurant</td>
                                                <td><?php echo $row->restaurant == 1 ? 'Yes':'No'; ?></td>                                                                     
                                            </tr>
                                            <tr>
                                                <td>Spa/sauna</td>
                                                <td><?php echo $row->spa_sauna == 1 ? 'Yes':'No'; ?></td>                                                                     
                                            </tr>
                                             <tr>
                                                <td>Swimming pool</td>
                                                <td><?php echo $row->swimming_pool == 1 ? 'Yes':'No'; ?></td>                                                                     
                                            </tr>
                                            <tr>
                                                <td>Wi-fi</td>
                                                <td><?php echo $row->wifi == 1 ? 'Yes':'No'; ?></td>                                                                     
                                            </tr>
                                            <tr>
                                                <td>Published</td>
                                                <td><?php echo $row->published == 1 ? 'Yes':'No'; ?></td>                                                                     
                                            </tr>
                                        </tbody>
                            </table>
                            <?php } ?>      
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