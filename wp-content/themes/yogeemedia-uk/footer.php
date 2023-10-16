<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yogeemedia-uk
 */

?>

<!-- Start Footer 
    ============================================= -->
<footer>
	<div class="footer-box">
		<div class="container">
			<div class="f-items default-padding-bottom pt-70 pt-xs-0">
				<div class="row">
					<!-- Singel Item -->
					<div class="col-lg-3 col-md-6 footer-item mt-50">
						<div class="f-item about pr-50 pr-xs-0 pr-md-0">
							<?php
							$custom_logo_id = get_theme_mod('custom_logo'); // Get the custom logo ID.
							$logo_image = wp_get_attachment_image_src($custom_logo_id, 'full'); // Get the logo image URL.

							if (has_custom_logo()) {
								echo '<img src="' . esc_url($logo_image[0]) . '" alt="' . get_bloginfo('name') . '">';
							} else {
								echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/logo-light.png" alt="' . get_bloginfo('name') . '">';
							}
							?>
							<p class="mt-4">
								<?php the_field('short_description', 'option'); ?>
							</p>

							<div class="footer-social mt-30">
								<ul>
									<?php

									// Check rows existexists.
									if (have_rows('socialmedia', 'option')) :

										// Loop through rows.
										while (have_rows('socialmedia', 'option')) : the_row();
									?>
											<li><a target="_blank" href="<?php the_sub_field('link'); ?>"><i class="<?php the_sub_field('icon'); ?>"></i></a></li>

									<?php
										// End loop.
										endwhile;
									endif;
									?>
								</ul>
							</div>
						</div>
					</div>
					<!-- End Singel Item -->

					<!-- Singel Item -->
					<div class="col-lg-3 col-md-6 mt-50 footer-item pl-50 pl-md-15 pl-xs-15">
						<div class="f-item link">
							<h4 class="widget-title">Company</h4>
							<?php
							$footer_menu_args = array(
								'theme_location' => 'footer-menu', // Replace with your registered menu location name.
								'container'      => 'ul',
							);

							wp_nav_menu($footer_menu_args);
							?>

						</div>
					</div>
					<!-- End Singel Item -->

					<!-- Singel Item -->
					<div class="col-lg-3 col-md-6 footer-item  mt-50">
						<div class="f-item contact">
							<h4 class="widget-title">Contact Info</h4>
							<ul>
								<li>
									<div class="content">
										<strong>Address:</strong>
										<?php the_field('address', 'option'); ?>
									</div>
								</li>
								<li>
									<div class="content">
										<strong>Email:</strong>
										<a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
									</div>
								</li>
								<li>
									<div class="content">
										<strong>Phone:</strong>
										<a href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- End Singel Item -->

					<!-- Singel Item -->
					<div class="col-lg-3 col-md-6 footer-item mt-50">
						<div class="f-item newsletter">
							<h4 class="widget-title">Newsletter</h4>
							<p>
								Join our subscribers list to get the instant latest news and special offers.
							</p>
							<!-- <form action="#">
								<input type="email" placeholder="Your Email" class="form-control" name="email">
								<button type="submit"><i class="fas fa-arrow-right"></i></button>
							</form> -->
							<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
								<input type="hidden" name="action" value="process_email_form">
									<input type="email" placeholder="Your Email" class="form-control" name="email" required>
								<button type="submit"><i class="fas fa-arrow-right"></i></button>
							</form>

						</div>
					</div>
					<!-- End Singel Item -->


				</div>
			</div>
		</div>

		<!-- Footer Bottom -->
		<div class="footer-bottom bg-dark text-light text-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 offset-lg-3">
						<p>
							Copyright &copy; <script>
								document.write(new Date().getFullYear())
							</script> <?php echo get_bloginfo('name'); ?>. All Rights Reserved
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Bottom -->
	</div>
</footer>

<?php
get_template_part('template-parts/quotation-model');
?>

<!-- End Footer -->

<!-- jQuery Frameworks
    ============================================= -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.6.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.appear.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/progress-bar.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/circle-progress.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/magnific-popup.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/count-to.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.scrolla.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollOnReveal.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/YTPlayer.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/validnavs.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollTrigger.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>

</html>