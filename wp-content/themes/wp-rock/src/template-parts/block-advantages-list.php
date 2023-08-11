<?php

/**
 * Block - Advantages list.
 *
 * @package WP-rock
 */

$fields           = get_fields();
$items_repeater   = get_field_value($fields, 'items_repeater');
$number_of_result = get_field_value($fields, 'number_of_result');

?>

<section class="advantages-list">
    <div class="advantages-list__container container">
        <div class="advantages-list__info">
            <?php
            echo ($number_of_result)
                ? '<div class="advantages-list__number-result">' . do_shortcode($number_of_result) . '</div>'
                : '';
            ?>
        </div>
        <?php if ($items_repeater) { ?>
            <ul class="advantages-list__items">
                <?php foreach ($items_repeater as $item) {
                    $text = get_field_value($item, 'text');
                    ?>
                    <li class="advantages-list__item">
                        <?php echo do_shortcode($text); ?>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</section>
