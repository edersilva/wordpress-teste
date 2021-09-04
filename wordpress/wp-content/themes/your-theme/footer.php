<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package your-theme
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="container site-info">
			<small class="text-muted">
				<?php
				printf( esc_html__( 'Feito com amor por Tatiane Gabrielle', 'your-theme' ), 'WordPress' );
				?>
			</small>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
