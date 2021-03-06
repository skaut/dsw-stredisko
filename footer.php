<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage DSW_Stredisko
 * @since DSW Stredisko 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the DSW Stredisko footer text for footer customization.
				 *
				 * @since DSW Stredisko 1.0
				 */
				do_action( 'dsw-stredisko_credits' );
			?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'dsw-stredisko' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'dsw-stredisko' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
