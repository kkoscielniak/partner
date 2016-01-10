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

        <a href="http://www.znanylekarz.pl/placowki/poradnia-psychologiczna-partner" style="display: inline-block;
            font-family: Helvetica;
            color: #fff;
            background-color: #1b9ad8;
            background: -moz-linear-gradient(top, #1b9ad8 0%, #138cd1 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #1b9ad8), color-stop(100%, #138cd1));
            background: -webkit-linear-gradient(top, #1b9ad8 0%, #138cd1 100%) background : -o-linear-gradient(top, #1b9ad8 0 %, #138cd1 100 %);
            background: -ms-linear-gradient(top, #1b9ad8 0%, #138cd1 100%);
            background: linear-gradient(to bottom, #1b9ad8 0%, #138cd1 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#1b9ad8', endColorstr='#138cd1', GradientType=0);
            text-shadow: 0 -1px 0 rgba(0, 0, 0, .15);
            font-weight: bold;
            text-decoration: none;
            padding: 6px 15px;
            box-shadow: 0 0 2px rgba(0, 0, 0, .2);
            -webkit-box-shadow: 0 0 2px rgba(0, 0, 0, .2);
            border-radius: 3px;
            border: 1px solid #0e75b0" data-zl-widget-facility="poradnia-psychologiczna-partner"
            class="znany-lekarz-trigger">Umów się online</a><br><br>

        <script id="zl-facility-widget" src="http://www.znanylekarz.pl/platform/js/widget.js"></script>
        </nav>
    </div>
</header>
