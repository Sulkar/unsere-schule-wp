<?php

/* custom unsere-schule.org navwalker for sidebar navigation
******************************************/

class usSidebarNavwalker extends Walker_Nav_Menu {

    /*function start_lvl( &$output, $depth = 0, $args = array() ) {
        $myNavIcon = '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>';

        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='expandable'>
            <span class='navSub arrowRight'>$myNavIcon</span>
            </div>
            <ul class='sub-menu'>\n";
    }*/

    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $myNavIcon = '<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-caret-right-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/></svg>';
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent
            <ul class='sub-menu'>\n";
    }
    
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }

    /*
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }*/

}

?>