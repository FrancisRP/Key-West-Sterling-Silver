<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hive-starter
 */

get_header(); ?>

	<div id="primary">
		<main id="main" class="site-main">
			<?php if (get_field('default_banner_background', 'options')): ?>

				<?php $bg_image = get_field('default_banner_background', 'options'); ?>

				<div style="background-image:url('<?php echo $bg_image ?>');" class="hero hero--custom-bg d-flex align-items-center">

			<?php elseif (get_field('hero_image')): ?> 

				<?php $bg_image = get_field('hero_image'); ?>

				<div style="background-image:url('<?php echo $bg_image ?>');" class="hero hero--custom-bg d-flex align-items-center">

			<?php else: ?>

				<div style="background-image:url('/wp-content/uploads/2023/02/banner-pattern1.jpg'); background-size: contain; background-repeat: repeat;" class="hero d-flex align-items-center">

			<?php endif; ?>
				<div class="container hero-content">
					<div class="row">
						<div class="col-12 text-uppercase text-center">
							<h1><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</div>
			<?php
			while ( have_posts() ) : the_post();
			
				the_content();

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();