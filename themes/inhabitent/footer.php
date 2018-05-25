<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">

				<div class="footer-blocks container">
					<div class="footer-block">
						<div class="contatc">
							<h3>Contact Info</h3>
							<p>
								<i class="fas fa-envelope"></i>
								<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
							</p>
							<p>
								<i class="fa fa-phone"></i>
								<a href="tel:7784567891">778-456-7891</a>
							</p>
							<p>
								<i class="fab fa-facebook-square"></i>
								<i class="fab fa-twitter-square"></i>
								<i class="fab fa-google-plus-square"></i>
							</p>
						</div>
					</div>

					<div class="footer-block">
						<div class="business-hours">

							<h3>Business Hours</h3>
							<p>
								<span class="days">Monday-Friday:</span> 9am to 5pm
							</p>
							<p>
								<span class="days">Saturday:</span> 10am to 2pm
							</p>
							<p>
								<span class="days">Sunday:</span>Closed
							</p>

						</div>
					</div>

					<div class="footer-block">
						<div class="logo-footer">
							<a href="http://localhost:3000/inhabitent/" rel="Home">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text.svg" alt="Inhabitent logo">
							</a>			
						</div>
					</div>

				</div>

				<div class="copy-right">
					<div class="container">
						Copyright © 2017 Inhabitent
					</div>
				</div>


			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
