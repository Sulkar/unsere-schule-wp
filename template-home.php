<?php

/* Template Name: Template Home */

?>

<!-- header -->
<?php get_header('simple'); ?> <!-- <div class="wrapper" -->

<!-- header nav --> 
<?php get_template_part( 'template-parts/content', 'header-nav' ); ?>

<!-- Sidebar -->
<?php get_template_part( 'template-parts/content', 'navigation' ); ?>

<!-- Page Content -->
<div id="content">
	<div id="overlay"> </div>

	<main id="primary" class="site-main">
  
  <?php
    
    while ( have_posts() ) :
      the_post();      
      get_template_part( 'template-parts/content', 'page' );
    endwhile;

    /*$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;*/
	  $paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;

    $args = array(
      'post_type' => 'page',
      'post__not_in' => array(9,636,828),
      'posts_per_page' => 12,
      'paged' => $paged
    );

    $customQuery = new WP_Query($args);
    if($customQuery->have_posts() ): 
      echo '<br>';
      echo '<div class="us-grid">';
      while($customQuery->have_posts()) :
        //display post
        $customQuery->the_post();        
        //echo '<li>';        
        echo '<a href="'.get_page_link().'">';
                      
        echo '<div class="image-wrap">';
        if ( has_post_thumbnail() ) {
          // get featured page image in thumbnail size
          $post = get_post( $post );
          echo get_the_post_thumbnail($post->ID, 'medium');
        }
        echo '</div>';
        echo '<h4 class="us-grid-title">'.get_the_title().'</h4>';        
        echo '</a>';



        
      endwhile; 
      echo '</div>';
    endif; 

    wp_reset_query();

    if (function_exists("start_us_pagination")) {
		  start_us_pagination($customQuery->max_num_pages, 3); 
    }

	?>

	</main><!-- #main -->

</div> <!-- content -->

<?php get_footer('simple-home'); ?>