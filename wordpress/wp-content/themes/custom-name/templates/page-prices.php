<section class="banner banner--prices">
    <div class="banner-title-container">
        <h1 class="banner__header"><?php the_title(); ?></h1>
    </div>
    <!-- @todo -->
    <div class="banner-nfz-logo-container banner-nfz-logo-container--mobile">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nfz-content-mobile.jpg"/>
    </div>
    <div class="banner-nfz-logo-container">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/nfz-content.jpg"/>
    </div>
</section>

<section class="adults prices__first-section">
    <div class="grid">
        <div class="grid__item one-twelfth"></div><!--
        --><div class="grid__item desk--five-sixths">
            <h2 class="section-title section-title--center">Wizyty prywatne</h2> <!-- @todo -->
            <div class="content-row">
                <?php if(have_rows('prices_repeater')) {
                    while(have_rows('prices_repeater')) {
                        the_row();
                        ?>

                        <div class="content-row">
                            <div class="grid">
                                <div class="grid__item palm-hide desk--one-twelfth"></div><!--
                        --><div class="grid__item desk--two-sixths">
                            <h3 class="section-tagline"><?php the_sub_field('caption'); ?></h3>
                        </div><!--
                        -->
                        <div class="grid__item palm-hide desk--one-twelfth"></div><!--
                        --><div class="grid__item desk--two-sixths">
                            <p class="section-content"><?php the_sub_field('value'); ?></p>
                        </div><!--
                        --><div class="grid__item palm-hide desk--one-twelfth"></div>
                            </div>
                        </div>
                        <?php
                    }
                } ?>
            </div>
        </div>
    </div>
</section>
