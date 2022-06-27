<?php
/**
 * Template Name: Full Size
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
defined( 'ABSPATH' ) || exit; // Exit if accessed directly

/**
 * The template for displaying the header
 *
 */

defined( 'ABSPATH' ) || exit; // Exit if accessed directly

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<script type="text/javascript" src="<?= get_template_directory_uri()?>/assets/js/formation.js?ver=6.0" id="formation-js"></script>
	
	<?php wp_head(); ?>
</head>

<body id="tie-body" <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div class="background-overlay">

	<div id="tie-container" class="site tie-container">

		<?php do_action( 'TieLabs/before_wrapper' ); ?>

		<div id="tie-wrapper">

	

<?php

if ( have_posts() ) :

	while ( have_posts() ): the_post();

		TIELABS_HELPER::get_template_part( 'templates/single-post/content-full-size' );

	endwhile;

endif;

get_sidebar();
get_footer();
