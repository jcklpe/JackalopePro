<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage JackalopePro
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<main id="swup" class="site-content-contain">
	<div id="content" class="a-fade site-content">
	<div class="case-study wrap">

<!-- <?php if ( have_posts() ) : ?>
	<header class="page-header">
		<h1> Case Studies</h1>
	</header>
	<!-- .page-header -->
<!--<?php endif; ?> -->

<!-- <div id="primary" class="content-area">
	<main id="main" class="site-main" role="main"> -->

	<?php
	if ( have_posts() ) : ?>
		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

			 //get_template_part( 'template-parts/post/content', get_post_format() ); ?>
			<section class="case-study-box">
				<a class="text-container" href="
				<?php the_permalink(); ?>">
					<h2 class="case-study-title">
						<span><?php echo get_the_title(); ?></span>
					</h2>
					<h3 class="case-study-subheading">
						<span>
							<?php echo get_field( "case_study_subheading" ); ?>
						</span>
					</h3>
				</a>

				<div  class="overlay" style="<?php echo get_field( "overlay_background_grad" ); ?>"></div>
				<img src="<?php $imageLocation = get_the_post_thumbnail_url(get_the_ID(),'large'); echo $imageLocation; ?>">
			</section>

		<?php endwhile;
		else : ?>
			<p>There are no posts</p>
	<?php endif; ?>
</div>

</div>
</main>


<?php

get_footer();
