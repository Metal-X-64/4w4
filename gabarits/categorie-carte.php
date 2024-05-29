<?php
/**
*   template-part pour créer une carte
*/
?>

<div class="carte">
    
                <h3 class="global clr-agencement-ternaire"><?php the_title(); ?></h3>
                <?php 
                        // permet d'afficher l'image de l'article qui a été publié
                        the_post_thumbnail('thumbnail'); ?>
                <p><?php echo wp_trim_words(get_the_content(),10); ?></p>
                <!-- ajoute un lien vers l'article -->
                <a href="<?php the_permalink(); ?>">Suite</a>
                <?php the_category(); ?>
                    
</div>