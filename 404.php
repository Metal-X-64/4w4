<?php get_header(); ?>

<!-- ////////////////// Contenu principal /////////////////// -->
    <div id="erreur_404" class="global clr-agencement-secondaire">
        <div id="message_erreur">
            <h2>Erreur 404</h2>
            <h4>Vous essayez d'accéder à une page qui n'existent pas</h4>
            <h4>Pour revenir à la page d'accueil, cliquez sur le lien suivant:</h4>
            <br>
            <a class="bouton_erreur" href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?></a>
            <?php get_search_form(); ?>
            <?php wp_nav_menu(array(
                "menu" => "principal",
                "container" => "nav")); ?>
        </div>
        <div>
            <img class="erreur-image" src="https://gftnth00.mywhc.ca/tim16/wp-content/uploads/2024/04/logo-voyage2.png" alt="logo" width="400px" height="400px">
        </div>
        
    </div>

<!-- ////////////////// Pied de page //////////////// -->
<?php get_footer(); ?>