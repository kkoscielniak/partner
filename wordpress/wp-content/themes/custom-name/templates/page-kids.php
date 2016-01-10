<section class="banner banner--kids">
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

<div class="readiness--white">
    <section class="kids__readiness banner--kids-2">
        <div class="readiness__content">
            <h2>Badanie gotowości szkolnej u dzieci przedszkolnych</h2>
            <p>Prowadzimy specjalistyczne badania w celu określenia czy dziecko jest gotowe do podjęcia nauki w pierwszej klasie szkoły podstawowej. Jako Poradnia Psychologiczno-Pedagogiczna wystawiamy opinie uznawane przez szkoły.</p>
        </div>
    </section>

    <section class="section--transparent">
        <h2>Diagnoza i zapobieganie<br/>trudnościom szkolnych dzieci</h2>
        <h3>Dysleksja i dysgrafia</h3>
        <p>Przeprowadzamy diagnozę dysfunkcji szkolnych –za pomocą specjalistycznych badań diagnostycznych: psychologicznych, pedagogicznych, logopedycznych celem rozpoznania a następnie korygowania trudności w nauce. Wystawiamy opinie do szkół i uczelni wyższych zawierającą informacje o indywidualnych trudnościach dzieci i młodzieży oraz o dostosowaniu wymagań edukacyjnych wynikających z programu nauczania do indywidualnych potrzeb ucznia, u którego stwierdzono specyficzne trudności w uczeniu się, uniemożliwiające sprostanie tym wymaganiom - na podstawie Ustawy o zmianie ustawy o systemie oświaty z dnia 23.08.2001 – Dz. U. 111, poz. 1194, art. 71b, ust. 3a i 3b.</p>
    </p>
    </section>
</div>

<section class="kids-dyslexia">
    <div class="kids-dyslexia__content">
        <h3>Dysleksja<br/>rozwojowa</h3>
        <p>to zespół specyficznych trudności<br/>w uczeniu się pisania i czytania.
        </p>
    </div>
</section>

<section class="banner banner--kids-3">
    <div class="banner--secondary__content">
        <h1 class="banner__header banner__header--secondary"><?php the_field('secondary_banner_title'); ?></h1>
        <p class="banner__content section--text-small__paragraph"><?php the_field('secondary_banner_content'); ?></p>
    </div>
</section>
