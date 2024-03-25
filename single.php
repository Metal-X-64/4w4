<?php get_header(); ?>

    <div id="accueil" class="global">
        <section>
            <?php
                if (have_posts()): the_post();
                    $titre = get_the_title();
                    ?>
                    <div class="carte">
                        <h2 class="global clr-agencement-ternaire"><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
                <?php endif; ?>
             
        </section>
    </div>
    <div id="evenement" class="global diagonal clr-agencement-mauve-bleu">
        <section>
            <h2>Événement (h2)</h2>
            <button>
                Cliquez ici pour voir les événements (button)
            </button>
        </section>
    </div>
    <div id="galerie" class="global clr-agencement-secondaire">
        <section>
            <h2>Galerie (h2)</h2>
            <h4>Photos (h4)</h4>
            <a href="#">Voir plus</a>
        </section>
    <?php get_template_part("gabarits/vague"); ?>
    </div>
    <?php get_footer(); ?>
        