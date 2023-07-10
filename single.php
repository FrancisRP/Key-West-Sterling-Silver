<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hive-starter
 */

?>

<?php get_header(); ?>
<?php get_template_part('template-parts/content', 'hero'); ?>

<div id="primary">
  <main id="main" class="site-main template--blog">
    <div class="container py-5">
      <?php

      $sidebars = get_field('sidebars', 'option');


      if ($sidebars == 'show') :

        get_template_part('partials/blog/single/blog-single-with-sidebar');

      else :

        get_template_part('partials/blog/single/blog-single-full');

      endif;
      ?>
    </div><!-- .container -->
    <section class="recent-posts">
      <div class="container py-5">
        <div class="row">
          <div class="col-12 text-center my-4">
            <h2 class="text-uppercase">Related Posts</h2>
          </div>
        </div>
        <div class="row">
          <?php
          $related = get_posts(array('category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID)));
          if ($related) foreach ($related as $post) {
            setup_postdata($post);
            get_template_part('template-parts/content', 'related-posts');
          }
          wp_reset_postdata();
          ?>
        </div><!-- row-->
        <div class="row">
          <div class="col-12 text-center my-4">
            <a href="/blog/" class="btn btn-outline-green"> View All Articles</a>
          </div>
        </div>
      </div>
    </section>
  </main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
