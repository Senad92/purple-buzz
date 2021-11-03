<?php

/**
 * Newsletter Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Load values and assign defaults.
?>
<!-- Start Contact -->
<?php echo do_shortcode('[contact-form-7 id="192" title="Newsletter"]'); ?>
<!-- End Contact -->