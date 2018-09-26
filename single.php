<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package JackalopePro
 * @since 1.0
 * @version 1.1
 */

get_header(); //testd?>
<?php get_template_part( 'template-parts/header/site', 'nav' ); ?>

<main id="swup" class="site-content-contain">
<?php get_template_part( 'template-parts/header/blog', 'hero' ); ?>
	<a href="<?php $url = home_url(); echo $url; ?>" class="a-fade"> home</a>
	<div id="content" class="a-fade site-content">
		<div class="wrap">
			<div id="primary" class="content-area">
				<div id="main" class="site-main" role="main">

					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();
							get_template_part( 'template-parts/post/content', get_post_format() );
							// post navigation template part
						endwhile; // End of the loop.?>
				</div>
				<!-- site-main-->
			</div>
			<!-- primary-->
		</div>
		<!-- wrap-->
	</div>
	<!--site- content-->
	<?php get_template_part( 'template-parts/footer/case_study', 'links' ); ?>
</main>
<!-- main swup-->

<?php get_footer();
