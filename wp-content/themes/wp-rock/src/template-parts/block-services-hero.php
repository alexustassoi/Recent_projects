<?php

/**
 * Block - Services hero.
 *
 * @package WP-rock
 */

$fields      = get_fields();
$block_title = get_field_value($fields, 'block_title');
$desc        = get_field_value($fields, 'desc');
$bg_img      = get_field_value($fields, 'bg_img');

?>

<section class="services-hero" style="background-image: url(<?php echo ($bg_img) ? do_shortcode($bg_img) : 'none'; ?>)">
    <div class="services-hero__container container">
        <div class="services-hero__content">
            <?php
            echo ($block_title)
                ? '<h2 class="services-hero__title">' . do_shortcode($block_title) . '</h2>'
                : '';

            echo ($desc)
                ? '<div class="services-hero__desc">' . do_shortcode($desc) . '</div>'
                : '';
            ?>
        </div>
    </div>
</section>
