<?php

/**
 * Block - Hero.
 *
 * @package WP-rock
 */

$fields      = get_fields();
$bg_img      = get_field_value($fields, 'bg_img');
$block_image = get_field_value($fields, 'block_image');

?>

<section class="hero" id="hero"
         style="background-image: <?php echo ($bg_img) ? 'url(' . do_shortcode($bg_img) . ')' : 'none'; ?>">
    <div class="hero__container container">
        <div class="hero__content-wrap">
            <?php echo ($block_image)
                ? '<img width="1035" height="171" src="' . do_shortcode($block_image) . '" alt="Image" />'
                : ''; ?>
        </div>
    </div>
</section>
