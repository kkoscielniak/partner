<section class="banner" style="background-image: url(<?php the_field('title_background'); ?>)">
    <div class="banner__main-content">
        <h1 class="banner__header"><?php the_title(); ?></h1>
    </div>
</section>

<?php if (have_rows('repeater')) {
    while (have_rows('repeater')) {
        the_row();
        ?>

            <section class="section--image home__kids">
                <div class="grid">
                    <div class="grid__item palm-hide desk--one-twelfth"></div><!--
                    --><div class="grid__item one-whole lap--one-half desk--five-twelfths">
                        <picture>
                            <img src="<?php the_sub_field('photo'); ?>">
                        </picture>
                    </div><!--
                    --><div class="grid__item palm-hide lap-hide desk--one-twelfth"></div><!--

                    --><div class="grid__item palm-hide lap--one-half desk--twelfths wide-desk--four-twelfths">
                        <div class="section--text">
                            <h2><?php the_sub_field('title'); ?></h2>
                            <p><?php the_sub_field('text'); ?></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section--text lap-hide desk-hide wide-desk-hide">
                <h2><?php the_sub_field('title'); ?></h2>
                <p><?php the_sub_field('text'); ?></p>
            </section>
        <?php
    }
} ?>
