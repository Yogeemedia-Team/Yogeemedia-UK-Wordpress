<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yogeemedia-uk
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>


	<!-- ========== Start Stylesheet ========== -->
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/flaticon-set.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper-bundle.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/validnavs.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/helper.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/unit-test.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
	<!-- ========== End Stylesheet ========== -->

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php
	get_template_part('template-parts/preloader');
	?>
	<!-- Header 
    ============================================= -->
	<header>
		<!-- Start Navigation -->
		<nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs navbar-fixed white no-background">


			<div class="container d-flex justify-content-between align-items-center">


				<!-- Start Header Navigation -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
						<?php
						$custom_logo_id = get_theme_mod('custom_logo'); // Get the custom logo ID.
						$logo_image = wp_get_attachment_image_src($custom_logo_id, 'full'); // Get the logo image URL.

						if (has_custom_logo()) {
							echo '<img src="' . esc_url($logo_image[0]) . '" alt="' . get_bloginfo('name') . '">';
						} else {
							echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/logo-light.png" alt="' . get_bloginfo('name') . '">';
						}
						?>
					</a>

				</div>
				<!-- End Header Navigation -->

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<?php
					$custom_logo_id = get_theme_mod('custom_logo'); // Get the custom logo ID.
					$logo_image = wp_get_attachment_image_src($custom_logo_id, 'full'); // Get the logo image URL.

					if (has_custom_logo()) {
						echo '<img src="' . esc_url($logo_image[0]) . '" alt="' . get_bloginfo('name') . '">';
					} else {
						echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/logo-light.png" alt="' . get_bloginfo('name') . '">';
					}
					?>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-times"></i>
					</button>
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary-menu',
						'container'      => false,
						'menu_class'     => 'nav navbar-nav navbar-center',
						'walker'         => new WP_Bootstrap_Navwalker(),
					));

					?>
				</div><!-- /.navbar-collapse -->


				<div class="attr-right">
					<!-- Start Atribute Navigation -->
					<div class="attr-nav flex">
						<ul>
							<li class="side-menu">
								<a href="#">
									<span class="bar-1"></span>
									<span class="bar-2"></span>
									<span class="bar-3"></span>
								</a>
							</li>
						</ul>
					</div>
					<!-- End Atribute Navigation -->


					<!-- Start Side Menu -->
					<div class="side">
						<a href="#" class="close-side"><i class="fas fa-times"></i></a>
						<div class="widget">
							<div class="logo">
								<?php
								$custom_logo_id = get_theme_mod('custom_logo'); // Get the custom logo ID.
								$logo_image = wp_get_attachment_image_src($custom_logo_id, 'full'); // Get the logo image URL.

								if (has_custom_logo()) {
									echo '<img src="' . esc_url($logo_image[0]) . '" alt="' . get_bloginfo('name') . '">';
								} else {
									echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/logo-light.png" alt="' . get_bloginfo('name') . '">';
								}
								?>
							</div>
						</div>
						<div class="widget">
							<p>
							<?php the_field('header_description', 'option'); ?>
							</p>
						</div>
						<div class="widget address">
							<div>
								<ul>
									<li>
										<div class="content">
											<p>Address</p>
											<strong><?php the_field('address', 'option'); ?></strong>
										</div>
									</li>
									<li>
										<div class="content">
											<p>Email</p>
											<strong><?php the_field('email', 'option'); ?></strong>
										</div>
									</li>
									<li>
										<div class="content">
											<p>Contact</p>
											<strong><?php the_field('phone', 'option'); ?></strong>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="widget newsletter">
							<h4 class="title">Get Subscribed!</h4>
							<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
								<div class="input-group stylish-input-group">
								<input type="hidden" name="action" value="process_email_form">
									<input type="email" placeholder="Enter your e-mail" class="form-control" name="email">
									<span class="input-group-addon">
										<button type="submit">
											<i class="fas fa-arrow-right"></i>
										</button>
									</span>
								</div>
							</form>
						</div>
						<div class="widget social">
							<ul class="link">
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
					<!-- End Side Menu -->

				</div>
				<!-- Main Nav -->

			</div>
			<!-- Overlay screen for menu -->
			<div class="overlay-screen"></div>
			<!-- End Overlay screen for menu -->
		</nav>
		<!-- End Navigation -->
	</header>
	<!-- End Header -->