<?php get_header(); ?>

    <div id="entete" class="global clr-agencement-secondaire">
        <section class="entete__header">
            <h1><?php echo get_bloginfo("name"); ?></h1>
            <h2><?php echo get_bloginfo("description"); ?></h2>
            <h3>TIM-Collège de Maisoneuve</h3>
            <div class="espace">
                <a href="http://localhost:8081/4w4/conference/" class="grand-bouton">Conférence</a>
            </div>

            
        </section>
        <!-- vague -->
        <?php get_template_part("gabarits/vague"); ?>
    </div>
    <div id="accueil" class="global">
        <section>
            <h2>Accueil</h2>
            <br>
            <h3>Destinations populaires</h3>
            <div class="destinations">
            <?php
                if (have_posts()):
                    while(have_posts()): the_post(); ?>
                    <?php
                    $ma_carte = "carte";
                    if (in_category('galerie')) {
                        $ma_carte = "galerie";
                    }
                    get_template_part("gabarits/categorie", $ma_carte); ?>
                <?php endwhile ?>
                <?php endif; ?>
                </div>
        </section>
    </div>
    <div id="evenement" class="global diagonal clr-agencement-mauve-bleu">
        <section>
            <h2>Descriptions de certaines villes</h2>
            
            <?php
            // Appel du shortcode directement dans le fichier front-page.php
            echo do_shortcode('[em_destination]');
            ?>

            <button class="grand-bouton">
                Cliquez ici pour voir les événements
            </button>
        </section>
    </div>
    <div id="galerie" class="global">
        <section>
            <h2>Catégories de voyages</h2>
                <article class="categories">
                    <?php
                        $categories = get_categories();
                        foreach($categories as $elm_categorie) :
                            $nom = $elm_categorie->name; 
                            $description = wp_trim_words($elm_categorie->description, 10); 
                            $nombre_destination = $elm_categorie->count;
                            $categorie_url = get_category_link($elm_categorie->term_id);
                    ?>
                    <div class="carte">
                        <?php 
                        // permet d'afficher l'image de l'article qui a été publié
                        the_post_thumbnail('thumbnail'); ?>
                        <h3 class="global clr-agencement-ternaire"><?php echo $nom; ?></h3> 
                        <p><?php echo wp_trim_words($description, 10); ?></p>
                        <a href="<?php echo  $categorie_url ?>"> Voir les destinations ... </a>
                        <p class="nb-articles"><?php echo $nombre_destination; ?> articles</p>
                    </div>
                    <?php endforeach ?>
                    </article>
        </section>
        <?php get_template_part("gabarits/vague"); ?>
    </div>
    <?php get_footer(); ?>
