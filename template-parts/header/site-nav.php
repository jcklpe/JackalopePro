<?php
/**
* Displays header site branding
*
* @package JackalopePro
* @since 1.0
* @version 1.0
*/

if ( has_nav_menu( 'top' ) ) : ?>
    <div class="navigation-top">
        <div class="wrap">
            <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
        </div>
    </div>
<?php endif; ?>
