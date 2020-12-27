<?php
/**
 * Template part US: navigation
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package unsere-schule
 */

?>

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
