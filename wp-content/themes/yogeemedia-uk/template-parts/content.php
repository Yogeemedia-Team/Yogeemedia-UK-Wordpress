<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package yogeemedia-uk
 */

?>

<div class="blog-style-one item bg-dark">

	<div class="blog-item-box">

		<div class="thumb">
			<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>"></a>
		</div>
		<div class="info">
			<div class="meta">
				<ul>
					<li>
						<i class="fas fa-user"></i> <?php the_author_posts_link(); ?>
					</li>
					<li>
						<i class="fas fa-calendar-alt"></i> <?php the_time('j F, Y'); ?>
					</li>
				</ul>
			</div>

			<p><?php the_content(); ?></p>
			
		</div>
	</div>
</div>