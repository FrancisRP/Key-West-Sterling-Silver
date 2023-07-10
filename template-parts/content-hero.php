<div class="hero__page d-flex align-items-center">
        <div class="container">
            <div class="row align-items-sm-center">
                <div class="col-12 col-sm-6 col-md-8">
                    <?php if ( is_blog() )  : ?>
                        <h1 class="text-uppercase">Blog</h1>
                            <?php elseif ( is_singular( ) || is_single( ) ) : ?>
                        <h1 class="text-uppercase"><?php echo esc_html( get_the_title() ); ?></h1>
                            <?php elseif ( is_search( )) : ?>
                         <h1 class="text-uppercase">Search</h1>
                            <?php else:  ?> 
                        <h1 class="text-uppercase"><?php echo esc_html( get_the_title() ); ?></h1>  
                    <?php endif; ?> 
                </div><!-- col-12 col-md-8 -->
                <div class="col-12 col-sm-6 col-md-4">

                    <?php if (!is_blog()): ?>

                        <ul class="nav social mt-3 justify-content-sm-end align-items-center mt-3 mt-sm-0">
                            <li class="nav-item text-uppercase">Share:</li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(get_the_ID()); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            </li>                           
                            <li class="nav-item">
                                <a class="nav-link" href="https://twitter.com/intent/tweet?text=<?php echo get_the_permalink(get_the_ID()); ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            </li>                           
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_the_permalink(get_the_ID()); ?>&title=&summary=&source="><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                            </li>
                        </ul>

                    <?php endif; ?>

                </div><!-- col-12 col-md-4 -->
            </div><!-- row-->
        </div><!-- container-->

    </div><!-- hero-->