<header>
    <div class="header__logo">
        <a href="/">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo--desktop.png" media="(min-width: 1200px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo-mobile.png">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-mobile.png" alt="Partner Logo">
            </picture>
        </a>
    </div>

    <div class="mobile-trigger__container">
        <a class="mobile-trigger js-mobile-navigation" href="#">
            <span></span>
            <span></span>
            <span></span>
        </a>
    </div>

    <div class="nav-container">
        <nav class="collapse navbar-collapse" role="navigation">
        <?php
            if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
            endif;
        ?>

        <a href="http://www.znanylekarz.pl/placowki/poradnia-psychologiczna-partner" class="znany-lekarz-trigger">Umów się online</a><br><br>

        <script id="zl-facility-widget" src="http://www.znanylekarz.pl/platform/js/widget.js"></script>
        </nav>
    </div>
</header>
