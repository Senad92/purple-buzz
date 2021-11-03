<?php

/**
 * Partner Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assign defaults.
$main_title             = get_field( 'main_title' );

?>
<!-- Start Our Partner -->
<section class="bg-secondary py-3">
    <div class="container py-5">
        <h2 class="h2 text-white text-center py-5"><?php echo $main_title; ?></h2>
        <div class="row text-center">
            <div class="col-md-3 mb-3">
                <div class="card partner-wap py-5">
                    <a href="#"><i class='display-1 text-white bx bxs-buildings'></i></a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card partner-wap py-5">
                    <a href="#"><i class='display-1 bx text-white bxs-check-shield bx-lg'></i></a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card partner-wap py-5">
                    <a href="#"><i class='display-1 text-white bx bxs-bolt-circle'></i></a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card partner-wap py-5">
                    <a href="#"><i class='display-1 text-white bx bxs-spa'></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Our Partner-->