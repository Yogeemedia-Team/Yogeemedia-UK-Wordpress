<?php
/* Template Name: Home Page */
get_header();
?>

<!-- Start Banner 
    ============================================= -->
<div class="banner-style-three" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/shape/7.png);">
    <div class="container">
        <div class="row align-center">
            <div class="col-lg-5">
                <div class="fun-fact">
                    <div class="counter">
                        <div class="timer" data-to="38" data-speed="2000">38</div>
                        <div class="operator">K</div>
                    </div>
                    <span class="medium">Completed Projects</span>
                </div>
                <div class="thumb">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/digital_girl.png" alt="Image Not Found">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="content">
                    <h2>Refine Your Digital Product Design.</h2>
                    <p>Creating Fast, Responsive, and SEO-Optimized Websites at an Affordable Price to Ensure Your
                        Business's Discoverability on Google and Other Search Engines.</p>
                    <a class="btn-animation mt-30" href="services"><i class="fas fa-arrow-right"></i> <span>Our
                            Services</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- Start Services
    ============================================= -->
<div class="services-style-three-area bg-dark-secondary text-light overflow-hidden default-padding">

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="site-heading">
                    <h4 class="sub-title">Services we offer</h4>
                    <h2 class="title">Explore Our <br> Top-Notch Services</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="service-hover-items">

                    <ul>
                        <?php
                        // WP Query to fetch services
                        $args = array(
                            'post_type' => 'service', // Assuming 'services' is the name of your custom post type
                            'posts_per_page' => 3,    // Show all posts
                        );

                        $services_query = new WP_Query($args);

                        $counter = 1; // Initialize a counter for incrementing

                        // Loop through services
                        while ($services_query->have_posts()) :
                            $services_query->the_post();
                        ?>
                            <li>
                                <a href="<?php the_permalink(); ?>" class="service-hover-item">
                                    <div class="service-hover-content">
                                        <div class="icon">
                                            <?php
                                            // Display service icon/image if available
                                            $service_icon_url = get_field('service_icon'); // Assuming 'service_icon' is the name of the custom field for the icon
                                            if ($service_icon_url) {
                                            ?>
                                                <img src="<?php echo esc_url($service_icon_url); ?>" alt="Icon">
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="item-title">
                                            <h2><?php the_title(); ?></h2>
                                            <span><?php echo str_pad($counter, 2, '0', STR_PAD_LEFT); ?></span>
                                        </div>
                                        <div class="details">
                                            <p><?php the_excerpt(); ?></p>
                                            <ul>
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
                                            </ul>
                                        </div>
                                        <div class="arrow">
                                            <strong class="btn-animation"><i class="fas fa-arrow-right"></i> <span>View
                                                    More</span></strong>
                                        </div>
                                    </div>
                                </a>

                            </li>
                        <?php
                            $counter++; // Increment the counter
                        endwhile;
                        wp_reset_postdata(); // Reset the query to the main loop
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- End Services -->

<!-- Start About 
    ============================================= -->
<div class="about-style-two-area relative">
    <div class="about-style-two-thumb" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/yogee_media_web.png);">
        <div class="experience-style-one">
            <div class="video-button">
                <a href="#" class="video-play-button light">
                    <i class="fas fa-play"></i>
                    <div class="effect"></div>
                </a>
            </div>
            <h3>We’ve over <br> 28 Years of Experience</h3>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 offset-lg-7">
                <div class="about-style-two-info">
                    <h4 class="sub-title">Our Benifits</h4>
                    <h2 class="title">Unlock revenue Growth to start Business</h2>
                    <div class="faq-style-one mt-40">
                        <ul class="list-simple">
                            <li>Amazing communication.</li>
                            <li>Best trendinf designing experience.</li>
                            <li>Amazing communication.</li>
                            <li>Best trendinf designing experience.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About -->
<!-- Start Brand Area 
    ============================================= -->
<?php if (get_field('clients')) : ?>
    <div class="brand-area relative default-padding overflow-hidden brand-style-two-area">
        <div class="brand-style-one pt-5">
            <div class="container-fill">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-items">
                            <div class="brand-conetnt">
                                <?php

                                // Check rows existexists.
                                if (have_rows('clients')) :

                                    // Loop through rows.
                                    while (have_rows('clients')) : the_row();
                                ?>
                                        <div class="item">
                                            <img src="<?php the_sub_field('logo'); ?>" alt="Logo">
                                        </div>

                                <?php
                                    // End loop.
                                    endwhile;
                                endif;
                                ?>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<!-- End Bradn Area -->
<!-- Start Team Members 
    ============================================= -->
