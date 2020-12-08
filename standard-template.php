<?php
/**
 * 
 * Template Name: Unsere Schule
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package unsere-schule
 */
?>

<?php get_header('simple'); ?>

<!-- Sidebar -->
<nav id="sidebar">
	<div id="sidebar-header">
		<h3>unsere-schule.org</h3>
	</div>
<?php
	wp_nav_menu(
		array(
			'container_class' => 'meinContainer',
			'menu_class'      => 'list-unstyled components',
			'theme_location' => 'menu-1',
			'walker'         => new WP_Custom_Nav_Walker(),
		)
	);
?>
</nav>

<!-- Page Content -->
<div id="content">
	
	<div id="btn-sidebar-collapse">	
		<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
		</svg>
	</div>
	
	<main id="primary" class="site-main">
		<?php
			while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
			comments_template();
			endif;

			endwhile; // End of the loop.
		?>

	</main><!-- #main -->

</div>

</div> <!-- wrapper -->

<?php get_footer('simple'); ?>
