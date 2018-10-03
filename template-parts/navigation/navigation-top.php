<?php
/**
 * Displays top navigation
 *
 * @package JackalopePro
 * @since 1.0
 * @version 1.2
 */
?>

<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'twentyseventeen' ); ?>">

	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>

</nav>
<!-- #site-navigation -->
