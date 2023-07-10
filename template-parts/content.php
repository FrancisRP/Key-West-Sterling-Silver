<?php

/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hive-starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-index__each pb-5">
		<?php if (has_post_thumbnail()) : ?>
			<a href="<?php echo the_permalink(); ?>">
				<div class="blog-index__image">
					<?php the_post_thumbnail(); ?>
				</div>
			</a>
		<?php endif; ?>


		<p class="mt-3 mb-2 blog-index__category"><?php the_category(' '); ?></p>
		<div class="blog-index__title">
			<a href="<?php echo the_permalink(); ?>">
				<h2><?php the_title(); ?></h2>
			</a>
		</div>

		<div class="blog-index__excerpt">
			<?php the_excerpt(); ?>
		</div><!-- .blog-index__excerpt -->

		<div class="blog-index__read-more mt-3">
			<a href="<?php echo the_permalink(); ?>" class="btn btn-outline-primary">Learn More</a>
		</div><!-- .blog-index__extra -->

	</div>
</article><!-- #post-## -->