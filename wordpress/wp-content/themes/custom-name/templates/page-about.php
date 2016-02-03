<section class="banner banner--about">
    <div class="banner__main-content">
        <h1 class="banner__header">O nas</h1>
        <p class="banner__content"><?php the_field('banner_content'); ?></p>
    </div>
</section>

<div class="about">

    <div class="about__header">
        <h2 class="section-title section-title--center"><?php the_field('about_header'); ?></h2>
        <p class="section-tagline"><?php the_field('about_tagline'); ?></h2>
    </div>

    <section class="about__partner">
        <img class="about__partner-photo" src="<?php echo get_template_directory_uri();?>/assets/img/zimbardo.jpg">
        <p class="about__partner-name">Dr Philip<br/>Zimbardo</p>
        <div class="about__partner-content">
            <div class="grid grid--center">
                <div class="grid__item lap--one-third">
                    <p><?php the_field('zimbardo_left'); ?></p>
                </div><!--
                --><div class="grid__item lap--one-third">
                    <p><?php the_field('zimbardo_right'); ?></p>
                </div>
            </div>
        </div>
        <a href="http://www.hip.org.pl/">WWW.HIP.ORG.PL</a>
    </section>

    <section class="about__partner">
        <p class="about__partner-name">Dr Fabien de<br/>Meester</p>
        <div class="about__partner-content">
            <div class="grid grid--center">
                <div class="grid__item lap--one-third">
                    <p><?php the_field('meester_left'); ?></p>
                </div><!--
                --><div class="grid__item lap--one-third">
                    <p><?php the_field('meester_right'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="about__partner">
        <img class="about__partner-photo" src="<?php echo get_template_directory_uri();?>/assets/img/berger.jpg">
        <p class="about__partner-name">Dr Rony <br/>Berger</p>
        <div class="about__partner-content">
            <div class="grid grid--center">
                <div class="grid__item lap--two-thirds">
                    <p><?php the_field('beerger_left'); ?></p>
                </div>
            </div>
        </div>
    </section>





    <section class="about__table">
        <div class="about__header">
            <h2 class="section-title section-title--center"><?php the_field('our_mission'); ?></h2>
            <p class="section-tagline"><?php the_field('our_mission_content'); ?></h2>
        </div>

        <section class="about__table-columns">
            <div class="grid">
                <div class="grid__item lap--one-third">
                    <img class="icon" src="<?php echo get_template_directory_uri();?>/assets/img/footer-image-1--mobile.png">
                    <p><?php the_field('helping_adults_title'); ?></p>
                    <!-- <ul>
                        <li>odkrywać i rozwijać potencjał własny, </li>
                        <li>zmagać się z trudnościami życia,</li>
                        <li>zachować zdrowie, odkrywać satysfakcję i radość z życia,</li>
                        <li>dobrać życiowego partnera.</li>
                    </ul> -->
                    <?php the_field('helping_adults'); ?>
                    <a href="/adults"><?php the_field('read_more'); ?></a>
                </div><!--
                --><div class="grid__item lap--one-third">
                    <img class="icon" src="<?php echo get_template_directory_uri();?>/assets/img/footer-image-2--mobile.png">
                    <p><?php the_field('helping_parents_title'); ?></p>
                    <!-- <ul>
                        <li>rozumieć i wspierać rozwój ich dzieci,</li>
                        <li>wspomóc proces wychowania - jak  być dobrym i skutecznym Rodzicem,</li>
                        <li>rozwiązywać problemy dorastania.</li>
                    </ul> -->
                    <?php the_field('helping_parents'); ?>
                    <a href="/parents"><?php the_field('read_more'); ?></a>
                </div><!--
                --><div class="grid__item lap--one-third">
                    <img class="icon" src="<?php echo get_template_directory_uri();?>/assets/img/footer-image-3.png">
                    <p>Pomagamy Dziecku i Nastolatkowi:</p>
                    <!-- <ul>
                        <li>rozwijać się w poszanowaniu siebie i innych,</li>
                        <li>wzmacniać zasoby i pozytywne funkcjonowanie w środowisku szkolnym i rodzinnym,</li>
                        <li>budować relacje z innymi ludźmi.</li>
                    </ul> -->
                    <?php the_field('helping_kids'); ?>
                    <a href="/kids"><?php the_field('read_more'); ?></a>
                </div>
            </div>
        </section>
    </section>

    <section class="kids-dyslexia">
        <div class="kids-dyslexia__content">
            <!-- <h3>Posiadamy Certyfikat ISO nr 463/B/08/2012/J/R-(Z/1/2014)<br/>oraz Certyfikat Jakości ISO normy PN-EN ISO 9001:2009</h3>
            <p>w zakresie świadczenia usług medycznych z zakresu psychologii, psychiatrii, <br/>pedagogiki, logopedii, terapii leczenia uzależnień i współpracy <br/>pedagoga dla dzieci i młodzieży.</p> -->
            <h3><?php the_field('certificate_title'); ?></h3>
            <p><?php the_field('certificate_content'); ?></p>
        </div>
    </section>
</div>
