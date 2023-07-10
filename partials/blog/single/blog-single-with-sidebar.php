<div class="row">
    <div class="col-12 col-md-8">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content', 'single');
        endwhile; // End the loop.

        ?>
    </div><!-- .col-xs-12 col-sm-8 -->
    <div class="col-12 col-md-4">
        <div class="blog-sidebar mt-5 mt-md-0">
            <?php get_sidebar(); ?>
        </div><!-- .blog-sidebar -->
    </div><!-- .col-xs-12 col-sm-4 -->
</div><!-- .row -->