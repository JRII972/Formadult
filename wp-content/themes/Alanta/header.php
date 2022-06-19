<?php
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
	<link rel="stylesheet" id="style-all-css" href="<?= get_template_directory_uri()?>assets/css/styles-screen-all.css?ver=6.0" type="text/css" media="all">
	<link rel="stylesheet" id="style-min1180-css" href="<?= get_template_directory_uri()?>assets/css/styles-screen-and-min-width-1180-px.css?ver=1" type="text/css" media="(min-width: 1180px)">
	<link rel="stylesheet" id="style-min980-css" href="<?= get_template_directory_uri()?>assets/css/styles-screen-and-min-width-980-px.css?ver=1" type="text/css" media="(min-width: 980px)">
	<link rel="stylesheet" id="style-min768-css" href="<?= get_template_directory_uri()?>assets/css/styles-screen-and-min-width-768-px.css?ver=1" type="text/css" media="(min-width: 768px)">
	<link rel="stylesheet" id="style-max980-css" href="<?= get_template_directory_uri()?>assets/css/styles-screen-and-max-width-980-px.css?ver=1" type="text/css" media="(max-width: 980px)">
	<link rel="stylesheet" id="style-max768-css" href="<?= get_template_directory_uri()?>assets/css/styles-screen-and-max-width-768-px.css?ver=1" type="text/css" media="(max-width: 768px)">
	<link rel="stylesheet" id="correction-css" href="<?= get_template_directory_uri()?>assets/css/correction.css?ver=6.0" type="text/css" media="all">
	<?php wp_head(); ?>
</head>

<body id="tie-body" <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div class="background-overlay">

	<div id="tie-container" class="site tie-container">

		<?php do_action( 'TieLabs/before_wrapper' ); ?>

		<div id="tie-wrapper">

			<?php

				TIELABS_HELPER::get_template_part( 'templates/header/load' );

				do_action( 'TieLabs/before_main_content' );
