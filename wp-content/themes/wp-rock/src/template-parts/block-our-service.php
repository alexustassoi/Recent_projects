<?php

/**
 * Block - Our service.
 *
 * @package WP-rock
 */

$fields          = get_fields();
$block_with_desc = get_field_value($fields, 'block_with_desc');
$block_title     = get_field_value($fields, 'block_title');
$desc            = get_field_value($fields, 'desc');
$items_repeater  = get_field_value($fields, 'items_repeater');

$is_desc = ($block_with_desc)
    ? 'is-desc'
    : 'no-desc';

?>

<section class="our-service <?php echo do_shortcode($is_desc); ?>">
    <div class="our-service__container container">
        <div class="our-service__row">
            <?php
            echo ($block_title)
                ? '<h2 class="our-service__title">' . do_shortcode($block_title) . '</h2>'
                : '';

            echo ($desc )
                ? '<div class="our-service__desc">' . do_shortcode($desc ) . '</div>'
                : '';
            ?>
        </div>

        <?php if ($items_repeater) { ?>
            <div class="our-service__items">
                <?php foreach ($items_repeater as $item) {
                    $title = get_field_value($item, 'title');
                    $icon  = get_field_value($item, 'icon');
                    ?>
                    <div class="our-service__item">
                        <?php
                        echo ($icon)
                            ? '<img class="our-service__item-icon" src="' . do_shortcode($icon) . '" alt="Image">'
                            : '';

                        echo ($title)
                            ? '<div class="our-service__item-title">' . do_shortcode($title) . '</div>'
                            : '';
                        ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>
