<section class="contact-container">
    <h1 class="contact__headline"><?php the_title(); ?></h1>

    <div class="contact__form">
        <div class="grid">
            <div class="grid__item palm-hide desk--one-twelfth"></div><!--
            --><div class="grid__item desk--one-quarter">
                <p class="contact__column-headline">Kraków</p>
            </div><!--
            --><div class="grid__item desk--one-quarter">
                <p class="contact__column-headline">Gliwice</p>
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
