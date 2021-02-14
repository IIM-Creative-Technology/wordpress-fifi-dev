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
	<?php
echo do_shortcode('[smartslider3 slider="3"]');
?>
	</section>
	<!--  -->
	<section id="section" class="flex">
	    <div  class="left_side">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profil_img.jpg" alt="Photo Fideline Bazana">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/profil_img.jpg" alt="Photo Fideline Bazana" class="back_img">
		<p> - I am a web designer studient - </p>
		</div>
	    <div class="right_side">
			<div>
			<h2>Qui suis-je ?</h2>
			<h1>FIDELINE BAZANA NTOMO</h1>
			<p> Etudiante à L'IIM - Institut de l'Internet et du Multimédia pour le Mastère Interactivité et UX Design, je souhaite devenir à terme Développeur Web.
			Ma formation à l’IIM m’a permis d’acquérir des nombreuses competences en developpement Web et en web design, notament sur l’utilation de differents languages de programmation et outils de conception d’expérience utilisateur que je voudrais appliquer sur des projets concrets.</p>
			<div>
			<a href="http://wordpress.test/a-propos/">Lire Plus</a>
			<a href="#" class="button" download="cv_fidelineBazanaNtomo.pdf">Télécharger Mon CV</a>
			</div>
			</div>
		</div>
	</section>
	<section id="section">
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

			<?php
		else :
			?>
			<h4>Pas encore d'articles</h4>
			<?php
		endif;
		?> 
</section>
	</main><!-- #main -->

<?php
get_footer();
