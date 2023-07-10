<?php

/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hive-starter
 */

?>

<?php get_header(); ?>
<?php get_template_part('template-parts/content', 'hero'); ?>

<div id="primary">
	<main id="main" class="site-main template--blog py-5">
		<div class="container">

			<?php
			$sidebars = get_field('sidebars', 'option');

			if ($sidebars == 'show') :

				get_template_part('partials/blog/index/blog-index-with-sidebar');

			else :

				get_template_part('partials/blog/index/blog-index-full');

			endif;
			?>

		</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #primary -->


<?php
get_footer();
