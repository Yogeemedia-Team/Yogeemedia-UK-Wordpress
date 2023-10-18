<?php 
/* Template Name: About Page */ 
get_header();
?>

 <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area bg-gray bg-cover">
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
                                <li class="active">About</li>
                            </ol>
                        </nav>
                        <h1>About Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start About 
    ============================================= -->
    <div class="about-area default-padding">
        <div class="blur-bg-theme"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="about-style-one-thumb animate" data-animate="fadeInUp">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about.jpg" alt="Image Not Found">
                        <div class="fun-fact text-light animate" data-animate="fadeInDown" data-duration="1s">
                            <div class="counter">
                                <div class="timer" data-to="38" data-speed="2000">38</div>
                                <div class="operator">K</div>
                            </div>
                            <span class="medium">Completed Projects</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 pl-80 pl-md-15 pl-xs-15">
                    <div class="about-style-one">
                        <h2 class="title mb-30">Why choose Yogee Media ?</h2>
                        <p>
                        We're not your ordinary digital agency; we're a dynamic team of experts with a track record spanning over 18 years, hailing from various disciplines. Our mission is clear: to harness the power of cutting-edge technology while maintaining a strong sense of accountability to ensure your digital triumph.
                        </p>
                        <ul class="list-simple">
                            <li>Proven Expertise</li>
                            <li>Tailored Solutions</li>
                            <li>Mobile-Friendly Focus</li>
                            <li>SEO Mastery</li> 
                            <li>Client-Centric Approach</li>     
                        </ul>
                        <a href="about" class="arrow-btn"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Fun Factor 
    ============================================= -->
    <div class="fun-factor-circle-area default-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="fun-fact-circle-lists">
                        <!-- Single item -->
                        <div class="fun-fact animate" data-animate="fadeInDown">
                            <div class="counter">
                                <div class="timer" data-to="360" data-speed="3000">360</div>
                                <div class="operator">K</div>
                            </div>
                            <span class="medium">World Customer</span>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="fun-fact animate" data-animate="fadeInUp" data-duration="0.5s">
                            <div class="counter">
                                <div class="timer" data-to="98" data-speed="3000">98</div>
                                <div class="operator">%</div>
                            </div>
                            <span class="medium">Positive Rating</span>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="fun-fact animate" data-animate="fadeInDown">
                            <div class="counter">
                                <div class="timer" data-to="874" data-speed="3000">874</div>
                                <div class="operator">+</div>
                            </div>
                            <span class="medium">Total Branch</span>
                        </div>
                        <!-- End Single item -->
                        <!-- Single item -->
                        <div class="fun-fact animate" data-animate="fadeInUp" data-duration="0.5s">
                            <div class="counter">
                                <div class="timer" data-to="35" data-speed="1000">35</div>
                            </div>
                            <span class="medium">Years experience</span>
                        </div>
                        <!-- End Single item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Factor -->
    <!-- Start Services
    ============================================= -->
    <div class="creative-services-area overflow-hidden bg-gray default-padding">

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

<?php
get_footer();