<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package yogeemedia-uk
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

<!-- Start Sidebar -->
<div class="sidebar col-xl-4 col-lg-5 col-md-12 mt-md-50 mt-xs-50">
	<aside>
		<div class="sidebar-item search bg-dark">
			<div class="sidebar-info">
				<form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
					<input type="text" placeholder="Enter Keyword" name="s" class="form-control">
					<button type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>
		</div>

		<div class="sidebar-item recent-post bg-dark">
			<h4 class="title">Recent Post</h4>
			<ul>
				<?php
				$recent_posts = new WP_Query(array(
					'post_type' => 'post',
					'posts_per_page' => 5 // Adjust the number of recent posts to display
				));

				while ($recent_posts->have_posts()) : $recent_posts->the_post();
				?>
					<li>
						<div class="thumb">
							<a href="<?php the_permalink(); ?>">
								<?php if (has_post_thumbnail()) : ?>
									<img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title_attribute(); ?>">
								<?php else : ?>
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/800x800.png" alt="Default Thumbnail">
								<?php endif; ?>
							</a>
						</div>
						<div class="info">
							<div class="meta-title">
								<span class="post-date"><?php the_date('d M, Y'); ?></span>
							</div>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
					</li>
				<?php endwhile;
				wp_reset_postdata(); // Reset the query to the main loop
				?>
			</ul>
		</div>

		<div class="sidebar-item category bg-dark">
			<h4 class="title">Category List</h4>
			<div class="sidebar-info">
				<ul>
					<?php
					$categories = get_categories();
					foreach ($categories as $category) :
					?>
						<li>
							<a href="<?php echo esc_url(get_category_link($category->term_id)); ?>">
								<?php echo esc_html($category->name); ?> <span><?php echo esc_html($category->count); ?></span>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>

	</aside>
</div>
<!-- End Sidebar -->