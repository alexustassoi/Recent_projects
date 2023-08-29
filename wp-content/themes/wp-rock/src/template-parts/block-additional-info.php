<?php

/**
 * Block - Additional info.
 *
 * @package WP-rock
 */

$fields      = get_fields();
$block_title = get_field_value($fields, 'block_title');
$desc        = get_field_value($fields, 'desc');
$bg_img      = get_field_value($fields, 'bg_img');
$is_main_img = get_field_value($fields, 'is_main_picture');
$main_img    = get_field_value($fields, 'main_img');


$main_img_class = ($is_main_img)
    ? 'is-main-img'
    : 'no-main-img'

?>

<section class="additional-info <?php echo do_shortcode($main_img_class); ?>">
    <div class="additional-info__container container">
        <div class="additional-info__left-side-with-image">
            <?php
            echo ($bg_img)
                ? '<img width="500" height="387" class="additional-info__left-side-image" src="' . do_shortcode($bg_img) . '" alt="Image">'
                : '';
            ?>
        </div>
        <div class="additional-info__right-side-content">
            <?php
            echo ($block_title)
                ? '<h2 class="additional-info__title">' . do_shortcode($block_title) . '</h2>'
                : '';

            echo ($desc)
                ? '<div class="additional-info__desc">' . do_shortcode($desc) . '</div>'
                : '';

            echo ($main_img)
                ? '<img width="500" height="387" class="additional-info__main-image" src="' . do_shortcode($main_img) . '" alt="Image">'
                : '';
            ?>
        </div>
    </div>
</section>
