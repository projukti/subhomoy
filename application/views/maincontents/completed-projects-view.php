<?php if($completed_projects) { 
foreach($completed_projects as $completed_project) { 
?>
                    <article class="gallerycontainer">
                        <!-- POST IMAGE -->
                        <div class="galleryimage projectimage" data-image="<?php echo base_url(); ?>uploads/gallery_image/<?php echo $completed_project->images; ?>">

                        </div>
                        <!-- POST CONTENT -->
                        <div class="gallerycontent">
                            <h4><a href=""><?php echo $completed_project->project_title; ?></a></h4>
                            <p><?php echo $completed_project->description; ?></p>
                            <a href="" class="readmore-button">View Project</a>
                        </div>
                    </article>
           <?php } } ?>         
                    <div class="blogpager">
                    
                    <?php
						$third_segment = $this->uri->segment(3);
						if($third_segment == 0) 
						{ 
						$link_next = 3;
					?>
                        <!--<div class="previous">                      	
                            
                        <a href="<?php echo base_url(); ?>index.php/home/completed_projects/<?php //echo $link; ?>" class="button">&#8249; Older Projects</a>
                           
                        </div>-->
                        <div class="next">
                         <a href="<?php echo base_url(); ?>index.php/home/completed_projects/<?php echo $link_next; ?>" class="button">Newer Projects &#8250;</a>                        </div>
                    <?php } else if($third_segment != 0){ 
					if($third_segment == 3)
					{ $link_prev = ''; 
					  $link_next = $third_segment+3;
					}
					else
					{
					  $link_prev = $third_segment-3; 
					  $link_next = $third_segment+3;
					}
					?>
                    	<div class="previous">                      	
                            
                        <a href="<?php echo base_url(); ?>index.php/home/completed_projects/<?php echo $link_prev; ?>" class="button">&#8249; Older Projects</a>
                           
                        </div>
                        <div class="next">
                        	
                            <a href="<?php echo base_url(); ?>index.php/home/completed_projects/<?php echo $link_next; ?>" class="button">Newer Projects &#8250;
                            
                            </a>
                            
                        </div>
                    <?php } ?>
                    </div>