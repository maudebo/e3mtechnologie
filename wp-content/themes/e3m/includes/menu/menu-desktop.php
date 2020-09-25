<div class="col-lg-9 col-md-8 ">
    <nav id="site-navigation" class="main-menu row">
        <button class="menu-toggle" aria-controls="primary-menu"
            aria-expanded="false"><?php esc_html_e('Primary Menu', 'e3m'); ?></button>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary_menu',
            'menu_id' => 'primary-menu',
        ));
        ?>
        <?php


    ?>
    </nav><!-- #site-navigation -->
</div>