<!-- <div class="team-style-one-area bg-cover default-padding bottom-less"
        style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/shape/10.png);">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Team Members</h4>
                        <h2 class="title">Meet our experts</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 mb-30 wow fadeInUp">
                    <div class="team-style-one">
                        <div class="thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x800.png" alt="Image Not Found">
                            <ul class="social">
                                <li class="facebook">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content pb-3">
                            <a href="#"><i class="fas fa-comment-alt-lines"></i></a>
                            <div class="info">
                                <h4>James Baker</h4>
                                <span>Marketing Expert</span>
                            </div>
                        </div>
                        <div class="para px-4">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum cumque deserunt ratione quo
                                eum ex in! Sed totam nulla incidunt beatae id amet laudantium rem aut dolore at! Atque,
                                perferendis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms">
                    <div class="team-style-one">
                        <div class="thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x800.png" alt="Image Not Found">
                            <ul class="social">
                                <li class="facebook">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content pb-3">
                            <a href="#"><i class="fas fa-comment-alt-lines"></i></a>
                            <div class="info">
                                <h4>Dalton Grant</h4>
                                <span>Project Manager</span>
                            </div>
                        </div>
                        <div class="para px-4">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum cumque deserunt ratione quo
                                eum ex in! Sed totam nulla incidunt beatae id amet laudantium rem aut dolore at! Atque,
                                perferendis.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6 mb-30 wow fadeInUp" data-wow-delay="500ms">
                    <div class="team-style-one">
                        <div class="thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x800.png" alt="Image Not Found">
                            <ul class="social">
                                <li class="facebook">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content pb-3">
                            <a href="#"><i class="fas fa-comment-alt-lines"></i></a>
                            <div class="info">
                                <h4>Ryan Ricketts</h4>
                                <span>Consulting Officer</span>
                            </div>
                        </div>
                        <div class="para px-4">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum cumque deserunt ratione quo
                                eum ex in! Sed totam nulla incidunt beatae id amet laudantium rem aut dolore at! Atque,
                                perferendis.</p>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-xl-3 col-md-6 mb-30 wow fadeInLeft" data-wow-delay="700ms">
                    <div class="team-style-one">
                        <div class="thumb">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x800.png" alt="Image Not Found">
                            <ul class="social">
                                <li class="facebook">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content pb-3">
                            <a href="#"><i class="fas fa-comment-alt-lines"></i></a>
                            <div class="info">
                                <h4>Danny Russell</h4>
                                <span>Creative Director</span>
                            </div>
                        </div>
                        <div class="para px-4">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum cumque deserunt ratione quo
                                eum ex in! Sed totam nulla incidunt beatae id amet laudantium rem aut dolore at! Atque,
                                perferendis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- End Team Members -->

<!-- Start Clients Area
    ============================================= -->
<div class="clietns-area default-padding-bottom bg-dark-secondary text-light">
    <div class="container">
        <div class="client-items">
            <div class="row align-center">
                <div class="col-lg-5">
                    <h5>Join over 40,000 businesses worldwide.</h5>
                    <h2 class="title">Working great with top platforms</h2>
                    <a class="btn mt-25 btn-gradient btn-sm" href="contact-us">Join with Us</a>
                </div>
                <div class="col-lg-7">
                    <div class="client-item-box">
                        <div class="partner-box">
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/atlassian.png" alt="Image Not Found">
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/figma.png" alt="Image Not Found">
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/react.png" alt="Image Not Found">
                            </div>
                            <div class="item">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon/wordpress.png" alt="Image Not Found">
                            </div>
                        </div>
                        <div class="partner-box">
                            <div class="item">
                                <i class="fab fa-digital-ocean"></i>
                            </div>
                            <div class="item">
                                <i class="fab fa-reddit"></i>
                            </div>
                            <div class="item">
                                <i class="fab fa-dropbox"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Clients Area -->
<!-- Start Testimonial Area 
    ============================================= -->
<?php if (get_field('testimonials')) : ?>
    <div class="testimonial-style-one-area default-padding-top">

        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="content-left">
                            <h4 class="sub-title">Testimonials</h4>
                            <h2 class="title">What people say</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <div class="testimonial-one-carousel-box">
                    <div class="testimonial-style-one-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <?php

                            // Check rows existexists.
                            if (have_rows('testimonials')) :

                                // Loop through rows.
                                while (have_rows('testimonials')) : the_row();
                            ?>
                                    <!-- Single item -->
                                    <div class="swiper-slide">
                                        <div class="testimonial-style-one">
                                            <div class="provider">
                                                <div class="thumb">
                                                    <img src="<?php the_sub_field('image'); ?>" alt="Image Not Found">
                                                    <div class="quote">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/quote-big.png" alt="Image Not Found">
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <h4><?php the_sub_field('name'); ?></h4>
                                                    <span><?php the_sub_field('position'); ?></span>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <?php
                                                $rating = intval(get_sub_field('stars')); // Assuming 'stars' is a numeric field

                                                // Ensure $rating is within the valid range (0 to 5)
                                                $rating = max(0, min($rating, 5));

                                                // Output star rating
                                                echo '<div class="rating">';
                                                for ($i = 1; $i <= 5; $i++) {
                                                    if ($i <= $rating) {
                                                        echo '<i class="fas fa-star"></i>';
                                                    } else {
                                                        echo '<i class="far fa-star"></i>'; // Use 'far' for empty star
                                                    }
                                                }
                                                echo '</div>';
                                                ?>

                                                <p>
                                                    <?php the_sub_field('description'); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Single item -->
                            <?php
                                // End loop.
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>

                    <!-- Navigation -->
                    <div class="testimonial-one-swiper-nav">

                        <!-- Pagination -->
                        <div class="testimonial-one-pagination"></div>

                        <div class="testimonial-one-button-prev"></div>
                        <div class="testimonial-one-button-next"></div>

                    </div>

                </div>
            </div>
        </div>

    </div>
