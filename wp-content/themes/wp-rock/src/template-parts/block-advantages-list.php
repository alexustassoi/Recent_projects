<?php

/**
 * Block - Advantages list.
 *
 * @package WP-rock
 */

$fields         = get_fields();
$items_repeater = get_field_value($fields, 'items_repeater');

?>

<section class="advantages-list">
    <div class="advantages-list__container container">
        <div class="advantages-list__info">

        </div>
        <?php if ($items_repeater) { ?>
            <ul class="advantages-list__items">
                <?php foreach ($items_repeater as $item) {
                    $text = get_field_value($item, 'text');
                    ?>
                    <li class="advantages-list__item">
                        <div class="advantages-list__text"><?php echo do_shortcode($text); ?></div>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</section>
