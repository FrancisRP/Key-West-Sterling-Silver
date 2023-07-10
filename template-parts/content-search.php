<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hive-starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<a href="<?php echo the_permalink(); ?>">
			<h3 class="text-green text-uppercase mb-3"><?php the_title(); ?></h3>
		</a>
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php echo get_the_date('l j, Y' ); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary mb-5">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

</article><!-- #post-## -->


