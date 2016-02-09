<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $head; ?>
	
</head>
<body>
<div id="container">
	<div class="header">
		<?php echo $header;	?>
		Welcome <strong><?php
		if($this->session->userdata('is_admin_logged_in') == 1)
		{
			echo $this->session->userdata('username');
		}
		else
		{
			
		}
		?></strong>
	</div>
	<!--<div class="left_bar">	
		<ul>
			<li><?php echo anchor('admin/user/success', 'Dashboard', array('title' => 'Dashboard', 'class' => 'left-menu')); ?></li>
			<li><?php echo anchor('admin/category', 'Category', array('title' => 'Category', 'class' => 'left-menu')); ?></li>
			<li><?php echo anchor('', 'Products', array('title' => 'Products', 'class' => 'left-menu')); ?></li>
			<li><?php echo anchor('', 'Order', array('title' => 'Order', 'class' => 'left-menu')); ?></li>
			<li><?php echo anchor('admin/user/logout', 'Logout', array('title' => 'Logout', 'class' => 'left-menu')); ?></li>
		</ul>
	</div>-->
	
	<div class="maincontent">	
			<?php echo $maincontent; ?>
	</div>
	<br>
	<div class="footer">	
            	<?php echo $footer;	?>
	</div>
</div>

</body>
</html>