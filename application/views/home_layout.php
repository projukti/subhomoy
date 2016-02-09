<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
			
			if($this->uri->segment(2) == '')
			{
			echo $head; 
			}
			else if($this->uri->segment(2) == 'about')
			{
			echo $head_inner;	
			}
			else if($this->uri->segment(2) == 'completed_projects')
			{
			echo $head_inner;	
			}
			else if($this->uri->segment(2) == 'ongoing_projects')
			{
			echo $head_inner;	
			}
			else if($this->uri->segment(2) == 'enquiry')
			{
			echo $head_inner;	
			}
			?>
</head>

<body>
    <!-- PAGE LOADING -->
    <div id="page-loading"></div>
    <!-- HEADER -->
    <header id="header" class="nav-container">
        <?php echo $header; ?>
    </header>
    <div class="clear"></div>
    <!-- BG FILTERS -->
    <div id="left-bg"></div>
    <div id="right-bg"></div>
    <!-- MAIN CONTAINER -->
    <main id="site-container">
        <!-- SLIDER CONTAINER -->
        
            <?php 
			
			if($this->uri->segment(2) == '')
			{
			echo $banner; 
			}
			else if($this->uri->segment(2) == 'about')
			{
			echo $banner_inner;	
			}
			else if($this->uri->segment(2) == 'completed_projects')
			{
			echo $banner_inner;	
			}
			else if($this->uri->segment(2) == 'ongoing_projects')
			{
			echo $banner_inner;	
			}
			else if($this->uri->segment(2) == 'enquiry')
			{
			echo $banner_inner;	
			}
			?>
       
        <!-- PAGE CONTAINER -->
        <div class="page-block">
            <!-- MAIN PAGE CONTENT -->
            <div class="page-block-right">
                <div class="page-block-inner">
                    <?php echo $maincontent; ?>

                </div>
            </div>
            <!-- SIDEBAR -->
            <aside class="page-block-left">
                <div class="page-block-inner black">
                    <?php echo $menu; ?>

                </div>
            </aside>
        </div>
    </main>
    <!-- FOOTER -->
    <footer id="footer">
        <?php echo $footer; ?>
    </footer>
    <!-- JS FILES -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui-custom.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/nerveslider.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/colorbox.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jflickrfeed.min.js"></script>
    <!-- SLIDER -->
    
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/backstretch.min.js"></script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/accordion.js"></script>
    
    
    
    
   
    
    <script type="text/javascript">
        jQuery(window).load(function () {
            "use strict";
            jQuery("body").find('#home-slider').show();
            jQuery('.ns_slideContent').find('div span').addClass('animated fadeInRight');
            jQuery("#home-slider").nerveSlider({
                sliderAutoPlay: true,
                slideTransitionDelay: 5000,
                sliderWidth: "100%",
                sliderHeight: "100%",
                sliderHeightAdaptable: false,
                slidesDraggable: false,
                sliderResizable: false,
                sliderKeepAspectRatio: false,
                slideTransition: "slide",
                slideTransitionSpeed: 1000,
                slideTransitionEasing: "easeInOutQuart",
                showDots: false,
                slideTransitionStart: function () {
                    jQuery('.ns_slideContent').find('div span').fadeOut();
                    jQuery('.ns_slideContent').find('div span').removeClass('animated fadeInRight');
                },
                slideTransitionComplete: function () {
                    jQuery('.ns_slideContent').find('div span').fadeIn();
                    jQuery('.ns_slideContent').find('div span').addClass('animated fadeInRight');
                }
            });
        });
    </script>
    <!-- LATEST NEWS CAROUSEL -->
    <script type="text/javascript">
        jQuery(window).load(function () {
            jQuery("#latestprojects").owlCarousel({
                items: 1,
                margin: 16,
                dots: false,
                smartSpeed: 800,
                navText: [' ', ' '],
                nav: true,
                loop: false,
                navRewind: false,
                lazyLoad: true,
                responsive: {
                    480: {
                        items: 1
                    },
                    640: {
                        items: 2
                    }
                }
            });
        });
    </script>
    <!-- TESTIMONIALS CAROUSEL -->
    <script type="text/javascript">
        jQuery(window).load(function () {
            jQuery("#testimonials").show();
            jQuery("#testimonials").owlCarousel({
                items: 1,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                dots: true,
                autoHeight: true,
                margin: 16,
                smartSpeed: 800,
                navText: ['', ''],
                nav: false,
                loop: true,
                animateIn: 'fadeIn',
                animateOut: 'fadeOut'
            });
        });
    </script>
    
    <!-- PAGE TITLE BG IMAGE -->
    <script type="text/javascript">
        jQuery(document).ready(function () {
            "use strict";
            if (jQuery(window).width() > 480) {
                jQuery('.page-title-container').backstretch("<?php echo base_url(); ?>assets/images/photos/about.jpg");
            }
        });
    </script>
    <!-- LATEST NEWS CAROUSEL -->
    <script type="text/javascript">
        jQuery(window).load(function () {
            jQuery("#latestnews").owlCarousel({
                items: 1,
                margin: 16,
                dots: false,
                smartSpeed: 800,
                navText: [' ', ' '],
                nav: true,
                loop: false,
                navRewind: false,
                lazyLoad: true,
                responsive: {
                    480: {
                        items: 1
                    },
                    640: {
                        items: 2
                    },
                    900: {
                        items: 3
                    },
                    1025: {
                        items: 2
                    },
                    1170: {
                        items: 3
                    }
                }
            });
        });
    </script>
    <!-- OUR TEAM CAROUSEL -->
    <script type="text/javascript">
        jQuery(window).load(function () {
            "use strict";
            jQuery("#ourteam").owlCarousel({
                items: 1,
                margin: 16,
                dots: false,
                smartSpeed: 800,
                navText: [' ', ' '],
                nav: true,
                loop: false,
                navRewind: false,
                lazyLoad: true,
                responsive: {
                    480: {
                        items: 1
                    },
                    640: {
                        items: 2
                    },
                    900: {
                        items: 3
                    },
                    1025: {
                        items: 2
                    },
                    1170: {
                        items: 3
                    }
                }
            });
        });
    </script>
    <!-- OUR PARTNERS CAROUSEL -->
    <script type="text/javascript">
        jQuery(window).load(function () {
            "use strict";
            jQuery("#partners").owlCarousel({
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                items: 1,
                margin: 16,
                dots: false,
                smartSpeed: 800,
                navText: [' ', ' '],
                nav: true,
                loop: true,
                lazyLoad: true,
                responsive: {
                    340: {
                        items: 2
                    },
                    640: {
                        items: 3
                    },
                    1170: {
                        items: 4
                    }
                }
            });
        });
    </script>
    
    <!-- POST IMAGE LOOP -->
    <script type="text/javascript">
        jQuery(document).ready(function () {
            "use strict";
            jQuery(".galleryimage").each(function () {
                if (jQuery(this).attr('data-image')) {
                    jQuery(this).backstretch(jQuery(this).data('image'));
                }
            });
        });
    </script>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>
</body>

</html>