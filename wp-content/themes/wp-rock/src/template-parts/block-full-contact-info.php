<?php

/**
 * Block - Full contact information.
 *
 * @package WP-rock
 */

$fields                  = get_fields();
$block_title             = get_field_value($fields, 'block_title');
$contact_top_repeater    = get_field_value($fields, 'contact_top_repeater');
$contact_bottom_repeater = get_field_value($fields, 'contact_bottom_repeater');

?>

<section class="f-contact-info">
    <div class="f-contact-info__container container">
        <div class="f-contact-info__content">
            <?php
            echo ($block_title)
                ? '<h2 class="f-contact-info__title">' . do_shortcode($block_title) . '</h2>'
                : '';

            if ($contact_top_repeater) { ?>
                <div class="f-contact-info__t-items">
                    <?php foreach ($contact_top_repeater as $item) {
                        $title = get_field_value($item, 'title');
                        $phone = get_field_value($item, 'phone');
                        $email = get_field_value($item, 'email');
                        ?>
                        <div class="f-contact-info__t-item">
                            <div class="f-contact-info__t-item-title"><?php echo do_shortcode($title); ?></div>
                            <div class="f-contact-info__t-item-phone"><?php echo do_shortcode($phone); ?></div>
                            <div class="f-contact-info__t-item-email"><?php echo do_shortcode($email); ?></div>
                        </div>
                    <?php } ?>
                </div>
            <?php }

            if ($contact_bottom_repeater) { ?>
                <div class="f-contact-info__b-items">
                    <?php foreach ($contact_bottom_repeater as $country) {
                        $country_image     = get_field_value($country, 'country_image');
                        $location_repeater = get_field_value($country, 'location_repeater');
                        ?>
                        <div class="f-contact-info__b-item">
                            <img class="f-contact-info__b-item-image" src="<?php echo do_shortcode($country_image); ?>" alt="Country">
                            <?php
                            if ($location_repeater) { ?>
                                <div class="f-contact-info__loc-items">
                                    <?php foreach ($location_repeater as $location) {
                                        $location_title = get_field_value($location, 'location_title');
                                        $phone          = get_field_value($location, 'phone');
                                        $address        = get_field_value($location, 'address');
                                        $red_color      = get_field_value($location, 'red_color');
                                        ?>
                                        <div class="f-contact-info__loc-item">
                                            <div
                                                class="f-contact-info__loc-item-title"><?php echo do_shortcode($location_title); ?></div>
                                            <div
                                                class="f-contact-info__loc-item-phone"><?php echo do_shortcode($phone); ?></div>
                                            <div
                                                class="f-contact-info__loc-item-address <?php echo ($red_color) ? 'red-color' : ''; ?>"><?php echo do_shortcode($address); ?></div>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
