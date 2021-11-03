<?php

/**
 * Team Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assign defaults.
$title              = get_field( 'title' );
$description        = get_field( 'description' );
$team_list          = get_field( 'team_list' );

?>
<!-- Start Team Member -->
<section class="container py-5">
    <div class="pt-5 pb-3 d-lg-flex align-items-center gx-5">

        <div class="col-lg-3">
            <h2 class="h2 py-5 typo-space-line"><?php echo $title; ?></h2>
            <p class="text-muted light-300">
                <?php echo $description; ?>
            </p>
        </div>

        <?php if( have_rows('team_list') ): ?>
        <div class="col-lg-9 row">
            <?php 
                while( have_rows('team_list') ): the_row(); 
                $name           = get_sub_field( 'name' );
                $role           = get_sub_field( 'role' );
                $image          = get_sub_field( 'image' );
            ?>
                <div class="team-member col-md-4">
                    <img class="team-member-img img-fluid rounded-circle p-4" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                    <ul class="team-member-caption list-unstyled text-center pt-4 text-muted light-300">
                        <li><?php echo $name; ?></li>
                        <li><?php echo $role; ?></li>
                    </ul>
                </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

    </div>
</section>
<!-- End Team Member -->