<?php get_header(); ?>

    <div id="accueil" class="global">
        <section>
            <?php
                if (have_posts()): 
                    the_post();
                    $titre = get_the_title();
                    ?>
                    <article class="carte">
                        <h2 class="global clr-agencement-ternaire"><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                        <br>
                        <p class="champ_Personalise">Température minimum: <?php the_field('temperature_minimum'); ?></p>
                        <p class="champ_Personalise">Température maximum: <?php the_field('temperature_maximum'); ?></p>
                        <p class="champ_Personalise">Ville avoisinante: <?php the_field('ville_avoisinante'); ?></p>
                    </article>
                <?php endif; ?>
             
        </section>
    </div>
    <?php get_footer(); ?>
        