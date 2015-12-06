<div class="home__background-container">
    <section class="section__page-title">
        <div class="grid">
            <div class="grid__item palm-hide lap--one-twelfth"></div><!--
            --><div class="grid__item one-whole lap--five-sixths">
                <div class="home__title-container">
                    <h1 class="section__page-title-text home__title">
                        <?php the_field('main_header'); ?>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section--text home__parents">
        <div class="grid">
            <div class="grid__item palm-hide desk--one-twelfth"></div><!--
            --><div class="grid__item lap--five-twelfths desk--four-twelfths">
                <h2><?php the_field('parents_title'); ?></h2>
                <p><?php the_field('parents_description'); ?></p>
                <a href="/parents">Czytaj więcej</a>
            </div>
        </div>
    </section>
</div>

<section class="section--image home__kids">
    <div class="grid">
        <div class="grid__item palm-hide desk--one-twelfth"></div><!--
        --><div class="grid__item one-whole lap--one-half desk--five-twelfths">
            <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/girl-photo--desktop.png" media="(min-width: 640px)">
                <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/girl-photo--mobile.png">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/girl-photo--mobile.png">
            </picture>
        </div><!--
        --><div class="grid__item palm-hide lap-hide desk--one-twelfth"></div><!--

        --><div class="grid__item palm-hide lap--one-half desk--twelfths wide-desk--four-twelfths">
            <div class="section--text">
                <h2><?php the_field('kids_title'); ?></h2>
                <p><?php the_field('kids_description'); ?></p>
                <a href="/kids">Czytaj więcej</a>
            </div>
        </div>
    </div>
</section>

<section class="section--text lap-hide desk-hide wide-desk-hide">
    <h2><?php the_field('kids_title'); ?></h2>
    <p><?php the_field('kids_description'); ?></p>
    <a href="/kids">Czytaj więcej</a>
</section>

<section class="section--text section--bg home__adults">
    <div class="grid">
        <div class="grid__item palm-hide desk--two-twelfths"></div><!--
        --><div class="grid__item one-whole desk--four-twelfths">
            <h2><?php the_field('adults_title'); ?></h2>
            <p><?php the_field('adults_description'); ?></p>
            <a href="/adults">Czytaj więcej</a>
        </div>
</section>

<section class="section--text section--text-small home__peace">
    <div class="grid">
        <div class="grid__item one-whole desk--one-half">
            <h3><?php the_field('banner_title'); ?></h3>
            <p class="section--text-small__paragraph"><?php the_field('banner_description'); ?></p>
        </div>
    </div>
</section>
