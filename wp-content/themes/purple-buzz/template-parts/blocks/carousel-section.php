<?php

/**
 * Carousel Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assign defaults.
$background_image       = get_field( 'background_image' );
$banner_content         = get_field( 'banner_content' );

?>
<?php if( get_field('background_image') ): ?>
<style>
    #index_banner {
        background-image: url('<?php echo esc_url($background_image['url']); ?>');
    }
</style>
<?php endif; ?>

<!-- Start Banner Hero -->
<div class="banner-wrapper bg-light">
    <div id="index_banner" class="banner-vertical-center-index container-fluid pt-5">

        <!-- Start slider -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <?php if( have_rows('banner_content') ): ?>
                <ol class="carousel-indicators">
                    <?php 
                    $i=0;
                    while( have_rows('banner_content') ): the_row(); 
                        if ($i == 0) {
                            echo '<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>';
                            } else {
                            echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"></li>';
                            }
                        $i++;
                    ?>
                    <?php endwhile; ?>
                </ol>
            <?php endif; ?>
            <div class="carousel-inner">
            <?php 
                $z = 0;
                while( have_rows('banner_content') ): the_row();
                $title          = get_sub_field('title');
                $description    = get_sub_field('description');
                $button_title   = get_sub_field('button_title');
                $button_url     = get_sub_field('button_url');
                ?>
                <div class="carousel-item <?php if ($z==0) { echo 'active';} ?>">

                    <div class="py-5 row d-flex align-items-center">
                        <div class="banner-content col-lg-8 col-8 offset-2 m-lg-auto text-left py-5 pb-5">
                            <h1 class="banner-heading h1 text-secondary display-3 mb-0 pb-5 mx-0 px-0 light-300 typo-space-line">
                                <?php echo $title;?>
                            </h1>
                            <p class="banner-body text-muted py-3 mx-0 px-0">
                                <?php echo $description;?>
                            </p>
                            <a class="banner-button btn rounded-pill btn-outline-primary btn-lg px-4" href="<?php echo $button_url;?>" role="button"><?php echo $button_title;?></a>
                        </div>
                    </div>

                </div>
                <?php 
                $z++;
                endwhile; ?>    

            </div>
            <a class="carousel-control-prev text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <i class='bx bx-chevron-left'></i>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next text-decoration-none" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <i class='bx bx-chevron-right'></i>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        <!-- End slider -->

    </div>
</div>
<!-- End Banner Hero -->