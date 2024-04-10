<?php get_header(); ?>

<!-- ////////////////// Contenu principal /////////////////// -->
    <div id="erreur_404" class="global">
        <section>
            <h2>Erreur 404</h2>
            <p>Vous essayez d'accéder à une page qui n'existent pas</p>
            <h4><?php echo get_bloginfo('name'); ?></h4>
            <h4><?php echo get_bloginfo('url'); ?></h4>
            <a href="<?php echo get_bloginfo('url'); ?>"><?php echo get_bloginfo('name'); ?></a>
        </section>
    </div>

<!-- ////////////////// Pied de page //////////////// -->

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