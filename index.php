<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
