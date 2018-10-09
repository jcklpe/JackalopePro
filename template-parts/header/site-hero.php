<?php
/**
* Template for home page
*
* @package JackalopePro
* @version 1.4
*/

?>

<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

<section class="single-featured-image-header hero transition-fade">
    <div class="overlay" style="<?php echo get_field('overlay_background_grad'); ?>"></div>
    <div class="img-container">
        <img class="hero-img"   src="<?php $header = get_header_image(); echo $header; ?>">
    </div>


</section>
