<section class="banner banner--team">
    <h1 class="banner__header">Zespół</h1>
</section>

<section class="team">
    <div class="grid">
        <div class="grid__item one-twelfth"></div><!--
        --><div class="grid__item desk--five-sixths">

            <h2 class="section-title">Poznaj nasz wykwalifikowany zespół specjalistów</h2>
            <div class="grid grid--center js-magic-move">
                <?php
                if(have_rows('team_members')) {
                    $i = 0;
                    while(have_rows('team_members')) {
                        the_row();
                        $img = get_sub_field('photo');
                        ?><!--
                        --><div class="grid__item one-half desk--one-fifth">
                            <div class="team__member js-team-member">
                                <img class="team__photo"
                                    src="<?php echo $img['url']; ?>"
                                    alt="<?php echo $img['alt']; ?>">
                                <p class="team__name"><?php the_sub_field('name'); ?></p>
                                <a href="#" class="js-read-more team__link" data-index="<?php echo $i; ?>">Czytaj więcej</a>
                            </div>
                        </div><!--
                        --><div class="js-description-<?php echo $i;?> grid__item one-whole team__member-description" style="display:none">
                            aaa
                        </div><!--
                        --><?php
                        $i++;
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
