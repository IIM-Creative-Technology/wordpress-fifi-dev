<?php

/**
 *  Template Name: Mes projets
 */

get_header();
?>

<main id="primary" class="site-main">

    <h1>Mes projets</h1>
    <div class="row">
        <!-- Affichage des projets -->
        <?php 
    $args = array(
        'post_type' => 'portofolio'
    );
    $the_query = new WP_Query($args);
  ?>
        <?php if ($the_query->have_posts() ): while ($the_query->have_posts() ) :$the_query->the_post(); ?>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="card" style="width: 20rem;">
                <div class="card-img-top">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?php the_title() ?></h5>
                    <p class="card-text">
                        <?php the_excerpt() ?>
                    </p>
                    <a href="<?php the_permalink()?>" class="button">Voir le projet</a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>

        <!-- Affichage des projets -->

</main><!-- #main -->

<?php
get_footer();
