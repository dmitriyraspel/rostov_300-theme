<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rostov
 */

?>

<div class="footer footer-dark">
	
	<aside class="footer-widget-area container">
	
		<div class="footer-widgets-1">
			<?php dynamic_sidebar( 'sidebar-1' );?>
		</div>

		<div class="footer-widgets-2">
			<?php dynamic_sidebar( 'sidebar-2' );?>
		</div>

	</aside><!-- /.footer-widgets-aria -->


	<footer id="colophon" class="site-footer">

		<div class="site-info">
			Copyright ©

			<span class="sep"> | </span>
			<a href="https://rostov300.ru/politika-konfidenczialnosti">Политика конфиденциальности</a>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- /.footer -->




</div><!-- #page -->




<?php get_template_part( 'template-parts/flyout' ); ?>

<?php wp_footer(); ?>

</body>
</html>
