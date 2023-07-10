<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package hive-starter
 */

?>
<?php get_header(); ?>
<?php get_template_part( 'template-parts/content', 'hero' ); ?>

<div id="primary">
	<main id="main" class="site-main page-blog py-5">
		<div class="container">
            <div class="row">
                <div class="col-12 col-md-8">
				<?php
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				$query = new WP_Query( array(
					'post_type' => 'post',
					'posts_per_page' => 4,
					'paged' => $paged
				) );
		
					if ( have_posts() ) { ?>

                    <header class="page-header">
                    <h2 class="page-title mb-5"><?php printf( esc_html__( 'Search Results for: %s', 'hive-starter' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
                    </header><!-- .page-header -->


					<?php while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content', 'search' );
					}

					} else {
					// If no content, include the "No posts found" template.
					get_template_part( 'template-parts/content', 'none' );
                    }
                    
                    ?>
                    
					<div class="pagination">
                        <?php 
                        echo paginate_links( array(
                        'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                        'total'        => $query->max_num_pages,
                        'current'      => max( 1, get_query_var( 'paged' ) ),
                        'format'       => '?paged=%#%',
                        'show_all'     => false,
                        'type'         => 'plain',
                        'end_size'     => 2,
                        'mid_size'     => 1,
                        'prev_next'    => true,
                        'prev_text'    => sprintf( '<i class="fas fa-chevron-left"></i> %1$s', __( '', 'text-domain' ) ),
                        'next_text'    => sprintf( '%1$s <i class="fas fa-chevron-right"></i>', __( '', 'text-domain' ) ),
                        'add_args'     => false,
                        'add_fragment' => '',
                        ) );
                        ?>
					</div>
                </div><!-- .col-12 col-sm-8 -->
                <div class="col-12 col-md-4">
                    <div class="blog-sidebar">
						<?php get_sidebar(); ?>
                    </div><!-- .blog-sidebar -->
                </div><!-- .col-12 col-sm-4 -->
            </div><!-- .row -->
        </div><!-- .container -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();
