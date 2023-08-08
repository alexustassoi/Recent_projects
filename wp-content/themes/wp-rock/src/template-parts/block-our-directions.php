<?php

/**
 * Block - Our Directions.
 *
 * @package WP-rock
 */

$fields      = get_fields();
$block_title = get_field_value($fields, 'block_title');
$desc        = get_field_value($fields, 'desc');
$main_image  = get_field_value($fields, 'main_image');
$bg_img      = get_field_value($fields, 'bg_img');

?>

<section class="our-directions" style="background-image: url(<?php echo ($bg_img) ? do_shortcode($bg_img) : 'none'; ?>)">
    <div class="our-directions__container container">
        <div class="our-directions__top-content">
            <?php
            echo ($block_title)
                ? '<h2 class="our-directions__title">' . do_shortcode($block_title) . '</h2>'
                : '';

            echo ($desc)
                ? '<div class="our-directions__desc">' . do_shortcode($desc) . '</div>'
                : '';
            ?>
        </div>
        <?php
        echo ($main_image)
            ? '<div class="our-directions__main-image-wrap"><img width="744" height="587" src="' . do_shortcode($main_image) . '" class="our-directions__main-image" /></div>'
            : '';
        ?>
    </div>
</section>
