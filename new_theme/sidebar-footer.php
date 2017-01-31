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
			<div id="mc_embed_signup">
				<form action="//riipen.us7.list-manage.com/subscribe/post?u=eb86e81b0b5260b837636d6db&amp;id=91ad500c12" method="post" id="mc-embedded-subscribe-form"
								name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
						<label for="mce-EMAIL">Be Updated!</label>
						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
						<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_eb86e81b0b5260b837636d6db_91ad500c12" tabindex="-1" value=""></div>
						<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</div>
				</form>
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