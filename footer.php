<?php
/* 
Template footer.php
Ce gabarit est appelé à la fin de chacun des modèles de thème
*/
?>

<div id="footer" class="global">
        <footer>
            <div class="colones-footer">
                
                <div>
                    <h3>À propos</h3>
                    <a href="#">Qui sommes nous?</a>
                </div>
                <div>
                    <h3>Besoin d'aide?</h3>
                    <a href="#">Aide et assistance</a>
                    <?php get_search_form(); ?>
                </div>
                <div>
                    <h3>Nous trouver</h3>
                    <div class="icones__svg">
                        <a href="https://www.facebook.com/"><img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000" width="32" height="32"></a>
                        <a href="https://www.twitter.com/"><img src="https://s2.svgbox.net/social.svg?ic=twitter&color=000" width="32" height="32"></a>
                        <a href="https://www.youtube.com/"><img src="https://s2.svgbox.net/social.svg?ic=youtube&color=000" width="32" height="32"></a>
                        <a href="https://www.instagram.com/"><img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="32" height="32"></a>
                    </div>
                </div>

            </div>
            <section class="flexbox__elm">
                <h3>Nos partenaires</h3>
            <?php 
                    wp_nav_menu(array(
                        "menu" => "footer",
                        "container" => "nav")); ?>
            </section>
            
            <a href="#">Retour vers le haut</a>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>