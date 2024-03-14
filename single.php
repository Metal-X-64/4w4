<?php get_header(); ?>

    <div id="accueil" class="global">
        <section>
            <div class="cours">
            <?php
                if (have_posts()): the_post();
                    $titre = get_the_title();
                    ?>
                    <div class="carte">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
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
        