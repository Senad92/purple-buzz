<?php

/**
 * Small Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assign defaults.
$title              = get_field( 'title' );
$description        = get_field( 'description' );
$button_title       = get_field( 'button_title' );
$button_url         = get_field( 'button_url' );

?>
<!-- Start View Work -->
<section class="bg-secondary">
    <div class="container py-5">
        <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-2 col-12 text-light align-items-center">
                <i class='display-1 bx bxs-box bx-lg'></i>
            </div>
            <div class="col-lg-7 col-12 text-light pt-2">
                <h3 class="h4 light-300"><?php echo $title;?></h3>
                <p class="light-300"><?php echo $description;?></p>
            </div>
            <div class="col-lg-3 col-12 pt-4">
                <a href="<?php echo $button_url;?>" class="btn btn-primary rounded-pill btn-block shadow px-4 py-2"><?php echo $button_title;?></a>
            </div>
        </div>
    </div>
</section>
<!-- End View Work -->
