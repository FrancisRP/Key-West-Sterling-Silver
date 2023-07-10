<?php /* Template Name: Contact Page */ ?>

<?php get_header(); ?>

<div id="primary">
	<main id="main" class="site-main">
		<div class="template template--contact">
		<?php if(get_field('hero_image')): ?> 
			<div style="background-image:url('<?php the_field('hero_image'); ?>');" class="hero d-flex align-items-center">
			<?php else: ?>
			<div style="background-image:url('/wp-content/uploads/2020/05/gym-grayscale-scaled.jpg');" class="hero d-flex align-items-center">
			<?php endif; ?>
			<div class="container hero-content">
				<div class="row">
					<div class="col-12 text-uppercase text-center">
						<h1><?php the_title(); ?></h1>
					</div>
				</div>
			</div><!-- .container-->
			<div class="overlay"></div><!-- overlay-->
			</div><!-- hero -->
			<?php
			while ( have_posts() ) : the_post();
			the_content();
			endwhile; // End of the loop.
			?>
			
		</div> <!-- template--contact -->
	</main><!-- .site-main -->
</div><!-- primary -->

<?php get_footer(); ?>
