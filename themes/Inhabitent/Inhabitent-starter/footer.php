<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>">
					</a>
					<div class="parent">
						<div class="footer-block">
							<div class="contact-info">
								<h3 class="header">CONTACT INFO</h3>
								<p class="contact email">EMAIL info@inhabitent.com</p>
								<p class="contact phone">PHONE 779-456-7891</p>
								<p class="social-media">Facebook Twitter Google+</p>
							</div>
						</div>
	
						<div class="footer-block">
							<div class="business-hours">
								<h3 class="header">BUSINESS HOURS</h3>
								<p class="hours weekdays"><strong>Monday-Friday</strong> 9am to 5pm</p>
								<p class="hours saturday"><strong>Saturday</strong> 10am to 2pm</p>
								<p class="hours sunday"><strong>Sunday</strong> Closed</p>
							</div>
						</div>
	
						<div class="footer-block">
							<div class="footer-logo">
								<!-- <?php $logo_footer =  get_template_directory_uri() . '/project-04/images/logos/inhabitent-logo-text.svg' ?> -->
								<img src="<?php echo $logo_footer; ?>" alt="logo">
							</div>
						</div>
					</div>

					<div class="copyright">
						<div class="footer-footer">
							<p>COPYRIGHT &copy; 2016 INHABITENT</p>
						</div>
					</div>

				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
