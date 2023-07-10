<?php

/**
 * Template part for displaying recent posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hive-starter
 */

?>


	<div class="col-12 col-md-6 my-3 my-md-0">
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="blog blog-single">
				<?php if (has_post_thumbnail()) : ?>
					<div class="blog-single__image">
						<?php the_post_thumbnail(); ?>
					</div><!-- image-->
				<?php endif; ?>
				<div class="blog-single__title">
					<a href="<?php echo the_permalink(); ?>">
						<h3><?php the_title(); ?></h3>
					</a>
				</div><!-- title-->
				<div class="blog-single__excerpt">
					<?php the_excerpt(); ?>
				</div><!-- excerpt -->
				<div class="blog-single__read-more mt-5 mb-4">
					<a href="<?php echo the_permalink(); ?>" class="read-more">Learn More</a>
				</div><!-- read-more-->
			</div><!-- .blog blog-single -->
		</article><!-- #post-## -->
	</div>
