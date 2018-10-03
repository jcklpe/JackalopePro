<?php
/**
 * Template Name: Full Width
 *
 * Description: A custom template for displaying a fullwidth layout with no sidebar.
 *
 * @package JackalopePro
 */
get_header(); ?>
<?php get_template_part( 'template-parts/header/site', 'nav' ); ?>

<main id="swup" class="wrap">
	<div id="primary" class="content-area">
		<div id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'template-parts/page/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			endwhile; // End of the loop.
			?>

		</div>
		<!-- #main -->
	</div>
	<!-- #primary -->
</main>
<!-- .wrap -->

<?php get_footer();

//TODO: convert About Me into modal that goes in the footer.
//TODO: change nav to trigger modal.