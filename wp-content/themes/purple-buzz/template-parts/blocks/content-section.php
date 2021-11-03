<?php

/**
 * Content List Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assign defaults.
$main_title         = get_field( 'main_title' );
$content_list       = get_field( 'content_list' );

?>
<!-- Start Recent Work -->
<section class="py-5 mb-5">
    <div class="container">
        <div class="recent-work-header row text-center pb-5">
            <h2 class="col-md-6 m-auto h2 semi-bold-600 py-5"><?php echo $main_title; ?></h2>
        </div>
        <?php if( have_rows('content_list') ): ?>
        <div class="row gy-5 g-lg-5 mb-4">
            <?php 
                while( have_rows('content_list') ): the_row(); 
                $title              = get_sub_field( 'title' );
                $description        = get_sub_field( 'description' );
                $image              = get_sub_field( 'image' );
                $link_url           = get_sub_field( 'link_url' );
            ?>
                <!-- Start Recent Work -->
                <div class="col-md-4 mb-3">
                    <a href="<?php echo $link_url;?>" class="recent-work card border-0 shadow-lg overflow-hidden">
                        <img class="recent-work-img card-img" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                        <div class="recent-work-vertical card-img-overlay d-flex align-items-end">
                            <div class="recent-work-content text-start mb-3 ml-3 text-dark">
                                <h3 class="card-title light-300"><?php echo $title;?></h3>
                                <p class="card-text"><?php echo $description;?></p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Recent Work -->
            <?php endwhile; ?>

        </div>
        <?php endif; ?>
    </div>
</section>
<!-- End Recent Work -->
