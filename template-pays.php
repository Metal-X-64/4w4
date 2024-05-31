<?php
/**
 * Template name: Pays
 *
 */
?>

<?php get_header(); ?>
<div id="entete" class="global clr-agencement-secondaire">
    <section>
    <?php
        if ( have_posts() ) : the_post(); ?>
        <h1><?= get_the_title(); ?></h1>
        <?php the_content();?>    
        <?php endif;?>
    </section>
    <?php get_template_part("gabarits/vague"); ?>
</div>
<div id="galerie" class="global">
        <?php
            // Appel du shortcode directement dans le fichier front-page.php
            echo do_shortcode('[em_pays]');
            ?>
    <!--<?php get_template_part("gabarits/vague"); ?>-->
</div>
<?php
get_footer();