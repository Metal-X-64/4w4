<?php get_header(); ?>
    <div id="entete" class="global">
        <section class="entete__header">
            <h1>Thème du groupe #1 (h1)</h1>
            <h2>4w4-Conception d'interface <span>et développement Web</span></h2>
            <h3>TIM-Collège de Maisoneuve</h3>
            <div class="espace">
                <button>Événements</button>
            </div>
        </section>
        <!-- vague -->
        <?php get_template_part("gabarits/vague"); ?>
    </div>
    <div id="accueil" class="global">
        <section>
            <h2>Accueil (h2)</h2>
            <div class="cours">
            <?php
                /*if (have_posts()) {
                    while(have_posts()) {
                        the_post();
                        the_title('<h2>','</h3>');
                        echo wp_trim_words(get_the_content(),30);

                    }
                }*/
                if (have_posts()):
                    while(have_posts()): the_post();
                    $titre = get_the_title();
                    
                    ?>
                    <div class="carte">
                        <h3><?php echo $titre; ?></h3>
                        <p><?php the_content(); ?></p>
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
    <div id="footer" class="global">
        <footer>
            <h3>Footer (h3)</h3>
            <h5>À propos (h5)</h5>
            <h6>Nous contacter (h6)</h6>
            <a href="#">Retour vers le haut</a>
        </footer>
    </div>
</body>
</html>