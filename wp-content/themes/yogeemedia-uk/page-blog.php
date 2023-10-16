<?php
/* Template Name: Blog Page */
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
                            <li class="active">Blog</li>
                        </ol>
                    </nav>
                    <h1>Blog</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Blog 
    ============================================= -->
<div class="blog-area home-blog blog-style-two-area default-padding">
    <div class="container">
        <div class="row">

            <?php
            // Define the custom query
            $args = array(
                'post_type' => 'post', // You can change this to your custom post type if needed
                'paged'     => $paged,
                'posts_per_page' => 6,
            );
            $query = new WP_Query($args);

            // Check if there are any posts
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
            ?>

                    <!-- Single Item -->
                    <div class="col-lg-6 col-md-6 mb-30">
                        <div class="home-blog-two">
                            <div class="thumb">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('large'); // You can change 'thumbnail' to other sizes like 'medium', 'large', or a custom size
                                    } else {
                                        // If there's no featured image, you can display a default image
                                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/assets/img/800x600.png" alt="' . esc_attr(get_the_title()) . '">';
                                    }
                                    ?>
                                </a>
                                <div class="date"><?php echo get_the_date('d'); ?> <strong><?php echo get_the_date('M'); ?></strong></div>
                            </div>

                            <div class="info">
                                <div class="content">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><?php the_author(); ?></a>
                                            </li>
                                            <li>
                                                <a href="#"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <a href="<?php the_permalink(); ?>" class="button-regular">
                                        Continue Reading <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->

            <?php
                 endwhile;

                 // Output pagination
                 echo '<div class="pagination">';
                 echo paginate_links(array(
                     'total'   => $query->max_num_pages,
                     'current' => max(1, get_query_var('paged')),
                 ));
                 echo '</div>';
         
                 wp_reset_postdata(); // Reset post data after the loop
             endif;
            ?>

        </div>
    </div>
</div>
<!-- End Blog -->

<?php
get_footer();
