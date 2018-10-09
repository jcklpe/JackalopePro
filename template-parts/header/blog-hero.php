<?php
/**
* Displays header site branding
*
* @package JackalopePro
* @since 1.0
* @version 1.0
*/

?>

<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

<section class="single-featured-image-header hero transition-move-down">
<div  class="overlay" style="<?php echo get_field( "overlay_background_grad" ); ?>"></div>
    <div class="img-container">
        <img class="hero-img"   src="<?php echo get_the_post_thumbnail_url() ?>">
    </div>
    <h1 class="case-study title">
	        <span><?php echo get_the_title(); ?></span>
    </h1>

</section>
