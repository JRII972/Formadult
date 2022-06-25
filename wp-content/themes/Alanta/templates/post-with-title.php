<?php

/**
 * Template Name: Page avec titre
 * Template Post Type: page, formations, post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
defined( 'ABSPATH' ) || exit; // Exit if accessed directly

get_header(); ?>

<?php

if ( have_posts() ) :

	while ( have_posts() ): the_post();

		TIELABS_HELPER::get_template_part( 'templates/single-post/content' );

	endwhile;

endif;

get_sidebar();
get_footer();