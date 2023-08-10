<?php

/**
 * Block - Opening companies.
 *
 * @package WP-rock
 */

$fields         = get_fields();
$block_title    = get_field_value($fields, 'block_title');
$items_repeater = get_field_value($fields, 'items_repeater');
$bg_img         = get_field_value($fields, 'bg_img');

?>

<section class="opening-companies">
    <div class="opening-companies__container container">
        <div class="opening-companies__col opening-companies__col-left">
            <?php
            echo ($bg_img)
                ? '<img src="' . do_shortcode($bg_img) . '" alt="Image">'
                : '';

            echo ($block_title)
                ? '<h2 class="opening-companies__title">' . do_shortcode($block_title) . '</h2>'
                : '';
            ?>
        </div>
        <div class="opening-companies__col opening-companies__col-right">
            <?php if ($items_repeater) { ?>
                <ul class="opening-companies__items">
                    <?php foreach ($items_repeater as $item) {
                        $item_text = get_field_value($item, 'item_text');
                        ?>
                        <li class="opening-companies__item">
                            <?php echo do_shortcode($item_text); ?>
                        </li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
    </div>
</section>