<?php endif; ?>
<!-- End Testimonial Area -->

<!-- Start Prjoect 
    ============================================= -->
<div class="project-style-one-area default-padding bg-gray">

    <div class="container">
        <div class="heading-left">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-left">
                        <h4 class="sub-title">Popular Projects</h4>
                        <h2 class="title">Featured Works</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi, similique dignissimos
                            ipsum impedit beatae neque, error, eveniet illo quae perferendis dolorum voluptate
                            debitis et blanditiis labore reiciendis officia aliquid repudiandae?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fill">
        <div class="row">
            <div class="col-lg-12">
                <div class="project-style-one-items">

                    <!-- Navigation -->
                    <div class="project-nav">
                        <div class="nav-items">
                            <div class="project-button-prev"></div>
                            <div class="project-button-next"></div>
                        </div>
                    </div>

                    <div class="project-center-stage-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
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
                                <div class="swiper-slide">
                                    <div class="project-style-one">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                                        <?php else : ?>
                                            <!-- Default Image if no thumbnail -->
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/800x800.png" alt="Image Not Found">
                                        <?php endif; ?>
                                        <div class="overlay">
                                            <div class="link">
                                                <a href="<?php the_permalink(); ?>"><i class="fas fa-arrow-right"></i></a>
                                            </div>
                                            <div class="content">
                                                <span><?php the_category() ?></span>
                                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
            </div>
        </div>
    </div>
</div>
<!-- End Project -->

<!-- Start Pricing 
    ============================================= -->
<div id="pricing" class="pricing-style-one-area default-padding-bottom bg-gray">
    <div class="shape-left-top">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shape/11.png" alt="Image Not Found">
    </div>
    <div class="container">
        <div class="pricing-items">
            <div class="row align-center">
                <div class="col-xl-5 col-lg-4">
                    <h4 class="sub-title">Best Pricing</h4>
                    <h2 class="title">Affordable pricing. <br> - checkout Now</h2>
                    <p>
                        Continue indulged speaking the was out horrible for domestic position. Seeing rather her you
                        not esteem men settle genius excuse. Deal say over you age from. Comparison new ham
                        melancholy son themselves.
                    </p>
                    <h5>Join today and get <strong>50%</strong> Off</h5>
                    <div class="btn-sec mt-5">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-active" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Request Quotation
                        </button>



                    </div>
                </div>
                <div class="col-xl-6 offset-xl-1 col-lg-7 offset-lg-1">
                    <div class="pricing-style-one">
                        <div class="left">
                            <h4>Rank High on Google</h4>
                            <span>15 Days Free Trial</span>
                            <a class="btn mt-25 btn-sm circle btn-border light" href="contact-us">Order Now</a>
                        </div>
                        <div class="right">
                            <ul>
                                <li>Number of inbound linksr</li>
                                <li>Site speed</li>
                                <li>Keyword usage</li>
                            </ul>
                            <h2><sup>$</sup>48</h2>
                        </div>
                    </div>
                    <div class="pricing-style-one active">
                        <div class="left">
                            <h4>Email-based Advertising</h4>
                            <span>7 Days Free Trial</span>
                            <a class="btn mt-25 btn-sm circle btn-border light" href="contact-us">Order Now</a>
                        </div>
                        <div class="right">
                            <ul>
                                <li>Email Newsletter</li>
                                <li>Marketing Campaigns</li>
                                <li>Traffic Generation</li>
                            </ul>
                            <h2><sup>$</sup>24</h2>
                        </div>
                    </div>
                    <div class="pricing-style-one">
                        <div class="left">
                            <h4>Email-based Advertising</h4>
                            <span>7 Days Free Trial</span>
                            <a class="btn mt-25 btn-sm circle btn-border light" href="contact-us">Order Now</a>
                        </div>
                        <div class="right">
                            <ul>
                                <li>Email Newsletter</li>
                                <li>Marketing Campaigns</li>
                                <li>Traffic Generation</li>
                            </ul>
                            <h2><sup>$</sup>24</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Pricing -->

<!-- Start Blog 
    ============================================= -->
<div class="blog-area home-blog blog-style-two-area default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h4 class="sub-title">News & Events</h4>
                    <h2 class="title">Latest blog posts </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <?php
            // Define the custom query
            $args = array(
                'post_type' => 'post', // You can change this to your custom post type if needed
                'posts_per_page' => 2, // Number of posts to display
                'orderby'        => 'date', // Order by date
                'order'          => 'ASC',
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
                wp_reset_postdata(); // Reset post data after the loop
            endif;
            ?>

        </div>
    </div>
</div>
<!-- End Blog -->


<?php
get_footer();
