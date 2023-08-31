<?php

/**
 * Block - Thank you.
 *
 * @package WP-rock
 */

$fields      = get_fields();
$bg_img      = get_field_value($fields, 'bg_img');
$block_image = get_field_value($fields, 'block_image');
$block_title = get_field_value($fields, 'title');
$subtitle = get_field_value($fields, 'subtitle');
$button_text = get_field_value($fields, 'button_text');

?>

<section class="hero thank-you" id="hero" style="background-image: <?php echo ($bg_img) ? 'url(' . do_shortcode($bg_img) . ')' : 'none'; ?>">
    <div class="hero__container thank-you-container container">
        <div class="hero__content-wrap thank-you-content-wrap">
            <?php
            echo (!empty($block_title))
                ? '<h1 class="thank-you-title">' . do_shortcode($block_title) . '</h1>'
                : '';
            echo (!empty($subtitle))
                ? '<p class="thank-you-subtitle">' . do_shortcode($subtitle) . '</p>'
                : '';


            echo ($button_text)
                ? '<a href="' . get_site_url() . '" class="thank-you-btn primary">
                        ' . do_shortcode($button_text) . '
                    </a>'
                : '';

            echo ($block_image)
                ? '<img class="hero__image thank-you-image" src="' . do_shortcode($block_image) . '" alt="Image" />'
                : '';

            ?>

        </div>
    </div>
</section>
