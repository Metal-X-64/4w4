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
    <?php get_footer(); ?>
    