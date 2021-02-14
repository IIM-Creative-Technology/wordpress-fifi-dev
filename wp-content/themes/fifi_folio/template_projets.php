<?php

/**
 *  Template Name: Mes projets
 */

get_header();
?>

<main id="primary" class="site-main">

<?php 
get_sidebar(); ?>

<!-- Affichage des projets -->
  <?php 
    $args = array(
        'post_type' => 'portofolio'
    );
    $the_query = new WP_Query($args);
  ?>
  <?php if ($the_query->have_posts() ): while ($the_query->have_posts() ) :$the_query->the_post(); ?>
  <div class="col-sm-4">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php the_title() ?></h5>
    <p class="card-text">
	<?php the_content('En voir plus') ?>
	</p>
  </div>
</div>
  <?php the_excerpt(); ?>
  <?php the_content()?>
  <a href="<?php the_permalink()?>" class="button">Voir le projet</a>
  <?php endwhile; ?>
  <?php endif; ?>

<!-- Affichage des projets -->

	</main><!-- #main -->

<?php
get_footer();
