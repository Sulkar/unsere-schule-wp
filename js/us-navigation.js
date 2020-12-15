jQuery( document ).ready(function() {
    
    //var svgRightArrow = '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>';
    //var svgDownArrow = '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-down-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/></svg>';

    // display all parent elements of active nav-item
    jQuery('a[aria-current="page"]').parents().show();

    //jQuery('a[aria-current="page"]').closest('#menu-item-206').find('.navSub').addClass('arrowDown');
                             
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


