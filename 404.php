<?php get_header(); ?>

<!-- ////////////////// Contenu principal /////////////////// -->
    <div id="erreur_404" class="global clr-agencement-secondaire">
        <section>
            <h2>Erreur 404</h2>
            <h4>Vous essayez d'accéder à une page qui n'existent pas</h4>
            <h4>Pour revenir à la page d'accueil, cliquez sur le lien suivant:</h4>
            <br>
            <a class="bouton_erreur" href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?></a>
        </section>
    </div>

<!-- ////////////////// Pied de page //////////////// -->
<?php get_footer(); ?>