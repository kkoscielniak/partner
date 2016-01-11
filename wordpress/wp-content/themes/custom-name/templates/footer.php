<footer>

    <?php if(!is_page('contact')) { ?>
    <h2 class="footer__title"><?php the_field('footer_title'); ?></h2>

    <div class="footer__info">
        <div class="grid">
            <div class="grid__item one-whole lap--one-quarter">
                <div class="footer__image-container">
                    <img class="footer__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/smok_wawelski.png">
                </div>
            </div><!--
            --><div class="grid__item one-whole lap--one-quarter">
                <h2>Kraków</h2>
                <p class="footer__address">
                    <?php if (function_exists( 'contact_detail' )) {
                        contact_detail( 'address_cracow' );
                    } ?><br/>
                    tel: <a href="tel:<?php if (function_exists( 'contact_detail' )) {
                        contact_detail( 'phone_cracow' );
                    } ?>"><?php if (function_exists( 'contact_detail' )) {
                        contact_detail( 'phone_cracow' );
                    } ?></a>
                </p>
                <p class="footer__office-hours">
                    <?php if (function_exists( 'contact_detail' )) {
                        contact_detail( 'office_cracow' );
                    } ?>
                </p>
            </div><!--
            --><div class="grid__item one-whole lap--one-quarter">
                <div class="footer__image-container">
                    <img class="footer__image" src="<?php echo get_template_directory_uri(); ?>/assets/img/radiostacja.png">
                </div>
            </div><!--
            --><div class="grid__item one-whole lap--one-quarter">
                <h2>Gliwice</h2>
                <p class="footer__address">
                    <?php if (function_exists( 'contact_detail' )) {
                        contact_detail( 'address_gliwice' );
                    } ?><br/>
                   tel: <a href="tel:<?php if (function_exists( 'contact_detail' )) {
                        contact_detail('phone_gliwice');
                    } ?>"><?php if (function_exists( 'contact_detail' )) {
                            contact_detail('phone_gliwice');
                        } ?></a><br/>
                    lub <a href="tel:<?php if (function_exists( 'contact_detail' )) {
                        contact_detail('phone_gliwice_2');
                    } ?>">
                        <?php if (function_exists( 'contact_detail' )) {
                            contact_detail('phone_gliwice_2');
                        } ?>
                    </a>
                </p>
                <p class="footer__office-hours">
                    <?php if (function_exists( 'contact_detail' )) {
                        contact_detail( 'office_gliwice' );
                    } ?>
                </p>
            </div>
        </div>
    </div>

    <?php } ?>

    <div class="footer__bottom">
        <div class="footer__social-media">
            <a href="https://www.facebook.com/poradnia.partner/" class="fb_link">
                <img class="footer__social-media-icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook--mobile.png">
            </a>

            <div class="footer__copyright">
                <a href="/cookies">Cookies</a>
            </div>
        </div>
    </div>
</footer>
