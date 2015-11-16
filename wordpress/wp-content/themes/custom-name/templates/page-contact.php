<section class="contact-container">
    <h1 class="contact__headline"><?php the_title(); ?></h1>

    <div class="contact__form">
        <div class="grid">
            <div class="grid__item palm-hide desk--one-twelfth"></div><!--
            --><div class="grid__item desk--one-quarter">
                <p class="contact__column-headline">Kraków</p>
                <p class="contact__address">
                    ul. Zamoyskiego 53 lok. 4<br/>
                    <a href="tel:+48733222600">tel: 733 222 600</a>
                </p>
                <p class="contact__office-hours">
                    pon-pt:<br/>
                    08.00-22.00<br/>
                    SB:<br/>
                    08.00-16.00<br/>
                </p>
            </div><!--
            --><div class="grid__item desk--one-quarter">
                <p class="contact__column-headline">Gliwice</p>
                <p class="contact__address">
                    ul. Wieczorka 2<br/>
                    <a href="tel:+48322312690">tel: 32 231 26 90 wew. 25</a>
                </p>
                <p class="contact__office-hours">
                    pon-pt:<br/>
                    08.00-22.00<br/>
                </p>
            </div><!--
            --><div class="grid__item palm-hide desk--one-twelfth"></div><!--
            --><div class="grid__item desk--one-third">
                <p class="contact__column-headline">Napisz do nas</p>
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
