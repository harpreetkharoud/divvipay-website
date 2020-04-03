<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package divvipay
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<div class="footer-widget-wrap">
	<?php dynamic_sidebar('footer-1'); ?>
	<?php dynamic_sidebar('footer-2'); ?>
	<?php dynamic_sidebar('footer-3'); ?>
	</div>
		<!-- <?php
		wp_nav_menu( array(
			'theme_location' => 'secondary',
			'menu_id'        => 'secondary-menu',
		) );
		?> -->
		<!-- <?php
		wp_nav_menu( array(
			'theme_location' => 'social',
			'menu_id'        => 'social-menu',
		) );
		?> -->
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'divvipay' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'divvipay' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'divvipay' ), 'divvipay', '<a href="http://divvipay@gmail.com">Divvipay</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
