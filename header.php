<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hive-starter
 */

?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<?php
	$het_options = get_option('het_settings', '');
	if (is_array($het_options)) {
		echo $het_options['het_textarea_field_0'];
	}

	?>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<?php
	if (is_array($het_options)) {
		echo $het_options['het_textarea_field_1'];
	}
	?>

	<?php if (!get_field('default_banner_background', 'options')): ?>

		<style>

			.archive-banner .fl-row-content-wrap {
				background-image: url(/wp-content/uploads/2023/02/banner-pattern1.jpg);
				background-size: contain;
				background-repeat: repeat;
			}

			.archive-banner h1 span {
				color: #333 !important;
			}

		</style>

	<?php else: ?>

		<style>

			.archive-banner .fl-row-content-wrap:before {
				content: "";
				position: absolute;
				top: 0;
				right: 0;
				background: rgba(0,0,0,0.3);
				width: 100%;
				height: 100%;
			}

			.archive-banner .fl-row-content-wrap .fl-row-content {
				position: relative;
			}

		</style>

	<?php endif; ?>

</head>

<body <?php body_class(); ?>>

	<?php
	if (is_array($het_options)) {
		echo $het_options['het_textarea_field_2'];
	}
	?>

	<a class="screen-reader-text skip-link" href="#content">Skip to content</a>

	<?php get_template_part('partials/slideoutnav/slideout-nav'); ?>

	<div id="page" class="site">
		<?php echo do_shortcode("[fl_builder_insert_layout id=2467]"); ?>
		<?php $sticky = get_field('sticky_header', 'options'); ?>
		<header id="site-header" class="<?php echo $sticky; ?>">
			<div class="container">
				<div class="row align-items-center py-3 py-lg-0">
					<div class="col-6 col-sm-5 col-md-4 col-lg-3 ">
						<div class="site-branding">
							<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
								<?php $logoImg = get_field('header_logo', 'options'); ?>
								<?php if ($logoImg) : ?>
									<?php echo wp_get_attachment_image($logoImg, 'full', '', array("class" => "site-branding__image")); ?>
								<?php else : ?>
									<img src="<?php echo get_theme_root_uri(); ?>/hive-starter/images/logo.png" alt="Hive Starter Logo" />
								<?php endif; ?>
							</a>
						</div><!-- .site-branding -->
					</div><!-- .col-3 -->
					<div class="col-6 col-sm-7 col-md-8 col-lg-9">
						<div class="row">
							<div class="col-12 pr-lg-0 d-flex justify-content-end">
								<nav class="main-navigation d-none d-lg-flex justify-content-lg-end" aria-label="main navigation">
									<?php
									wp_nav_menu(array(
										'menu'			 => 'main-menu',
										'theme_location' => 'primary',
										'menu_id'        => 'main-menu',
									));
									?>
								</nav>
								<div class="d-lg-none d-flex justify-content-end slideout-navicon">
									<span class="dashicons dashicons-menu-alt"></span>
								</div>
							</div><!-- col-->
						</div><!-- row-->
					</div><!-- .col-9 -->
				</div><!-- .row-->
			</div><!-- container-->
		</header><!-- #masthead -->
		<div id="content" class="site-content">