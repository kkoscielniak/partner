<section class="banner banner--adults">
    <div class="banner__main-content">
        <h1 class="banner__header"><?php the_title(); ?></h1>
        <?php
            if (has_nav_menu('additional_menu')) :
                wp_nav_menu(array('theme_location' => 'additional_menu', 'menu_class' => 'nav navbar-nav additional-nav'));
            endif;
        ?>
    </div>
</section>

<section class="adults">
    <div class="grid">
        <div class="grid__item one-twelfth"></div><!--
        --><div class="grid__item desk--five-sixths">
            <h2 class="section-title section-title--left"><?php the_field('table_title_1'); ?></h2>
            <?php if(have_rows('the_repeater')) {
                while(have_rows('the_repeater')) {
                    the_row();
                    ?>
                    <div class="content-row">
                        <div class="grid">
                            <div class="grid__item desk--one-third">
                                <h3 class="section-tagline"><?php the_sub_field('caption'); ?></h3>
                            </div><!--
                            --><div class="grid__item desk--one-third">
                                <p class="section-content"><?php the_sub_field('column_1'); ?></p>
                            </div><!--
                            --><div class="grid__item desk--one-third">
                                <p class="section-content"><?php the_sub_field('column_2'); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } ?>
        </div>
    </div>
</section>

<section class="banner banner--secondary banner--adults-2">
    <div class="banner--secondary__content">
        <h1 class="banner__header banner__header--secondary"><?php the_field('secondary_banner_title'); ?></h1>
        <p class="banner__content section--text-small__paragraph"><?php the_field('secondary_banner_content'); ?></p>
    </div>
</section>

<section class="adults">
    <div class="grid">
        <div class="grid__item one-twelfth"></div><!--
        --><div class="grid__item desk--five-sixths">
        <h2 class="section-title section-title--left"><?php the_field('table_title_2'); ?></h2>
        <?php if(have_rows('the_repeater_2')) {
            while(have_rows('the_repeater_2')) {
                the_row();
                ?>

                <div class="content-row">
                    <div class="grid">
                        <div class="grid__item desk--one-third">
                            <h3 class="section-tagline"><?php the_sub_field('caption'); ?></h3>
                        </div><!--
                        --><div class="grid__item desk--one-third">
                            <p class="section-content"><?php the_sub_field('column_1'); ?></p>
                        </div><!--
                        --><div class="grid__item desk--one-third">
                            <p class="section-content"><?php the_sub_field('column_2'); ?></p>
                        </div>
                    </div>
                </div>
                <?php
            }
        } ?>

        </div>
    </div>
</section>
