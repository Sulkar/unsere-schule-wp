<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package unsere-schule 
 */

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

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
			comments_template();
			endif;

			endwhile; // End of the loop.
		?>

	</main><!-- #main -->

	<!-- page navigation footer -->
	<?php get_template_part( 'template-parts/content', 'navigation-footer' ); ?>

</div> <!-- content -->

<?php get_footer('simple'); ?>