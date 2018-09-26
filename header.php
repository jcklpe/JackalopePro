<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JackalopePro
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico"  />
<!-- <link rel="shortcut icon" href="./favicon.png" type="image/x-icon" /> -->


<?php wp_head(); ?>
<!--  START OF THEME HEAD FILES-->
<script>
function domReady(callback) {
	document.readyState === "interactive" || document.readyState === "complete" ? callback() : document.addEventListener("DOMContentLoaded", callback);
};
domReady(function() {
	const domain = window.location.origin

const swup = new Swup({
    LINK_SELECTOR: `a[href*="${domain}"]:not([data-no-swup]), a[href^="/"]:not([data-no-swup]), a[href^="#"]:not([data-no-swup]), a[xlink\\:href]`,
})



	});

</script>

</head>

<body <?php body_class(); ?>>
