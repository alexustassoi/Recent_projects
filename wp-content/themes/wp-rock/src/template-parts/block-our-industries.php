<?php

/**
 * Block - Our Industries.
 *
 * @package WP-rock
 */

$fields         = get_fields();
$block_title    = get_field_value($fields, 'block_title');
$items_repeater = get_field_value($fields, 'items_repeater');

?>

<section class="our-industries">
    <div class="our-industries__container container">
        <?php
        echo ($block_title)
            ? '<h2 class="our-industries__title">' . do_shortcode($block_title) . '</h2>'
            : '';

        if ($items_repeater) { ?>
            <div class="our-industries__items">
                <?php foreach ($items_repeater as $item) {
                    $title = get_field_value($item, 'title');
                    $image = get_field_value($item, 'image');
                    $link  = get_field_value($item, 'link');
                    ?>
                    <div class="our-industries__item">
                        <div class="our-industries__item-inner"
                             style="background-image: url(<?php echo ($image) ? do_shortcode($image) : 'none'; ?>)">
                            <a class="our-industries__item-link"
                               href="<?php echo do_shortcode($link); ?>">
                            </a>
                            <div class="our-industries__item-title">
                                <?php echo do_shortcode($title); ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>
