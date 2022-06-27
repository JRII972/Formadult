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

get_header(); ?>
<style> 
.site-content .container{
	max-width : 100%;
	padding-left : 0px;
	padding-right : 0px;
}
</style>
<?php

if ( have_posts() ) :

	while ( have_posts() ): the_post();

		TIELABS_HELPER::get_template_part( 'templates/single-post/content-full-size' );

	endwhile;

endif;

get_sidebar();
get_footer();
