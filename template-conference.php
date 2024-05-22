<?php
/**
 * Template name: Conférence
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
        <p>L'adresse de l'evénement : <?php the_field('adresse'); ?></p>
        <p>La date et l'heure de l'événement : <?php the_field('date_et_heure'); ?></p>     
        <?php endif;?>
    </section>
</div><!-- #main -->
<?php
get_footer();