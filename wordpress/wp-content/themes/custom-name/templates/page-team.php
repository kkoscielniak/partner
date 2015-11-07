<section class="banner banner--team">
    <h1 class="banner__header">Zespół</h1>
</section>

<section class="team">
    <div class="grid">
        <div class="grid__item one-twelfth"></div><!--
        --><div class="grid__item desk--five-sixths">

            <h2 class="section-title">Poznaj nasz wykwalifikowany zespół specjalistów</h2>
            <div class="grid">
                <?php
                if(have_rows('team_members')) {
                    while(have_rows('team_members')) {
                        the_row();
                        $img = get_sub_field('photo');
                        ?><!--
                        --><div class="grid__item desk--one-fifth">

                            <img class="team__photo" src="<?php echo $img['url']; ?>">
                            <p class="team__name"><?php the_sub_field('name'); ?></p>
                        </div><!--
                        --><?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
