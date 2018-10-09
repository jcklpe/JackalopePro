<?php
/**
 * Displays footer widgets if assigned
 *
 * @package  JackalopePro
 * @since 1.0
 * @version 1.0
 */

?>
<section class="case-study-links">
<?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
	if ($tags) {

		$first_tag = $tags[0]->term_id;
		$args=array(
			'tag__in' => array($first_tag),
			'post__not_in' => array($post->ID),
			'posts_per_page'=>5,
			'caller_get_posts'=>1
		);
	$my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
		while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<figure class="transition-fade case-study-box">
                <a class="text-container" href="<?php the_permalink(); ?>">
					<h2 class="case-study-title">
						<span><?php echo get_the_title(); ?></span>
					</h2>
					<h3 class="case-study-subheading">
						<span><?php echo get_field("case_study_subheading" ); ?></span>
					</h3>
				</a>

				<div  class="overlay" style="<?php echo get_field( "overlay_background_grad" ); ?>"></div>

				<img src="<?php $imageLocation = get_the_post_thumbnail_url(get_the_ID(),'large'); echo $imageLocation; ?>">
            </figure>

<?php
endwhile;
} //if have posts
wp_reset_query();
}//tags end?>
</section>
		<!-- case -study-links-wrap-->