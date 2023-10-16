<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package yogeemedia-uk
 */

get_header();
?>

<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area bg-gray">
	<div class="container">
		<div class="breadcrumb-item">
			<div class="breadcrum-shape">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/bg-shape-3.png" alt="shape">
			</div>
			<div class="row">
				<div class="col-lg-8">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li><a href="#"><i class="fas fa-home"></i> Home</a></li>
							<li class="active"><?php the_title(); ?></li>
						</ol>
					</nav>
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumb -->


<!-- Start Blog
    ============================================= -->
<div class="blog-area single full-blog right-sidebar full-blog default-padding">
	<div class="container">
		<div class="blog-items">
			<div class="row">
				<div class="blog-content col-xl-8 col-lg-7 col-md-12 pr-35 pr-md-15 pl-md-15 pr-xs-15 pl-xs-15">

					<?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content', get_post_type());

					endwhile; // End of the loop.
					?>
				</div>
				<?php
				get_sidebar();
				?>
			</div>

		</div>
	</div>
</div>
<!-- End Blog -->

<?php
get_footer();
