<?php
	$footer_title               = get_field( 'footer_title', 'option' );
	$footer_subtitle            = get_field( 'footer_subtitle', 'option' );
	$footer_contact_info        = get_field( 'footer_contact_info', 'option' );
	$footer_address             = get_field( 'footer_address', 'option' );
	$newsletters_title          = get_field( 'newsletters_title', 'option');
	$newsletters_form_shortcode = get_field( 'newsletters_form_shortcode', 'option' );
	$facebook_page_url          = get_field( 'facebook_page_url', 'option' );
	$linkedin_page_url          = get_field( 'linkedin_page_url', 'option' );
?>

<footer class="footer" role="contentinfo">

	<div class="row">
		<div class="large-12 columns">
			<div class="footer-inner">
				<?php if( $footer_title ) : ?>
					<div class="footer-title">
						<h3>
							<?php echo $footer_title; ?>
							<img src="<?php echo THEME; ?>/images/light-logo.png" alt="<?php echo $footer_title; ?>" role="presentation">
						</h3>
					</div>
				<?php endif; ?>

				<div class="section-gold-devider"><span></span></div>

				<?php if( $footer_subtitle ) : ?>
					<div class="footer-subtitle">
						<?php echo $footer_subtitle; ?>
					</div>
				<?php endif; ?>

				<?php if( $footer_contact_info ) : ?>
					<div class="footer-contact-info">
						<ul class="footer-contact-list os-english">
							<?php foreach( $footer_contact_info as $item ) : ?>
								<?php if( $item ) : ?>
									<li>
										<span><?php echo $item['label']; ?></span>
										<?php echo $item['content']; ?>
									</li>
								<?php endif; ?>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>

				<?php if( $footer_address ) : ?>
					<div class="footer-address">
						<?php echo $footer_address; ?>
					</div>
				<?php endif; ?>

				<?php if( $newsletters_title ) : ?>
					<div class="footer-newsletters-title">
						<?php echo $newsletters_title; ?>
					</div>
				<?php endif; ?>

				<?php if( $newsletters_form_shortcode ) : ?>
					<div class="footer-newsletters-shortcode">
						<?php echo do_shortcode( $newsletters_form_shortcode ); ?>
					</div>
				<?php endif; ?>

				<?php if( $facebook_page_url || $linkedin_page_url ) : ?>
					<div class="footer-socials">
						<?php if( $linkedin_page_url ) : ?>
							<a href="<?php echo $linkedin_page_url; ?>" title="Linkedin">
								<img src="<?php echo THEME; ?>/images/linkedin-button.png" alt="Follow us on Linkedin">
							</a>
						<?php endif; ?>
						<?php if( $facebook_page_url ) : ?>
							<a href="<?php echo $facebook_page_url; ?>" title="Facebook">
								<img src="<?php echo THEME; ?>/images/facebook-button.png" alt="Follow us on Facebook">
							</a>
						<?php endif; ?>
					</div>
				<?php endif; ?>


			</div>
		</div>
	</div>

</footer><!-- /footer -->

</div><!-- end of site-wrapper -->

</div><!-- end of off-canvas-content -->

</div><!-- end of off-canvas-wrapper -->

<?php wp_footer(); ?>

</body>

</html>
