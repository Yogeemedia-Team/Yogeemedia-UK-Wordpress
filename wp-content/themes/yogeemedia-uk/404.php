<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package yogeemedia-uk
 */

get_header();
?>

    <!-- Start 404 
    ============================================= -->
    <div class="error-page-area default-padding text-center">
        <!-- Shape -->
        <div class="shape-left" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/shape/44-left.png);"></div>
        <div class="shape-right" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/img/shape/44-right.png);"></div>
        <!-- End Shape -->
        <div class="container">
            <div class="error-box">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h1>404</h1>
                        <h2>Sorry Page Was Not Found!</h2>
                        <p>
                            Household shameless incommode at no objection behaviour. Especially do at he possession
                            insensible sympathize boisterous it. Songs he on an widen me event truth.
                        </p>
                        <a class="btn mt-20 btn-md btn-theme" href="index.html">Back to home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End 404 -->

<?php
get_footer();
