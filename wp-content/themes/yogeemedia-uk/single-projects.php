<?php

/**
 * Single Template for Projects
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
                            <li class="active">Project</li>
                        </ol>
                    </nav>
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Star Project Details Area
    ============================================= -->
<div class="project-details-area default-padding">
    <div class="container">
        <div class="project-details-items">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-thumb">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'full', array('class' => 'img-fluid w-100', 'alt' => get_the_title())); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-12">

                    <div class="project-details mt-40">
                        <div class="top-info">
                            <div class="row">

                                <div class="col-lg-4 order-lg-last">
                                    <ul class="gallery-project-basic-info">
                                        <?php if (get_field('client')) : ?>
                                            <li>
                                                <div class="info">
                                                    Clients: <span><?php the_field('client'); ?></span>
                                                </div>
                                            </li>
                                        <?php endif; ?>
                                        <li>
                                            <div class="info">
                                                Project Type: <span><?php the_category() ?></span>
                                            </div>
                                        </li>
                                        <?php if (get_field('project_date')) : ?>
                                            <li>
                                                <div class="info">
                                                    Date: <span><?php the_field('project_date'); ?></span>
                                                </div>
                                            </li>
                                        <?php endif; ?>
                                        <?php if (get_field('client')) : ?>
                                            <li>
                                                <div class="info">
                                                    Address: <span><?php the_field('address'); ?></span>
                                                </div>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>

                                <div class="col-lg-8">
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
                                </div>

                            </div>
                        </div>
                        <?php if (get_field('more_content')) : ?>
                            <?php the_field('more_content'); ?>
                        <?php endif; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Project Details Area -->

<?php
get_footer();
