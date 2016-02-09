<div class="container">
                <div class="">
                    <div class="pull-left">
                        <button class="button-menu-mobile open-left"><i class="ion-navicon"></i></button>
                        <span class="clearfix"></span></div>
                    <form role="search" class="navbar-left app-search pull-left hidden-xs"><input type="text"
                                                                                                  placeholder="Search..."
                                                                                                  class="form-control">
                        <a href=""><i class="fa fa-search"></i></a></form>
                    <ul class="nav navbar-nav navbar-right pull-right">
                    	<li class="hidden-xs" style="color:#FFFFFF;">                            
                                <a href="<?php echo base_url();?>index.php/admin/user" class="right-bar-toggle waves-effect waves-light">
                                <strong>
                                Welcome <?php
                                if($this->session->userdata('is_admin_logged_in') == 1)
                                {
                                    echo $this->session->userdata('username');
                                }
                                ?>
                                </strong> 
                                </a>
                                   
                        </li>
                        <li class="hidden-xs"><a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i
                                class="icon-size-fullscreen"></i></a></li>
                        
                        <li class="dropdown"><a href="" class="dropdown-toggle profile" data-toggle="dropdown"
                                                aria-expanded="true">                                                
                                                <!--<img src="<?php echo base_url();?>/assets/admin/images/users/avatar-1.jpg"
                                                                          alt="user-img" class="img-circle">-->
                                           <img src="<?php echo base_url();?>/assets/images/logo.jpg"
                                                                          alt="user-img" class="img-circle">                               
                                                                          </a>
                            <ul class="dropdown-menu">
                               
                                <li><a href="<?php echo base_url();?>index.php/admin/user/change_password"><i class="ti-settings m-r-5"></i> Change Password</a></li>
                                <li><a href="<?php echo base_url();?>index.php/admin/user/logout"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>