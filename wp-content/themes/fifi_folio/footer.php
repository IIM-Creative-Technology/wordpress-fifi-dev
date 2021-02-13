<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fifi_folio
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<div class="flex">
			<p>  2021 - Website made with love by</p>
			<div class="logoContainer">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fifi_black.png" alt="logo Fideline Bazana Ntomo">
			</div>	
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
