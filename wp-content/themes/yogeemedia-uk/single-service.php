<?php

/**
 * Single Template for Services
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
                            <li class="active">Service</li>
                        </ol>
                    </nav>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Star Services Details Area
    ============================================= -->
<div class="services-details-area default-padding">
    <div class="container">
        <div class="services-details-items">
            <div class="row">

                <div class="col-xl-8 col-lg-7 pr-45 pr-md-15 pr-xs-15 services-single-content">
                    <div class="service-single-thumb">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'img-fluid w-100', 'alt' => get_the_title())); ?>
                        <?php endif; ?>
                    </div>
                    <?php
                    if (get_field('subtitle')) :
                    ?>
                        <h2><?php the_field('subtitle'); ?></h2>
                    <?php
                    endif;
                    ?>
                    <p>
                        <?php the_content(); ?>
                    </p>
                    <div class="features mt-40 mt-xs-30">
                        <div class="row">
                            <div class="col-lg-5 col-md-6">
                                <div class="content">
                                    <h3>Included Services</h3>
                                    <ul class="feature-list-item">

                                        <?php

                                        // check if the repeater field has rows of data
                                        if (have_rows('homepage_points')) :

                                            // loop through the rows of data
                                            while (have_rows('homepage_points')) : the_row();
                                        ?>
                                                <li><?php the_sub_field('point'); ?></li>
                                        <?php
                                            endwhile;

                                        endif;

                                        ?>

                                        <?php
                                        // Check rows existexists.
                                        if (have_rows('included_services')) :
                                            // Loop through rows.
                                            while (have_rows('included_services')) : the_row();
                                        ?>
                                                <li><?php the_sub_field('service'); ?></li>
                                        <?php
                                            // End loop.
                                            endwhile;
                                        endif;
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <?php if (get_field('the_challange')) :
                            ?>
                                <div class="col-lg-7 col-md-6 mt-xs-30">
                                    <div class="content">
                                        <h3>The Challange</h3>
                                        <p>
                                            <?php the_field('the_challange'); ?>
                                        </p>
                                    </div>
                                </div>
                            <?php endif;
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5 mt-md-50 mt-xs-50 pl-30 pl-md-15 pl-xs-15 services-sidebar">
                    <!-- Single Widget -->
                    <div class="single-widget services-list-widget">
                        <h4 class="widget-title">Services</h4>
                        <ul>

                            <?php
                            // WP Query to fetch services
                            $args = array(
                                'post_type' => 'service', // Assuming 'services' is the name of your custom post type
                                'posts_per_page' => -1, // Adjust the number of posts to display
                                'orderby'        => 'date', // Order by date
                                'order'          => 'ASC',
                            );

                            $services_query = new WP_Query($args);

                            // Loop through services
                            while ($services_query->have_posts()) :
                                $services_query->the_post();
                            ?>
                                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?> <i class="fas fa-arrow-right"></i></a></li>
                            <?php
                            endwhile;
                            wp_reset_postdata(); // Reset the query to the main loop
                            ?>

                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Services Details Area -->

<?php
get_footer();
