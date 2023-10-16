<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
							<li class="active">Search Results</li>
						</ol>
					</nav>
					<h1><?php
						/* translators: %s: search query. */
						printf(esc_html__('Search Results for: %s', 'yogeemedia-uk'), '<span>' . get_search_query() . '</span>');
						?></h1>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumb -->

<!-- Start Blog
    ============================================= -->
<div class="search-area blog-area single full-blog right-sidebar full-blog default-padding">
	<div class="container">
		<div class="blog-items">


			<?php if (have_posts()) : ?>

			<?php
				/* Start the Loop */
				while (have_posts()) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part('template-parts/content', 'search');

				endwhile;

				the_posts_navigation();

			else :

				get_template_part('template-parts/content', 'none');

			endif;
			?>
		</div>
	</div>
</div>
<!-- End Blog -->


<?php
get_footer();
