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

<div id="swup" class="wrap">

<?php if ( have_posts() ) : ?>
	<header class="page-header">
		<h1> Case Studies</h1>
	</header>
	<!-- .page-header -->
<?php endif; ?>

<!-- <a id="primary" class="content-area">
	<main id="main" class="site-main" role="main"> -->

	<?php
	if ( have_posts() ) : ?>
		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

			/*
			* Include the Post-Format-specific template for the content.
			* If you want to override this in a child theme, then include a file
			* called content-___.php (where ___ is the Post Format name) and that will be used instead.
			*/
			// get_template_part( 'template-parts/post/content', get_post_format() ); ?>
<section class="a-fade">
	<div class="text-container">
		<h2 class="case-study-title">
			<?php echo get_the_title(); ?>
		</h2>

		<h3 		class="case-study-subheading">
			<span>
				<?php //$field = 'case_study_subheading'; echo tag_stripped_field($field); ?>
			</span>
		</h3>

	</div>

	<a href="<?php the_permalink(); ?>" class="overlay" style="background: linear-gradient(to right, rgba(253, 252, 71, 0.7), rgba(36, 254, 65, 0.7));"> Learn more
	</a>

</section>
			<?php

		endwhile;



	else : ?>
		<p>There are no posts</p>
	<?php endif; ?>

	<!-- </main> -->
</div>


<?php

get_footer();
