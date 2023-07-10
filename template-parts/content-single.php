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
	<div class="blog blog-single">
		<?php if (has_post_thumbnail()) : ?> 
			<div class="blog-single__image">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>
		<?php
			the_content();
		?>
	</div><!-- .blog blog-single -->
</article><!-- #post-## -->




     

