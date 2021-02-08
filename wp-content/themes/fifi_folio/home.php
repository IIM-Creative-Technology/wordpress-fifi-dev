<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fifi_folio
 */

get_header();
?>

	<main id="primary" class="site-main">

	<section>
	<h1>Fideline Bazana Ntomo</h1>
	</section>
<div class="row">
		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				?>
				<div class="col-sm-4">
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php the_title() ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
    <p class="card-text">
	<?php the_content('En voir plus') ?>
	</p>
  </div>
</div>
</div>
				<?php
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				/*get_template_part( 'template-parts/content', get_post_type() );*/

			endwhile;

			/*the_posts_navigation();*/
			?>
</div>
			<?php
		else :
			?>
			<h4>Pas encore d'articles</h4>
			<?php
		endif;
		?> 

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
