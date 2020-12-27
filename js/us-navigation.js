jQuery(document).ready(function () {

    // display all parent elements of active nav-item, flip parent elements arrows down,
    // check if actual navbar item or corresponding child item is selected
    if(jQuery('a[aria-current="page"]').length == 1){
        jQuery('a[aria-current="page"]').parents().show();
        jQuery('.current-menu-ancestor > div > .navSub').addClass('arrowDown');
    }else{
        jQuery('.current-page-ancestor > .expandable > a').parents().show();
        jQuery('.current-page-ancestor').parents('ul').siblings('.expandable').children('.navSub').addClass('arrowDown');
    }

    // click nav arrow
    jQuery(document).on('click', '.navSub', function () {

        jQuery(this).closest('.menu-item-has-children').toggleClass('open');

        jQuery(this).parent().siblings('.sub-menu').length
            ? jQuery(this).parent().siblings('.sub-menu').slideToggle()
            : jQuery(this).parent().siblings('.children').slideToggle();

        if (jQuery(this).hasClass('arrowDown')) {
            jQuery(this).removeClass('arrowDown');
        } else {
            jQuery(this).addClass('arrowDown');
        }

    });

    // click hamburger menu
    jQuery('.navbar-toggle').on('click', function (event) {
        event.preventDefault();
        jQuery('#sidebar').toggleClass('active');
        jQuery('body').toggleClass('noscroll');
        jQuery('#overlay').toggleClass('active');
    });
    // click overlay
    jQuery('#overlay').on('click', function() {
        jQuery('#sidebar').toggleClass('active');
        jQuery('body').toggleClass('noscroll');
        jQuery('#overlay').toggleClass('active');
    });

    // click button - code input form
    jQuery('#searchBtn').on('click', function () {
        jQuery("#myRedirectForm").submit();
    });


    // button - scroll to top
    window.onscroll = function () { scrollFunction() };
    jQuery('#btnToTop').on('click', function () {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    });

    btnToTop = document.getElementById("btnToTop");
    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            btnToTop.style.display = "block";
        } else {
            btnToTop.style.display = "none";
        }
    }
  

});


