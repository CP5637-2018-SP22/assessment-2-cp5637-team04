<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package U3A
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
            <?php
			wp_nav_menu( array(
				'theme_location' => 'social',
				
			) );
			?>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'u3a' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'u3a' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'u3a' ), 'u3a', '<a href="http://underscores.me/">Baljinder kaur,Avneet kaur,Mayuresh</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
