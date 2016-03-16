<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon.png">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="title-bar" data-responsive-toggle="site-menu">
			<button class="burger" type="button" data-toggle="mobile-menu"><i class="fa fa-bars"></i></button>
			<div class="title-bar-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri () ?>/assets/images/matrel/logo-matrel.png" /></a>
			</div>
		</div>

		<nav id="site-navigation" class="main-navigation top-bar">
			<div class="row">
				<div class="top-bar-left">
					<ul class="menu">
						<li class="home"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri () ?>/assets/images/matrel/logo-matrel.png" /></a></li>
					</ul>
				</div>
				<div class="top-bar-right">
					<select class="categories">
						<option>Toutes les catégories</option>
						<option>Thermo-relieurs système FastBack</option>
						<option>Thermo-relieurs "dos carrés collés"</option>
						<option>Perfo-relieur - Perforateur</option>
						<option>Système de brochage numérique</option>
						<option>Assembleuses - Taqueuses</option>
						<option>Modules de brochage</option>
						<option>Massicots</option>
						<option>Pelliculeuse - Plastifieuse</option>
						<option>Vernisseuses</option>
						<option>Plieuses de table</option>
						<option>Plieuse professionnelle</option>
						<option>Raineuse/plieuse/perforation</option>
						<option>Raineuses par emboutissage</option>
						<option>Raineuses rotatives</option>
						<option>Piqueuses - Agrafeuses</option>
						<option>Foreuses</option>
						<option>Margeurs</option>
						<option>Compteuses de feuilles</option>
						<option>Coupeuse de cartes</option>
						<option>Perforateur</option>
					</select>
					<i class="fa fa-caret-down"></i>
					<div class="trait">&nbsp;</div>
					<?php get_search_form (); ?>

				</div>
			</div>
		</nav>
		<nav id="site-menu" class="top-bar" role="navigation">
			<div class="row">
				<div class="small-12 columns">

					<div class="top-bar-right">
						<?php foundationpress_top_bar_r(); ?>

						<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) : ?>
							<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</nav>
	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
