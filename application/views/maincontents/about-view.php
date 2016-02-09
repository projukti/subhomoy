<h3>Our History</h3>
                    <p>Started work from the year 2000. Started with a single 5L interior work for an residential flat at New Alipore and presently the turnover is more than crores. Manpower presently is more than 70heads with architects and engineers and technical supervisors working constantly to make a product with maximum accuracy.</p>
                    <hr/>
                    <h3>We Excel in Innovative Designs</h3>
                    <p><img src="<?php echo base_url();?>assets/images/photos/about.png" style="margin: 0px 20px 20px 0px; float: left;"/>  It is because we are committed to present a quality assured product and commitment with the help of architects, engineers and achieve the satisfaction of clients at competitive rates. In each project there is always an impression on latest architectural design.</p>
                    <hr/>
                    <h3>Our Clients</h3>
                    <!-- OUR PARTNERS CAROUSEL -->
                    <div id="partners" class="owl-carousel">
                        <!-- LOGO -->
                        <?php 
						if($client_images) { 
						foreach($client_images as $client_image) { 
						?>
                        <div class="oriel-carousel">
                            <a href="#">
                                <img src="<?php echo base_url();?>uploads/client_image/<?php echo $client_image->slider_image; ?>" alt="" />
                            </a>
                        </div>
                       <?php
						}						
						}
					   ?> 
                    </div>