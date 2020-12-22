<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package unsere-schule
 */

?>

<?php get_header('simple'); ?> <!-- <div class="wrapper" -->

<!-- header nav --> 
<header id="header-nav" class="navbar">
	<a href="<?php echo home_url(); ?>">	
		<div class="sidebar-button">
			<svg class="navbar-logo" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="school" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="#F7F7EF" d="M0 224v272c0 8.84 7.16 16 16 16h80V192H32c-17.67 0-32 14.33-32 32zm360-48h-24v-40c0-4.42-3.58-8-8-8h-16c-4.42 0-8 3.58-8 8v64c0 4.42 3.58 8 8 8h48c4.42 0 8-3.58 8-8v-16c0-4.42-3.58-8-8-8zm137.75-63.96l-160-106.67a32.02 32.02 0 0 0-35.5 0l-160 106.67A32.002 32.002 0 0 0 128 138.66V512h128V368c0-8.84 7.16-16 16-16h96c8.84 0 16 7.16 16 16v144h128V138.67c0-10.7-5.35-20.7-14.25-26.63zM320 256c-44.18 0-80-35.82-80-80s35.82-80 80-80 80 35.82 80 80-35.82 80-80 80zm288-64h-64v320h80c8.84 0 16-7.16 16-16V224c0-17.67-14.33-32-32-32z"></path></svg>
		</div>
		<span class="site-name">unsere-schule.org</span>
	</a>
	<div class="searchbox">
		<input id="tempCode" type="number" placeholder="Code..." onKeyPress="if(this.value.length==8) return false;" />
		<span id="searchBtn">
		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#F7F7EF" class="bi bi-search" viewBox="0 0 16 16">
			<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
			<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
			</svg>
		</span>
	</div>
</header>

<!-- Sidebar -->
<nav id="sidebar">
	
	<div id="sidebar-body">
	<!-- custom navmenu -->
		<?php
			wp_nav_menu(
				array(
					'container_class' => 'meinContainer',
					'menu_class'      => 'list-unstyled components',
					'theme_location' => 'menu-1',
					'walker'         => new usSidebarNavwalker(),
				)
			);
		?>
	</div>
</nav>

<!-- Page Content -->

<div id="content">
	<span id="postID"> 
		<?php echo getPageCode(get_post()->ID);	?>
	</span>
	
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
</div> <!-- content -->


<?php get_footer('simple'); ?>
