<?php
/* Template Name: Contact Page */
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
                            <li class="active">Contact</li>
                        </ol>
                    </nav>
                    <h1>Get in touch with us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Contact Us 
    ============================================= -->
<div class="contact-area contact-page overflow-hidden default-padding">
    <div class="container">
        <?php
        if (get_field('location', 'option')) :
        ?>
            <div class="map default-padding-bottom">
                <iframe style="filter: invert(93.5%)" src="<?php the_field('location', 'option'); ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        <?php
        endif;
        ?>
        <div class="row">


            <div class="col-tact-stye-one col-lg-5 pr-50 pr-md-15 pr-xs-15">
                <div class="contact-style-one-info">
                    <ul class="contact-address bg-dark text-light" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/shape/globe.png);">
                        <li>
                            <a class="phone-link" href="tel:<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a>
                        </li>
                        <li>
                            <div class="info">
                                <h4>Location</h4>
                                <p>
                                    <?php the_field('address', 'option'); ?>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <h4>Official Email</h4>
                                <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <ul class="social-link">

                                <?php

									// Check rows existexists.
									if (have_rows('socialmedia', 'option')) :

										// Loop through rows.
										while (have_rows('socialmedia', 'option')) : the_row();
									?>
											<li><a target="_blank" href="<?php the_sub_field('link'); ?>"><i class="<?php the_sub_field('icon'); ?>"></i></a></li>

									<?php
										// End loop.
										endwhile;
									endif;
									?>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-tact-stye-one col-lg-7 pl-60 pl-md-15 pl-xs-15 mt-md-50 mt-xs-50">
                <div class="contact-form contact-form-style-one">
                    <h4 class="sub-title">Have Questions?</h4>
                    <h2 class="title">Send us a Massage</h2>
                    <?php echo apply_shortcodes( '[contact-form-7 id="a5e1b31" title="Contact form"]' ); ?>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Contact -->

<?php
get_footer();
