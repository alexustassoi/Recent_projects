<?php

/**
 * Block - Our Offer.
 *
 * @package WP-rock
 */

$fields         = get_fields();
$title          = get_field_value($fields, 'title');
$desc           = get_field_value($fields, 'desc');
$offer_repeater = get_field_value($fields, 'offer_repeater');

?>

<section class="our-offer">
    <div class="our-offer__container container">
        <div class="our-offer__content-top">
            <?php
            echo ($title)
                ? '<h2 class="our-offer__title">' . do_shortcode($title) . '</h2>'
                : '';

            echo ($desc)
                ? '<div class="our-offer__desc">' . do_shortcode($desc) . '</div>'
                : '';
            ?>
        </div>

        <?php if ($offer_repeater) { ?>
            <div class="our-offer__items">
                <?php foreach ($offer_repeater as $item) {
                    $offer_icon  = get_field_value($item, 'offer_icon');
                    $offer_title = get_field_value($item, 'offer_title');
                    $offer_link = get_field_value($item, 'offer_link');
                    ?>
                    <div class="our-offer__item">
                        <figure class="our-offer__item-icon-wrap">
                            <img class="our-offer__item-icon" src="<?php echo do_shortcode($offer_icon); ?>" alt="Icon" />
                        </figure>
                        <div class="our-offer__item-title">
                            <?php echo do_shortcode($offer_title); ?>
                        </div>
                        <a href="<?php echo do_shortcode($offer_link); ?>" class="our-offer__item-btn"></a>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
</section>
