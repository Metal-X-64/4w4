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
                    <a href="https://www.google.com/">Recherche</a>
                </div>
                <div class="flexbox__sites">
                
                </div>
                <div>
                    <h3>Nous trouver</h3>
                    <a href="https://www.facebook.com/">Facebook</a>
                    <a href="https://www.twitter.com/">Twitter</a>
                    <a href="https://www.youtube.com/">YouTube</a>
                    <a href="https://www.instagram.com/">Instagram</a>
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