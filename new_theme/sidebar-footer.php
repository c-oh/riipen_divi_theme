<?php
	if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) && ! is_active_sidebar( 'sidebar-4' ) && ! is_active_sidebar( 'sidebar-5' ) )
		return;
?>
	<div class="container">
		<div id="footer-widgets" class="clearfix">
			<div class="footer-menu">
				<?php
		$footer_sidebars = array( 'sidebar-2', 'sidebar-3', 'sidebar-4', 'sidebar-5' );

		foreach ( $footer_sidebars as $key => $footer_sidebar ) :
			if ( is_active_sidebar( $footer_sidebar ) ) :
				echo '<div class="footer-widget' . ( 3 === $key ? ' last' : '' ) . '">';
				dynamic_sidebar( $footer_sidebar );
				echo '</div> <!-- end .footer-widget -->';
			endif;
		endforeach;
	?>
			</div>
			<!-- Begin MailChimp Signup Form -->
			<div id="mailchimp">
				
			<?php echo do_shortcode( '[yikes-mailchimp form="1"]' ); ?>

			</div>
			<!--End mc_embed_signup-->
			<!-- #footer-widgets -->
			<div class="social-media-section">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}

					echo et_get_footer_credits();
				?>
			</div>
			<!--social media-->
		</div>
		<!-- #footer-widgets -->
		<div class="copyright">
			<p> &#169; Copyright Riipen 2017</p>
		</div>
	</div>
	<!-- .container -->