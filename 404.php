<?php get_header(); ?>

<!-- ////////////////// Contenu principal /////////////////// -->
    <div id="erreur_404" class="global clr-agencement-secondaire">
        <div class="message-erreur">
            <div>
                <h2>Erreur 404</h2>
                <h4>Vous essayez d'accéder à une page qui n'existent pas.</h4>
                <h4>Pour revenir à la page d'accueil, cliquez sur le lien suivant:</h4>
            </div>
            <br>
            <div>
                <a class="bouton-erreur" href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?></a>
            </div>
            <?php get_search_form(); ?>
            <br>
            <div id="categories-erreur" class="categories-erreur">
                <a href="/4w4/category/aventure/">Aventure</a>
                <a href="/4w4/category/croisiere/">Croisière</a>
                <a href="/4w4/category/culturel/">Culturel</a>
                <a href="/4w4/category/pleine-nature/">Pleine nature</a>
                <a href="/4w4/category/populaire/">Populaire</a>
                <a href="/4w4/category/repos/">Repos</a>
                <a href="/4w4/category/sport/">Sport</a>
                <a href="/4w4/category/zen/">Zen</a>
            </div>
        </div>
        <div>
            <img class="erreur-image" src="https://gftnth00.mywhc.ca/tim16/wp-content/uploads/2024/04/logo-voyage2.png" alt="logo" width="400px" height="400px">
        </div>
        
    </div>

<!-- ////////////////// Pied de page //////////////// -->
<?php get_footer(); ?>