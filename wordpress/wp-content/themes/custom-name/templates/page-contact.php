<section class="contact-container">
    <h1 class="contact__headline"><?php the_title(); ?></h1>

    <div class="contact__form">
        <div class="grid">
            <div class="grid__item palm-hide desk--one-twelfth"></div><!--
            --><div class="grid__item desk--one-quarter">
                <p class="contact__column-headline">Kraków</p>
                <p class="contact__address">
                    <?php if (function_exists( 'contact_detail' )) {
                        contact_detail( 'address_cracow' );
                    } ?><br/>
                    <a href="tel:<?php if (function_exists( 'contact_detail' )) {
                        contact_detail( 'phone_cracow' );
                    } ?>"><?php if (function_exists( 'contact_detail' )) {
                        contact_detail( 'phone_cracow' );
                    } ?></a>
                </p>
                <p class="contact__office-hours">
                    <?php if (function_exists( 'contact_detail' )) {
                        contact_detail( 'office_cracow' );
                    } ?>
                </p>
            </div><!--
            --><div class="grid__item desk--one-quarter">
                <p class="contact__column-headline">Gliwice</p>
                <p class="contact__address">
                    <?php if (function_exists( 'contact_detail' )) {
                        contact_detail( 'address_gliwice' );
                    } ?><br/>
                    <a href="tel:<?php if (function_exists( 'contact_detail' )) {
                        contact_detail('phone_gliwice');
                    } ?>">
                        <?php if (function_exists( 'contact_detail' )) {
                            contact_detail('phone_gliwice');
                        } ?>
                    </a>
                </p>
                <p class="contact__office-hours">
                    <?php if (function_exists( 'contact_detail' )) {
                        contact_detail( 'office_gliwice' );
                    } ?>
                </p>
            </div><!--
            --><div class="grid__item palm-hide desk--one-twelfth"></div><!--
            --><div class="grid__item desk--one-third">
                <p class="contact__column-headline contact__column-headline--center">Napisz do nas</p>
                <?php if(get_field('contact_form')) {
                    the_field('contact_form');
                } ?>
            </div>
        </div>
    </div>
</section>
<section class="map-container">
    <div id="map-canvas"></div>
</section>
