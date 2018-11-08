<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JackalopePro
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="transition-move-down entry-content">
		<?php
	the_content();

	wp_link_pages(array(
		'before' => '<div class="page-links">' . __('Pages:', 'twentyseventeen'),
		'after' => '</div>',
	));
	?>
	</div>
	<!-- .entry-content -->
</article>
<!-- #post-## -->
