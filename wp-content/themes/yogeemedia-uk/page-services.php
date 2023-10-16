<?php
/* Template Name: Services Page */
get_header();
?>

<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area bg-gray">
    <div class="container">
        <div class="breadcrumb-item pb-120">
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
                    <h1>Popular Services</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Services
    ============================================= -->
<div class="creative-services-area overflow-hidden bg-gray default-padding-bottom">

    <div class="bg-static">
        <img class="bg-move" src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/5.png" alt="Image Not Found">
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="site-heading">
                    <h4 class="sub-title d-block text-center">Services We Offer</h4>
                    <h2 class="title text-center">Turn Information <br> Into Actionable Insights</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <?php
            // WP Query to fetch services
            $args = array(
                'post_type' => 'service', // Assuming 'services' is the name of your custom post type
                'posts_per_page' => -1,    // Show all posts
            );

            $services_query = new WP_Query($args);

            $counter = 1; // Initialize a counter for incrementing

            // Loop through services
            while ($services_query->have_posts()) :
                $services_query->the_post();
            ?>
                <div class="col-md-4">
                    <!-- Single Item -->
                    <div class="cteative-service-item text-center">
                        <?php
                        // Display service icon/image if available
                        $service_icon_url = get_field('service_icon'); // Assuming 'service_icon' is the name of the custom field for the icon
                        if ($service_icon_url) {
                        ?>
                            <img src="<?php echo esc_url($service_icon_url); ?>" alt="Icon">
                        <?php
                        }
                        ?>
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <p>
                            <?php the_excerpt(); ?>
                        </p>
                        <span><?php echo str_pad($counter, 2, '0', STR_PAD_LEFT); ?></span>
                    </div>
                    <!-- End Single Item -->
                </div>
            <?php
                $counter++; // Increment the counter
            endwhile;
            wp_reset_postdata(); // Reset the query to the main loop
            ?>

        </div>
    </div>

</div>
<!-- End Services -->

<!-- Star Services Details Area
    ============================================= -->
<div class="services-details-area default-padding">
    <div class="container">
        <div class="services-details-items">
            <div class="faq-style-one faq-style-two mt-40">
                <h2 class="mb-30">Any Questions find here.</h2>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Business Innovation
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>
                                    Bennings appetite disposed me an at subjects an. To no indulgence diminution
                                    so discovered mr apartments. Are off under folly death wrote cause her way
                                    spite. Plan upon yet way.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Search Engine Optimization
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>
                                    Cennings appetite disposed me an at subjects an. To no indulgence diminution
                                    so discovered mr apartments. Are off under folly death wrote cause her way
                                    spite. Plan upon yet way.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Thinking Differently
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                <p>
                                    Tennings appetite disposed me an at subjects an. To no indulgence diminution
                                    so discovered mr apartments. Are off under folly death wrote cause her way
                                    spite. Plan upon yet way.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Services Details Area -->

<?php
get_footer();
