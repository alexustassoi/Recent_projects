<?php

/**
 * Block - Reviews.
 *
 * @package WP-rock
 */

global $global_options;

$fields           = get_fields();
$block_title      = get_field_value($fields, 'block_title');
$reviews_repeater = get_field_value($fields, 'reviews_repeater');

?>

<section class="reviews">
    <div class="reviews__container container">
        <div class="reviews__content">
            <?php
            echo ($block_title)
                ? '<h2 class="reviews__title">' . do_shortcode($block_title) . '</h2>'
                : '';

            if ($reviews_repeater) { ?>
                <div class="reviews__swiper swiper js-reviews-swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($reviews_repeater as $item) {
                            $image        = get_field_value($item, 'image');
                            $name         = get_field_value($item, 'name');
                            $status       = get_field_value($item, 'status');
                            $reviews_text = get_field_value($item, 'reviews_text');
                            ?>
                            <div class="reviews__swiper-slide swiper-slide">
                                <div class="reviews__author-info desktop">
                                    <?php
                                    echo ($name)
                                        ? '<div class="reviews__author-name">' . do_shortcode($name) . '</div>'
                                        : '';

                                    echo ($status)
                                        ? '<div class="reviews__author-status">' . do_shortcode($status) . '</div>'
                                        : '';
                                    ?>
                                </div>
                                <div class="reviews__content-wrap">
                                    <div class="reviews__author-info-wrap">
                                        <?php
                                        echo ($image)
                                            ? '<figure class="reviews__author-image-wrap"><img src="' . do_shortcode($image) . '" alt="Author" /></figure>'
                                            : ''; ?>

                                        <div class="reviews__author-info mobile">
                                            <?php
                                            echo ($name)
                                                ? '<div class="reviews__author-name">' . do_shortcode($name) . '</div>'
                                                : '';

                                            echo ($status)
                                                ? '<div class="reviews__author-status">' . do_shortcode($status) . '</div>'
                                                : '';
                                            ?>
                                        </div>
                                    </div>
                                    <?php
                                    echo ($reviews_text)
                                        ? '<div class="reviews__text">' . do_shortcode($reviews_text) . '</div>'
                                        : '';
                                    ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="reviews__swiper-buttons-wrap">
                        <div class="reviews__swiper-buttons">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
