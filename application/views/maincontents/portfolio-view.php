<!-- Page title -->
            <div class="page-title">
                <h1>Portfolio</h1>

                <!-- BREADCRUMBS -->
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a><span class="divider"></span></li>
                    <li class="active">Portfolio</li>
                </ul>
            </div>
<!-- //Page title -->

<!-- Project area -->
       <section class="project">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-wrapper clearfix">

                            <div id="grid">
								<?php if($rows) { 
									  foreach($rows as $row) { 
								?>
                                <div class="item blue col-md-3 col-sm-6 col-xs-12 fix">
                                    <div class="project-item">
                                        <div class="post-thumbnail element">
                                            <img src="<?php echo base_url(); ?>uploads/slider/<?php echo $row->slider_image; ?>" alt="<?php echo $row->slider_title; ?>">

                                            <div class="element-overly">Overly</div>

                                            <a data-rel="prettyPhoto" href="<?php echo base_url(); ?>uploads/slider/<?php echo $row->slider_image; ?>"
                                               class="element-lightbox"><i class="fa fa-search-plus"></i></a>

                                        </div>

                                        <div class="project-details">
                                            <h2><a href="#"><?php echo $row->slider_title; ?></a></h2>

                                            <p><?php echo $row->slider_description; ?></p>

                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="clearfix"></div>
								<?php } 
								
								}?>
                                <!--<div class="item green col-md-3 col-sm-6 col-xs-12 fix">
                                    <div class="project-item">
                                        <div class="post-thumbnail element">
                                            <img src="<?php echo base_url(); ?>assets/img/portfolio/portfolio2.jpg" alt="Demo Image">

                                            <div class="element-overly">Overly</div>

                                            <a data-rel="prettyPhoto" href="img/portfolio/portfolio2.jpg"
                                               class="element-lightbox"><i class="fa fa-search-plus"></i></a>


                                        </div>

                                        <div class="project-details">
                                            <h2><a href="#">Vestibulum iaculis</a></h2>

                                            <p>Leo cursus a nibh Vestibulum interdum sit nisl est lorem augue.
                                                Adipiscing
                                                hendrerit cursus et at nunc id natoque vitae</p>

                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="clearfix"></div>-->

                            </div>
                            <!-- /grid -->
                        </div>
                        <!-- /box-wrapper -->

                    </div>
                </div>
            </div>
        </section>
<!--	//shuffle  our project	-->
