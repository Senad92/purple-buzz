<?php

/**
 * About Us banner Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assign defaults.
$title                  = get_field( 'title' );
$description            = get_field( 'description' );
$main_banner_image      = get_field( 'main_banner_image' );

?>
 <!-- Start Banner Hero -->
 <section class="bg-light w-100">
    <div class="container">
        <div class="row d-flex align-items-center py-5">
            <div class="col-lg-6 text-start">
                <h1 class="h2 py-5 text-primary typo-space-line"><?php echo $title; ?></h1>
                <p class="light-300">
                    <?php echo $description; ?>
                </p>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo esc_url( $main_banner_image['url'] ); ?>" alt="<?php echo esc_attr( $main_banner_image['alt'] ); ?>">
            </div>
        </div>
    </div>
</section>
<!-- End Banner Hero -->