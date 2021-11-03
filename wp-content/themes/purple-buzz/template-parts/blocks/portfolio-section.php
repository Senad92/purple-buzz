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
?>
<!-- Start Service -->
<section class="service-wrapper py-3">
    <div class="service-tag py-5 bg-secondary">
        <div class="col-md-12">
            <ul class="nav d-flex justify-content-center">
                <li class="nav-item mx-lg-4">
                    <a class="filter-btn nav-link btn-outline-primary active shadow rounded-pill text-light px-4 light-300" href="#" data-filter=".project">All</a>
                </li>   
                <?php $terms = get_terms('portfolio_category', array('hide_empty' => 0, 'orderby'  =>  'meta_value', 'parent' =>0)); 
                    foreach($terms as $term) : 
                ?>
                    <li class="nav-item mx-lg-4">
                        <a class="pb_custom_remove_class filter-btn nav-link btn-outline-primary active shadow rounded-pill text-light px-4 light-300" href="#" data-filter=".<?php echo $term->slug; ?>"><?php echo $term->name; ?></a>
                    </li>
                <?php 
                    endforeach; 
                ?>
            </ul>
        </div>
    </div>
</section>

<section class="container overflow-hidden py-5">
    <div class="row gx-5 gx-sm-3 gx-lg-5 gy-lg-5 gy-3 pb-3 projects">
        <?php
            $loop = new WP_Query( array(
                    'post_type' => 'portfolio',
                    'order'=>'ASC',
                    'posts_per_page' => -1
                )
            );
        ?>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); 
            $image_id = get_post_thumbnail_id(get_the_ID());
            $alt_text = get_post_meta($image_id , '_wp_attachment_image_alt', true);
            $getslugid = wp_get_post_terms( get_the_ID(), 'portfolio_category' ); 
            $slugs = implode(' ',wp_list_pluck($getslugid,'slug'));
        ?>

         <!-- Start Recent Work -->
         <div class="col-xl-3 col-md-4 col-sm-6 <?php echo $slugs; ?> project">
            <a href="#" class="service-work card border-0 text-white shadow-sm overflow-hidden mx-5 m-sm-0">
                <img class="service card-img" src="<?php echo the_post_thumbnail_url() ?>" alt="<?php echo $alt_text ;?>">
                <div class="service-work-vertical card-img-overlay d-flex align-items-end">
                    <div class="service-work-content text-left text-light">
                        <span class="btn btn-outline-light rounded-pill mb-lg-3 px-lg-4 light-300"><?php the_title(); ?></span>
                        <p class="card-text"><?php the_content(); ?></p>
                    </div>
                </div>
            </a>
        </div><!-- End Recent Work -->

        <?php endwhile; wp_reset_query(); ?>

    </div>
</section>
<!-- End Service -->

<script>
    jQuery(window).load(function() {
        // init Isotope
        var projects = jQuery('.projects').isotope({
            itemSelector: '.project',
            layoutMode: 'fitRows'
        });
        jQuery(".filter-btn").click(function() {
            var data_filter = jQuery(this).attr("data-filter");
            projects.isotope({
                filter: data_filter
            });
            jQuery(".filter-btn").removeClass("active");
            jQuery(".filter-btn").removeClass("shadow");
            jQuery(this).addClass("active");
            jQuery(this).addClass("shadow");
            return false;
        });
    });
    jQuery(document).ready(function() {
            jQuery(".pb_custom_remove_class").removeClass("active");
            jQuery(".pb_custom_remove_class").removeClass("shadow");
    });
</script>