<?php get_header(); ?>

    <div id="accueil" class="global">
        <section>
            <h2>Destination par catégorie</h2>
            <div class="destinations">
            <?php
                if (have_posts()):
                    while(have_posts()): the_post(); ?>
                    <div class="carte">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo wp_trim_words(get_the_content(),20); ?></p>
                        <?php the_category(); ?>
                        <!-- ajoute un lien vers l'article -->
                        <a href="<?php the_permalink(); ?>">Suite</a>
                    </div>
                <?php endwhile ?>
                <?php endif; ?>
                </div>
            
            <blockquote>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt fugit, optio exercitationem quos unde excepturi. Alias, aspernatur. Culpa expedita modi, rem, distinctio enim placeat tempora officia mollitia, odit vitae soluta."</blockquote>
                
        </section>
    </div>
    <div id="evenement" class="global diagonal">
        <section>
            <h2>Événement (h2)</h2>
            <button>
                Cliquez ici pour voir les événements (button)
            </button>
        </section>
    </div>
    <div id="galerie" class="global">
        <section>
            <h2>Galerie (h2)</h2>
            <h4>Photos (h4)</h4>
            <a href="#">Voir plus</a>
        </section>
        <?php get_template_part("gabarits/vague"); ?>
    </div>
    <?php get_footer(); ?>
    