<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fifi_folio
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found" id="centered">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! Cette page est introuvable ...', 'fifi_folio' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'Vous vous etes perdu lors de votre trajet... Vous pouvez essayer de prendre un notre chemin !', 'fifi_folio' ); ?></p>
				<img src="img/404.png" alt="404 space illustration">

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
