<section class="banner banner--team">
    <div class="banner__main-content">
        <h1 class="banner__header">Zespół</h1>
    </div>
</section>

<section class="team">
    <div class="grid">
        <div class="grid__item one-twelfth"></div><!--
        --><div class="grid__item desk--five-sixths">

            <h2 class="section-title">Poznaj nasz wykwalifikowany zespół specjalistów</h2>
            <div class="grid">
                <?php
                if(have_rows('team_members')) {
                    $i = 0;
                    while(have_rows('team_members')) {
                        the_row();
                        $img = get_sub_field('photo');
                        ?><!--
                        --><div class="grid__item one-half lap--one-third desk--one-fifth">
                            <div class="team__member js-team-member">
                                <img class="team__photo"
                                    src="<?php echo $img['url']; ?>"
                                    alt="<?php echo $img['alt']; ?>">
                                <p class="team__name"><?php the_sub_field('name'); ?></p>
                                <a href="#" class="js-read-more team__link" data-index="<?php echo $i; ?>">Czytaj więcej</a>
                            </div>
                        </div><!--
                        --><?php
                        $i++;
                    }
                }
                ?><!-- @todo
                        --><!-- <div class="grid__item one-half lap--one-third desk--one-fifth">
                    <div class="team__member js-team-member">
                        <a href="/contact" class="team__link">Dołącz do nas!</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>





<div class="js-lightboxes">
<?php
    if(have_rows('team_members')) {
        $i = 0;
        while(have_rows('team_members')) {
            the_row(); ?>
                <div class="team__lightbox js-lightbox" data-index="<?php echo $i; ?>">
                    <div class="js-lightbox-content">
                        <p class="lightbox-name"><?php the_sub_field('name'); ?></p>
                        <p class="lightbox-name lightbox-role"><?php the_sub_field('role'); ?></p>
                        <p class="lightbox-description"><?php the_sub_field('description'); ?></p>
                    </div>

                    <a href="#" class="lightbox-close js-lightbox-close">
                        <span></span>
                        <span></span>
                    </a>
                </div>
            <?php $i++;
        }
    }
?>
</div>
