/* ADJUST WIDTHS */

var adjustWidths = function () {
    "use strict";
    var outerww = jQuery('#site-container').find(".page-block-left").offset().left;
    var pageblock = jQuery('#site-container').find(".page-block").width();
    var pageblockleft = jQuery('#site-container').find(".page-block-left").width();
    jQuery('#site-container').find(".page-block-right").width(pageblock - pageblockleft);
    var pageblockright = jQuery('#site-container').find(".page-block-right").width();
    jQuery("#left-bg").width(pageblockleft + outerww);
    jQuery("#right-bg").width(pageblockright + outerww);
    jQuery("#slider-filter").width(pageblockleft + outerww);
    jQuery("#page-title-bg").width(pageblockleft + outerww);
    jQuery('#home-slider').find(".ns_slideContent").width(pageblockright + outerww);
    jQuery('#page-title-text').find("h1").css('margin-left', pageblockleft);
};

/* MAIN MENU */

var mobileMenu = function () {
    "use strict";
    jQuery('#header').find(".nav li a").each(function () {
        if (jQuery(this).next().length > 0) {
            jQuery(this).addClass("parent");
        }
    });
    jQuery('#header').find(".toggleMenu").on('click', function (e) {
        e.preventDefault();
        jQuery(this).toggleClass("active");
        jQuery('#header').find(".nav").toggle();
    });
};

var adjustMenu = function () {
    "use strict";
    var ww = document.body.clientWidth;
    if (ww <= 1024) {
        jQuery('#header').find(".toggleMenu").css("display", "inline-block");
        if (!jQuery('#header').find(".toggleMenu").hasClass("active")) {
            jQuery('#header').find(".nav").hide();
        } else {
            jQuery('#header').find(".nav").show();
        }
        jQuery('#header').find(".nav li").unbind('mouseenter mouseleave');
        jQuery('#header').find(".nav li a.parent").unbind('click').on('click', function (e) {
            e.preventDefault();
            jQuery(this).parent("li").toggleClass("hover");
        });
    } else if (ww > 1024) {
        jQuery('#header').find(".toggleMenu").css("display", "none");
        jQuery('#header').find(".nav").show();
        jQuery('#header').find(".nav li").removeClass("hover");
        jQuery('#header').find(".nav li a").unbind('click');
        jQuery('#header').find(".nav li").unbind('mouseenter mouseleave').on('mouseenter mouseleave', function () {
            jQuery(this).toggleClass('hover');
            jQuery(this).toggleClass('activelink');
            jQuery(this).find("ul").toggleClass('animatedfast');
            jQuery(this).find("ul").toggleClass('fadeInDown');
        });
        jQuery('#header').find(".nav ul li").unbind('mouseenter mouseleave').on('mouseenter mouseleave', function () {
            jQuery(this).toggleClass('hover');
            jQuery(this).find("ul li").toggleClass('animatedfast');
            jQuery(this).find("ul li").toggleClass('fadeInLeft');
        });
    }
};

/* SIDEBAR DROPDOWN MENU */

jQuery('#site-container').find(".submenu ul > li > a").on('click', function () {
    "use strict";
    var checkElement = jQuery(this).next();

    if ((checkElement.is('ul')) && (checkElement.is(':visible'))) {
        checkElement.slideUp(300);
        jQuery(this).removeClass("has-sub2");
        jQuery(this).addClass("has-sub");
        checkElement.removeClass("animated-fast fadeInLeft");
        checkElement.addClass("animated-fast fadeOut");
    }

    if ((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
        jQuery('#site-container').find('.submenu ul ul:visible').slideUp(300);
        checkElement.slideDown(100);
        jQuery('#site-container').find('.submenu > ul > li:has(ul) > a').removeClass("has-sub2");
        jQuery('#site-container').find('.submenu > ul > li:has(ul) > a').addClass("has-sub");
        jQuery(this).addClass("has-sub2");
        checkElement.removeClass("animated-fast fadeOut");
        checkElement.addClass("animated-fast fadeInLeft");
    }

    if (checkElement.is('ul')) {
        return false;
    } else {
        return true;
    }
});

/* ICON EFFECT */

jQuery('#site-container').find(".icon-container").on({
    mouseenter: function () {
        "use strict";
        jQuery(this).addClass('animated tada');
    }, 
    mouseleave: function () {
        "use strict";
        jQuery(this).removeClass('animated tada');
    }
});

/* CAROUSEL FIX */

jQuery('#site-container').find('a').on('dragstart', function (event) {
    "use strict";
    event.preventDefault();
});

/* INFO BOX */

jQuery('#site-container').find('.oriel-message-close').on("click", function () {
    "use strict";
    jQuery(this).parent().fadeOut();
});

/* EVENTS */

jQuery(window).load(function () {
    "use strict";
    jQuery('#header').css('pointer-events', 'auto');
    jQuery('#site-container').find(".owl-prev:empty").parent().hide();
});

jQuery(document).ready(function () {
    "use strict"; 
    jQuery('#site-container').find('.submenu > ul > li:has(ul) > a').addClass("has-sub");
    adjustWidths();
    jQuery('#page-loading').fadeOut();
    mobileMenu();
    adjustMenu();
});

jQuery(window).on('resize orientationchange', function () {
    "use strict";
    adjustWidths();
    adjustMenu();
});