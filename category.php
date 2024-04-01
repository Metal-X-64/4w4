<?php get_header(); ?>

    <div id="accueil" class="global">
        <section>
            <h2>Destinations par catégorie</h2>
            <div class="destinations">
            <?php
                if (have_posts()):
                    while(have_posts()): the_post(); ?>
                    <div class="carte">
                        <h3 class="global clr-agencement-ternaire"><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_content(),20); ?></p>
                        <!-- ajoute un lien vers l'article -->
                        <a href="<?php the_permalink(); ?>">Suite</a>
                        <?php the_category(); ?>
                        
                    </div>
                <?php endwhile ?>
                <?php endif; ?>
                </div>
            
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
    