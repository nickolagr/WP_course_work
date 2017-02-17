<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package course2
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<!--add my menu-->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Footer Menu', 'course2' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' )); ?>
		</nav>
		<!--second my menu-->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Sidebar Menu', 'course2' ); ?></button>
			<?php wp_nav_menu( array( 
			'theme_location' => 'sidebar-menu' )); ?>
		</nav>
		<!--other code-->
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'course2' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'course2' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'course2' ), 'course2', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
