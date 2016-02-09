<div class="main-icon-container">
                        <!-- ICON BLOCK -->
                        <div class="icon-block">
                            <div class="icon-container">
                                <a href="#"><i class="flaticon-brush20"></i></a>
                            </div>
                            <div class="icon-text">
                                <h3>Painting</h3>
                                <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus.</p>
                            </div>
                        </div>
                        <!-- ICON BLOCK -->
                        <div class="icon-block">
                            <div class="icon-container">
                                <a href="#"><i class="flaticon-armchair4"></i></a>
                            </div>
                            <div class="icon-text">
                                <h3>Furniture</h3>
                                <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus.</p>
                            </div>
                        </div>
                        <!-- ICON BLOCK -->
                        <div class="icon-block">
                            <div class="icon-container">
                                <a href="#"><i class="flaticon-click5"></i></a>
                            </div>
                            <div class="icon-text">
                                <h3>Consulting</h3>
                                <p>Voluptate illum dolore ita ipsum, quid deserunt singulis, labore admodum ita multos malis ea nam nam tamen fore amet. Vidisse quid incurreret ut ut possumus.</p>
                            </div>
                        </div>
                    </div>
     <hr/>
     <h3>Latest Projects</h3>
     <!-- LATEST PROJECTS CAROUSEL -->
     <div id="latestprojects" class="owl-carousel">
                        <!-- POST -->
                        <?php if($latest_projects) { 
						foreach($latest_projects as $latest_project) { 
						?>
                        <figure class="oriel-carousel">
                            <!-- POST IMAGE -->
                            <a href="#" class="ext-link">
                                <img src="<?php echo base_url(); ?>uploads/gallery_image/<?php echo $latest_project->images; ?>" alt="" />
                            </a>
                            <!-- POST CONTENT -->
                            <figcaption>
                                <div>
                                    <h5><a href="single-project.html"><?php echo $latest_project->project_title; ?></a></h5>
                                    <hr/>
                                    <p><?php echo $latest_project->description; ?></p>
                                    <a href="#" class="readmore-button">View Project</a>
                                </div>
                            </figcaption>
                        </figure>
                      <?php }} ?>  
                       
                    </div>
     <hr/>
     <h3>What Our Clients Say</h3>
<!-- TESTIMONIALS -->
<div id="testimonials">
                        <!-- TESTIMONIAL 1 -->
                        <div class="testimonial">
                            <p class="testimonial-text">Commodo aute singulis proident eu se laboris. Malis iudicem ne singulis, nisi ita aut summis laboris. Ex ut varias pariatur, laboris irure irure consequat magna, aliqua mandaremus qui varias labore ubi aut illum ipsum fore iudicem. Commodo aute singulis proident eu se laboris. Malis iudicem ne singulis, nisi ita aut summis laboris. Ex ut varias pariatur, laboris irure irure consequat magna, aliqua mandaremus qui varias labore ubi aut illum ipsum fore iudicem.</p>
                            <div class="testimonial-image">
                                <img src="<?php echo base_url(); ?>assets/images/photos/test1.jpg" alt="" />
                                <h5 class="testimonial-name">John Doe</h5>
                                <p>Themeforest</p>
                            </div>
                        </div>
                        <!-- TESTIMONIAL 2 -->
                        <div class="testimonial">
                            <p class="testimonial-text">Sunt cohaerescant cernantur nisi probant. Doctrina esse quem laboris quorum e e incurreret graviterque. In et velit multos culpa hic enim ea admodum quo quorum, nam se adipisicing, mentitum varias noster ut velit. Ab malis laboris fidelissimae. Iudicem ipsum in mandaremus philosophari an a fore illum in possumus. Sed sint ingeniis tractavissent aut ubi sed illum occaecat, legam et fabulas, est duis. Quorum tempor commodo se incididunt est philosophari.</p>
                            <div class="testimonial-image">
                                <img src="<?php echo base_url(); ?>assets/images/photos/test2.jpg" alt="" />
                                <h5 class="testimonial-name">Michael Smith</h5>
                                <p>Codecanyon</p>
                            </div>
                        </div>
                        <!-- TESTIMONIAL 3 -->
                        <div class="testimonial">
                            <p class="testimonial-text">Quorum tempor commodo se incididunt est cillum, fugiat o nescius sed quae, est an fugiat eram quis, ad aut fugiat anim amet o excepteur amet occaecat, voluptate sunt nostrud an a de sint eram multos. Qui magna ipsum quorum vidisse, ne lorem sed fore in si culpa velit lorem singulis, malis probant et amet minim, mentitum aute quibusdam ullamco, ipsum quibusdam quo ullamco, te fabulas sempiternum do o dolor quorum esse ingeniis. Duis philosophari probant.</p>
                            <div class="testimonial-image">
                                <img src="<?php echo base_url(); ?>assets/images/photos/test3.jpg" alt="" />
                                <h5 class="testimonial-name">Sam Black</h5>
                                <p>Videohive</p>
                            </div>
                        </div>
                        <!-- TESTIMONIAL 4 -->
                        <div class="testimonial">
                            <p class="testimonial-text">Aut veniam deserunt ullamco, a enim cupidatat despicationes, se arbitror ita mentitum ad de ut illustriora nam mentitum malis aliquip doctrina est occaecat concursionibus ad nescius, ita se dolore esse tamen do singulis arbitrantur a proident. Ut nam graviterque, ne amet ad sunt ne do fore ullamco, cillum voluptatibus eiusmod labore cernantur, excepteur ne aliqua litteris, multos senserit hic nostrud te anim exercitation cernantur quid aliquip, aliquip ubi ita mentitum hic.</p>
                            <div class="testimonial-image">
                                <img src="<?php echo base_url(); ?>assets/images/photos/test4.jpg" alt="" />
                                <h5 class="testimonial-name">Brad Stone</h5>
                                <p>Photodune</p>
                            </div>
                        </div>
                        <!-- TESTIMONIAL 5 -->
                        <div class="testimonial">
                            <p class="testimonial-text">Eu quis litteris senserit in occaecat anim nisi consequat multos. Commodo fugiat eu possumus firmissimum, malis praesentibus cernantur amet possumus, eu non labore tamen veniam eu non ita praesentibus sed nam ubi culpa fugiat noster, velit pariatur eiusmod ab et expetendis sed commodo qui malis iis voluptate. Quis ita mentitum hic et quem nescius proident, sed lorem te fugiat, sunt mandaremus id transferrem. Aliqua sed possumus a an malis.</p>
                            <div class="testimonial-image">
                                <img src="<?php echo base_url(); ?>assets/images/photos/test5.jpg" alt="" />
                                <h5 class="testimonial-name">Jack White</h5>
                                <p>Audiojungle</p>
                            </div>
                        </div>
</div>