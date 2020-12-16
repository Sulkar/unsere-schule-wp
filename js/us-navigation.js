jQuery( document ).ready(function() {
    
    // display all parent elements of active nav-item
    jQuery('a[aria-current="page"]').parents().show();

    // set arrow down to all navSub of selected elements
    jQuery('.current-menu-ancestor > div > div > svg').addClass('arrowDown');
    
    // click nav arrow
    jQuery(document).on('click','.navSub',function(){
        
        var menuToggle = jQuery( this ).closest('.menu-item-has-children');

            jQuery( this ).parent().siblings('.sub-menu').length
                ? jQuery( this ).parent().siblings('.sub-menu').slideToggle()
                : jQuery( this ).parent().siblings('.children').slideToggle();
    
            menuToggle.toggleClass('open');
            //jQuery( this ).attr( 'aria-expanded', menuToggle.hasClass('open') );
            
            if(jQuery(this).find('svg').hasClass('arrowDown')){
                jQuery(this).find('svg').removeClass('arrowDown');
            }else{
                jQuery(this).find('svg').addClass('arrowDown');
            }

    });
    
    // click hamburger menu
    jQuery('#btn-sidebar-collapse').on('click', function () {
        jQuery('#sidebar').toggleClass('active');
    });
    

});


