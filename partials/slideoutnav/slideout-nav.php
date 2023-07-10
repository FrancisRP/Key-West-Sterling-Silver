<div class="slideout-nav" hive-type="component">
    <div class="slideout-nav__inner">
        <div class="navicon-close mb-4 mr-4 d-flex justify-content-end">
            <span class="dashicons dashicons-no-alt"></span>
        </div><!-- .navicon-close -->
        <nav class="mobile-navigation" aria-label="mobile navigation">
            <?php
            wp_nav_menu(array(
                'menu'             => 'main-menu',
                'theme_location' => 'mobile',
                'menu_id'        => 'slideout-menu',
            ));
            ?>
        </nav>
    </div> <!-- .slideout-nav__inner -->
</div><!-- .hive slideout-nav -->