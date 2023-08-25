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
$second_image  = get_field_value($fields, 'second_image');
$bg_img      = get_field_value($fields, 'bg_img');
$bg_img_mob      = get_field_value($fields, 'bg_img_mob');


?>

<section class="our-directions">
    <img class="our-directions__bg" src="<?php echo $bg_img; ?>" alt="bg">
    <img class="our-directions__bg mob" src="<?php echo $bg_img_mob; ?>" alt="bg">
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
        echo '<div class="our-directions__main-image-wrap">';
        if ($second_image) {
            echo '<div class="our-directions__second-image">
                        <img src="' . do_shortcode($second_image) . '" class="our-directions__main-image" />
                    </div>';
        }

        if ($main_image) {

            echo '<div class="our-directions__main-image">
                    <img src="' . do_shortcode($main_image) . '" class="our-directions__main-image" />
                </div>';
        }

        echo '</div>';
        ?>
    </div>
</section>
