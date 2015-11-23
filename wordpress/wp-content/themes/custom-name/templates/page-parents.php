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

<section class="banner banner--secondary banner--parents-2">
    <div class="banner--secondary__content">
        <h1 class="banner__header banner__header--secondary"><?php the_field('secondary_banner_title'); ?></h1>
        <p class="banner__content section--text-small__paragraph"><?php the_field('secondary_banner_content'); ?></p>
    </div>
</section>

<section class="adults">
    <div class="grid">
        <div class="grid__item one-twelfth"></div><!--
        --><div class="grid__item desk--five-sixths">
            <h2 class="section-title section-title--left">Budowanie relacji</h2>
            <div class="content-row">
                <div class="grid">
                    <div class="grid__item desk--one-third">
                        <h3 class="section-tagline">Co to jest?</h3>
                    </div><!--
                    --><div class="grid__item desk--one-third">
                        <p class="section-content">W spotkaniu lub w cyklu spotkań bierze udział para lub osoba zamierzająca utworzyć trwały związek. Spotkania mają na celu bliższe poznanie siebie i partnera związku, określenie wzajemnych potrzeb, cech charakteru oraz preferowanego stylu życia – funkcjonowania. </p>
                    </div><!--
                    --><div class="grid__item desk--one-third">
                        <p class="section-content">Podczas spotkań osoby uczą się bycia ze sobą we wzajemnym szacunku i miłości. W spotkaniach mogą brać udział małżeństwa lub osoby nowopoznane lub planujące poznanie nowej osoby i utworzenie z nią związku. </p>
                    </div>
                </div>
            </div>
            <div class="content-row">
                <div class="grid">
                    <div class="grid__item desk--one-third">
                        <h3 class="section-tagline">Co zmieniamy?</h3>
                    </div><!--
                    --><div class="grid__item desk--one-third">
                        <p class="section-content">Spotkania pozwalają poznać siebie i partnera w celu stworzenia satysfakcjonującego związku. Umożliwiają podjęcie starań osób o pełną miłości i troski relacje. </p>
                    </div>
                </div>
            </div>
            <div class="content-row">
                <div class="grid">
                    <div class="grid__item desk--one-third">
                        <h3 class="section-tagline">Kto prowadzi?</h3>
                    </div><!--
                    --><div class="grid__item desk--one-third">
                        <p class="section-content">Spotkania prowadzi psycholog lub psychoterapeuta (certyfikowany lub w trakcie certyfikacji).</p>
                    </div>
                </div>
            </div>
            <div class="content-row">
                <div class="grid">
                    <div class="grid__item desk--one-third">
                        <h3 class="section-tagline">Jak długo?</h3>
                    </div><!--
                    --><div class="grid__item desk--one-third">
                        <p class="section-content">Pojedyncza sesja trwa 50 minut. Spotkania mogą odbywać się 1-2 w tygodniu przez kilka tygodni lub dłużej.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
