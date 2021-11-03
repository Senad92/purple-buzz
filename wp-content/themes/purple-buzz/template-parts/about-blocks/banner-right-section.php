<?php

/**
 * Banner right Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assign defaults.
$title              = get_field( 'title' );
$description        = get_field( 'description' );
$image              = get_field( 'image' );

?>
<!-- Start Choice -->
<section class="why-us banner-bg bg-light">
    <div class="container my-4">
        <div class="row">
            <div class="banner-img col-lg-5">
                <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" class="rounded img-fluid">
            </div>
            <div class="banner-content col-lg-7 align-self-end">
                <h2 class="h2 pb-3"><?php echo $title; ?></h2>
                <p class="text-muted pb-5 light-300">
                <?php echo $description; ?></p>
            </div>
        </div>
    </div>
</section>
<!-- End Choice -->