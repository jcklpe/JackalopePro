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



<?php

/*
* If a regular post or page, and not the front page, show the featured image.
* Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
*/
if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
    echo '<div class="single-featured-image-header">';
    echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
    // echo '</div><!-- .single-featured-image-header -->';
endif;
?>
