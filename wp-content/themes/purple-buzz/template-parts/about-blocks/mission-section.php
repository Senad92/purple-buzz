<?php

/**
 * Mission & Vision Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assign defaults.
$box_list         = get_field( 'box_list' );

?>
<!-- Start Aim -->
<section class="banner-bg bg-white py-5">
    <div class="container my-4">
        <?php if( have_rows('box_list') ): ?>
            <div class="row text-center">
                <?php 
                    while( have_rows('box_list') ): the_row(); 
                    $title              = get_sub_field( 'title' );
                    $description        = get_sub_field( 'description' );
                    $select_icon        = get_sub_field( 'select_icon' );
                ?>
                
                    <div class="objective col-lg-4">
                        <div class="objective-icon card m-auto py-4 mb-2 mb-sm-4 bg-secondary shadow-lg">
                            <i class="display-4 bx text-light <?php if( get_sub_field('select_icon') == 'bulb' ) { echo "bxs-bulb"; }elseif( get_sub_field('select_icon') == 'revision' ){ echo "bx-revision"; }elseif( get_sub_field('select_icon') == 'checkbox' ){ echo "bxs-select-multiple"; } ?>"></i>
                        </div>
                        <h2 class="objective-heading h3 mb-2 mb-sm-4 light-300"><?php echo $title; ?></h2>
                        <p class="light-300">
                            <?php echo $description; ?>
                        </p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- End Aim -->