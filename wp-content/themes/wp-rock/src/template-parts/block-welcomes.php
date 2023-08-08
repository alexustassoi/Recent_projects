<?php

/**
 * Block - Welcomes.
 *
 * @package WP-rock
 */

$fields           = get_fields();
$title            = get_field_value($fields, 'title');
$desc             = get_field_value($fields, 'desc');
$button           = get_field_value($fields, 'button');
$item_repeater    = get_field_value($fields, 'item_repeater');
$founder_repeater = get_field_value($fields, 'founder_repeater');

?>

<section class="welcomes">
    <div class="welcomes__container container">
        <div class="welcomes__content-top">
            <div class="welcomes__content-col">
                <?php
                echo ($title)
                    ? '<h2 class="welcomes__title">' . do_shortcode($title) . '</h2>'
                    : '';

                echo ($desc)
                    ? '<div class="welcomes__desc">' . do_shortcode($desc) . '</div>'
                    : '';
                ?>
            </div>
            <?php if ($item_repeater) { ?>
                <ul class="welcomes__items welcomes__content-col">
                    <?php foreach ($item_repeater as $item) {
                        $item_text = get_field_value($item, 'item_text');
                        ?>
                        <li><?php echo do_shortcode($item_text); ?></li>
                    <?php } ?>
                </ul>
            <?php } ?>
        </div>
        <div class="welcomes__content-bottom">
            <?php
            echo ($button)
                ? '<a href="' . do_shortcode($button["url"]) . '" class="welcomes__btn primary">' . do_shortcode($button["title"]) . '</a>'
                : '';

            if ($founder_repeater) { ?>
                <div class="welcomes__founders">
                    <?php foreach ($founder_repeater as $founder) {
                        $photo  = get_field_value($founder, 'photo');
                        $name   = get_field_value($founder, 'name');
                        $status = get_field_value($founder, 'status');
                        ?>
                        <div class="welcomes__founder">
                            <figure class="welcomes__founder-photo-wrap">
                                <img class="welcomes__founder-photo"
                                     src="<?php echo do_shortcode($photo); ?>"
                                     alt="Founder"/>
                            </figure>
                            <div class="welcomes__founder-info">
                                <div class="welcomes__founder-name">
                                    <?php echo do_shortcode($name); ?>
                                </div>
                                <div class="welcomes__founder-status">
                                    <?php echo do_shortcode($status); ?>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
</section>
