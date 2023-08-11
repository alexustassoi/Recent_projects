<?php

/**
 * Block - Services items.
 *
 * @package WP-rock
 */

$fields                = get_fields();
$services_items_rep    = get_field_value($fields, 'services_items_repeater');
$inner_direction_items = get_field_value($fields, 'inner_direction_services_items');

$direction_items = ($inner_direction_items)
    ? 'column-inner'
    : 'column-default';
?>

<section class="services-items <?php echo do_shortcode($direction_items); ?>">
    <div class="services-items__container container">
        <?php if ($services_items_rep) { ?>
            <div class="services-items__items <?php echo do_shortcode($direction_items); ?>">
                <?php foreach ($services_items_rep as $item) {
                    $icon               = get_field_value($item, 'icon');
                    $title              = get_field_value($item, 'title');
                    $services_sub_items = get_field_value($item, 'services_sub_items');
                    ?>
                    <div class="services-items__item <?php echo do_shortcode($direction_items); ?>"">
                        <?php
                        echo ($icon)
                            ? '<img class="services-items__item-icon" src="' . do_shortcode($icon) . '" alt="Icon" />'
                            : '';

                        echo ($title)
                            ? '<div class="services-items__item-title">' . do_shortcode($title) . '</div>'
                            : '';

                        if ($services_sub_items) { ?>
                            <ul class="services-items__sub-items">
                                <?php foreach ($services_sub_items as $sub_item) {
                                    $sub_item_desc = get_field_value($sub_item, 'services_sub_item_desc');
                                    ?>
                                    <li class="services-items__sub-item">
                                        <?php echo do_shortcode($sub_item_desc); ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>
