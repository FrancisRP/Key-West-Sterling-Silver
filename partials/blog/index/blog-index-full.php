
<div class="row">
    <div class="col-12">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'paged' => $paged
        ));

        if (have_posts()) :
            // Starts posts loop.
            while (have_posts()) :
                the_post();
                get_template_part('template-parts/content', get_post_format());
            endwhile;

        else :
            // If no content, include the "No posts found" template.
            get_template_part('template-parts/content', 'none');

        endif;
        ?>
        <div class="pagination">
            <?php
            echo paginate_links(array(
                'base'         => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                'total'        => $query->max_num_pages,
                'current'      => max(1, get_query_var('paged')),
                'format'       => '?paged=%#%',
                'show_all'     => false,
                'type'         => 'plain',
                'end_size'     => 2,
                'mid_size'     => 1,
                'prev_next'    => true,
                'prev_text'    => sprintf('<i class="fas fa-chevron-left"></i> %1$s', __('', 'text-domain')),
                'next_text'    => sprintf('%1$s <i class="fas fa-chevron-right"></i>', __('', 'text-domain')),
                'add_args'     => false,
                'add_fragment' => '',
            ));
            ?>
        </div>
    </div><!-- .col-12-->
</div><!-- .row -->
