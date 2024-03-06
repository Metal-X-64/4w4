<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thème du groupe #1</title>
    <!-- link rel="stylesheet" href="<normalize.css" -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalise.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <nav id="menu" class="global">
        <header class="menu__header">
            <?php wp_nav_menu(array("container" => "nav")); ?>
        </header>
    </nav>
    <div id="entete" class="global">
        <section class="entete__header">
            <h1>Thème du groupe #1 (h1)</h1>
            <h2>4w4-Conception d'interface <span>et développement Web</span></h2>
            <h3>TIM-Collège de Maisoneuve</h3>
            <div class="espace">
                <button>Événements</button>
            </div>
        </section>
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var(--couleur-arriere-accueil);"></path>
            </svg>
        </div>
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
                    $sigle = substr($titre,0,7);

                    $pos_parenthese = strpos($titre, '(');
                    $duree = substr($titre, $pos_parenthese+1,-1);
                    $titre = substr($titre,7, $pos_parenthese-7);

                    // $titrecours = substr($titre,7,-6);
                    // $duree = substr($titre,-6,6);

                    //$titre = 
                    //strpos()
                    
                    ?>
                    <div class="carte">
                        <h4><?php echo $sigle; ?></h4>
                        <!-- <h3><?php echo $titrecours;?></h3> -->
                        <h3><?php echo $titre; ?></h3>
                        <p><?php echo wp_trim_words(get_the_content(),20); ?></p>
                        <h4>Durée: <?php echo $duree; ?></h4>
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
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style="fill: var(--couleur-arriere-entete);"></path>
            </svg>
        </div>
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