<?php

/* Template Name: Template Sitemap */

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

	<div class="breadcrumb">
		<?php echo get_breadcrumb(get_post()->ID); ?>
	</div>

	<main id="primary" class="site-main">
  
  <?php

    while ( have_posts() ) :
      the_post();      
      get_template_part( 'template-parts/content', 'page' );
    endwhile;

    $args = array(
      'post_type' => 'page',
      'posts_per_page' => -1,
      'order' => 'ASC',
      'orderby' => 'title'
    );

    $customQuery = new WP_Query($args);
    if($customQuery->have_posts() ): 
      echo '<figure class="myTable"><table><tr><th style="text-align:center;">Nr.</th><th style="text-align:center;">Page Code</th><th>Titel der Seite</th></tr>';
      $nr = 0;
      while($customQuery->have_posts()) :
        $nr++;
        $customQuery->the_post();
        $pageCode = getPageCode(get_the_ID());
        echo '<tr><td style="text-align:center;">'.$nr.'</td><td style="text-align:center;">'.$pageCode.'</td><td><a href="'.get_page_link().'">'.get_the_title().'</a></td></tr>';
      endwhile; 
      echo '</table></figure>';
    endif; 

    wp_reset_query();


	?>

	</main><!-- #main -->

</div> <!-- content -->

<?php get_footer('simple'); ?>