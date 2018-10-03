<?php
/**
 * Template Name: Home2
 *
 * Description: A custom template for displaying a fullwidth layout with no sidebar.
 *
 * @package JackalopePro
 * @version 1.5
 */

get_header(); ?>
<?php get_template_part( 'template-parts/header/site', 'nav' ); ?>


<main id="swup" class="site-content-contain">
<p>this is home.php</p>
<?php get_template_part( 'template-parts/header/blog', 'hero' ); ?>
	<div id="content" class="a-fade site-content">
		<div class="case-study wrap">
			<?php if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) : the_post();?>
					<section class="a-fade case-study-box">
						<a class="text-container" href="
						<?php the_permalink(); ?>">
							<h2 class="case-study-title">
								<span><?php echo get_the_title(); ?></span>
							</h2>

							<h3 class="case-study-subheading">
								<span><?php echo get_field( "case_study_subheading" ); ?></span>
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
		<!-- case -study-wrap-->
	</div>
	<!--site content-->
</main>
<!-- main swup-->

<?php get_footer();
