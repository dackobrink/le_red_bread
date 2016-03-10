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

					<ul class="footer-contact">
							<span id="footer-title"><h3>Contact</h3></span>
							<li><i class="fa fa-envelope"></i> info@leredbread.com</li>
							<li><i class="fa fa-phone"></i> (555) 343 456 7891</li>
							<li><span class="social-icons">
								<i class="fa fa-facebook"></i>
								<i class="fa fa-twitter"></i>
								<i class="fa fa-google-plus"></i>
								</span>
							</li>
					</ul>

					<div class="footer-logo">
						<img src="<?php bloginfo('template_directory'); ?>/images/lrb-logo-white.svg" class="logo" width="300" heightt="60" alt="Le Red Bread logo">
					</div>

					<ul class="footer-business">
						<span id="footer-title"><h3>Business Hours</h3></span>
						<li><span class="weekday">Monday-Friday: </span>9am-5pm</li>
						<li><span class="weekday">Saturday: </span>10am-2pm</li>
						<li><span class="weekday">Sunday: </span>Closed</li>
					</ul>



				</div><!-- .site-info -->

				<div class="copyright">
						<p> Copyright © 2015 Le Red Bread </p>
				</div>

			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
