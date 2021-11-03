<?php

/**
 * Chart Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assign defaults.
$title              = get_field( 'title' );
$description        = get_field( 'description' );
$chart_section      = get_field( 'chart_section' );

?>
<!-- Start Progress -->
<section class="bg-white py-5">
    <div class="container my-4">

        <h1 class="creative-heading h2 pb-3"><?php echo $title; ?></h1>

        <div class="creative-content row py-3">
            <div class="col-md-5">
                <p class="text-muted col-lg-8 light-300"><?php echo $description; ?></p>
            </div>

            <?php if( have_rows('chart_section') ): ?>
                <div class="creative-progress col-md-7">
                <?php 
                    while( have_rows('chart_section') ): the_row(); 
                    $title              = get_sub_field( 'title' );
                    $percentage         = get_sub_field( 'percentage' );
                ?>
                    <div class="row mt-4 mt-sm-2">
                        <div class="col-6">
                            <h4 class="h5"><?php echo $title; ?></h4>
                        </div>
                        <div class="col-6 text-right"><?php echo $percentage; ?>%</div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $percentage; ?>%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</section>
<!-- End Progress -->