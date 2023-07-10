<?php
/**
 * Template Name: Home
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
			<?php if (get_field('toggle_slider')): ?>
				<?php if( have_rows('slide') ): ?>
					<div class="hero-slider" >
						<?php while( have_rows('slide') ): the_row(); ?>
							<?php
							$image = get_sub_field('slider_image');
							$imgSize = "full"; 
							$imgArr = wp_get_attachment_image_src( $image, $imgSize );
							?>
							<?php if( !empty($image) ): ?>
							<div style="background-image: url(<?php echo $imgArr[0]; ?> );" class="home-slide d-flex align-items-center ">
							<div class="container">
								<div class="row">
									<div class="col-12 col-lg-6 slider-content">
										<h1><?php the_sub_field('slider_heading'); ?></h1>
										<div class="my-3"><?php the_sub_field('slider_text'); ?></div>
										<p>
										<?php if( have_rows('slider_button_left') ): ?>
											<?php while( have_rows('slider_button_left') ): the_row(); ?>
												<?php $button = get_sub_field('button_link'); ?>
												<a class="btn mr-2 mb-3 mb-lg-0"  href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
											<?php endwhile; ?>
										<?php endif; ?>
										<?php if( have_rows('slider_button_right') ): ?>
											<?php while( have_rows('slider_button_right') ): the_row(); ?>
												<?php $button = get_sub_field('button_link'); ?>
												<a class="btn btn-outline-primary mb-3 mb-lg-0" href="<?php echo $button['url']; ?>"><?php echo $button['title']; ?></a>
											<?php endwhile; ?>
										<?php endif; ?>
										</p>
									</div> <!-- .col -->
								</div><!-- .row-->
								</div><!-- container-->
							</div>
							<?php endif; ?>
						<?php endwhile; ?>
					</div><!-- .hero-slider-home -->
				<?php endif; ?>
			<?php endif; ?>
				
			<?php
			while ( have_posts() ) : the_post();
				the_content();
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
