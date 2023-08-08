<?php

/**
 * Block - Advantages.
 *
 * @package WP-rock
 */

$fields              = get_fields();
$advantages_repeater = get_field_value($fields, 'advantages_repeater');

?>

<section class="advantages">
    <div class="advantages__container container">
        <?php if ($advantages_repeater) { ?>
            <div class="advantages__items">
                <?php foreach ($advantages_repeater as $item) {
                    $title = get_field_value($item, 'title');
                    $desc  = get_field_value($item, 'desc');
                    ?>
                    <div class="advantages__item">
                        <div class="advantages__item-title"><?php echo do_shortcode($title); ?></div>
                        <div class="advantages__item-desc"><?php echo do_shortcode($desc); ?></div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>
