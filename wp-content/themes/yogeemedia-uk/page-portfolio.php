<?php
/* Template Name: Portfolio Page */
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
                    <h1>Take a look some of <br> our recent case studies</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->


<!-- Start Portfolio 
============================================= -->
<div class="portfolio-style-one-area default-padding">
    <div class="container">
        <div class="row mt--50">

            <?php
            // WP Query to fetch projects
            $args = array(
                'post_type' => 'projects', // Assuming 'projects' is the name of your custom post type
                'posts_per_page' => -1, // Adjust the number of projects to display
            );

            $project_query = new WP_Query($args);

            // Loop through projects
            while ($project_query->have_posts()) :
                $project_query->the_post();

                // Get all categories for the current project
                $categories = get_the_category();
            ?>
                <!-- Single Item -->
                <div class="col-lg-6 item-center">
                    <div class="portfolio-style-one animate" data-animate="fadeInUp">
                        <div class="thumb-zoom">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php else : ?>
                                <!-- Default Image if no thumbnail -->
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x800.png" alt="Image Not Found">
                            <?php endif; ?>
                        </div>
                        <div class="pf-item-info">
                            <div class="content-info">
                                <?php if (!empty($categories)) : ?>
                                    <span>
                                        <?php
                                        foreach ($categories as $category) {
                                            echo esc_html($category->name) . ' ';
                                        }
                                        ?>
                                    </span>
                                <?php endif; ?>
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                            <div class="button">
                                <a href="<?php the_permalink(); ?>" class="pf-btn"><i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            <?php
            endwhile;
            wp_reset_postdata(); // Reset the query to the main loop
            ?>

        </div>
    </div>
</div>
<!-- End Portfolio -->




<?php
get_footer();
