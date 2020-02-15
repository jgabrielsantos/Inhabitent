<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="first-grid-row">
					<div id="secondary" class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer_sidebar' ); ?>
					</div>
					<div class="footer-logo">
						<img src="images/logos/inhabitent-logo-tent.svg" alt="Footer Logo">
					</div>
				</div>
				<div class="site-info">
					<p>COPYRIGHT &#169 2019 INHABITENT</p>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
