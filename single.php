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
                        <?php the_post_thumbnail('large'); ?>
                        <p><?php the_content(); ?></p>
                        <p>Température minimum: <?php the_field('temperature_minimum'); ?></p>
                        <p>Température maximum: <?php the_field('temperature_maximum'); ?></p>
                        <p>Ville avoisinante: <?php the_field('ville_avoisinante'); ?></p>
                    </article>
                <?php endif; ?>
             
        </section>
    </div>
    <?php get_footer(); ?>
        