<?php

/**
 * Block - Benefits.
 *
 * @package WP-rock
 */

$fields         = get_fields();
$block_title    = get_field_value($fields, 'block_title');
$desc           = get_field_value($fields, 'desc');
$items_repeater = get_field_value($fields, 'items_repeater');

?>

<section class="benefits">
    <div class="benefits__container container">
        <div class="benefits__content">
            <?php
            echo ($block_title)
                ? '<h2 class="benefits__title">' . do_shortcode($block_title) . '</h2>'
                : '';

            echo ($desc)
                ? '<div class="benefits__desc">' . do_shortcode($desc) . '</div>'
                : '';
            ?>
        </div>
        <?php if ($items_repeater) { ?>
            <div class="benefits__items">
                <?php foreach ($items_repeater as $item) {
                    $item_icon  = get_field_value($item, 'item_icon');
                    $item_title = get_field_value($item, 'item_title');
                    ?>
                    <div class="benefits__item">
                        <?php
                        echo ($item_icon)
                            ? '<img class="benefits__item-icon" src="' . do_shortcode($item_icon) . '" alt="Icon" />'
                            : '';

                        echo ($item_title)
                            ? '<div class="benefits__item-title">' . do_shortcode($item_title) . '</div>'
                            : '';
                        ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>
