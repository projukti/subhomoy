<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $head; ?>
	
</head>
<body>
<div id="container">
	<div class="header">
		<?php echo $header;	?>
	</div>
	<!--<div class="left_bar">	
		<ul>
			<li><?php echo anchor('', 'Dashboard', array('title' => 'Dashboard', 'class' => 'left-menu')); ?></li>
			<li><?php echo anchor('', 'Categoty', array('title' => 'Categoty', 'class' => 'left-menu')); ?></li>
			<li><?php echo anchor('', 'Products', array('title' => 'Products', 'class' => 'left-menu')); ?></li>
			<li><?php echo anchor('', 'Order', array('title' => 'Order', 'class' => 'left-menu')); ?></li>
			<li><?php echo anchor('', 'Logout', array('title' => 'Logout', 'class' => 'left-menu')); ?></li>
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