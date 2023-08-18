<?php

/**
 * Block - Employee reviews.
 *
 * @package WP-rock
 */

$fields = get_fields();
$block_title = get_field_value($fields, 'title');
$slider_review = get_field_value($fields, 'slider_review');
?>
<section class="employee-reviews">
    <div class="employee-reviews__container">

        <div class="employee-reviews__title-wrapper">
            <div class="employee-reviews__title-wrapper-inner">
                <?php
                if (!empty($block_title)) {
                    echo '<h2 class="employee-reviews__title">' . do_shortcode($block_title) . '</h2>';
                }

                echo '<div class="employee-reviews__buttons-wrapper">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>';

                ?>
            </div>
        </div>
        <?php
        if ($slider_review) {
            echo '<div class="employee-reviews__slider js-employee-reviews-slider swiper">';
            echo '<div class="swiper-wrapper">';
            foreach ($slider_review as $slide) {
                echo '<div class="employee-reviews__slide swiper-slide">';
                echo '<div class="employee-reviews__slide-top-wrap">';

                if ($slide['photo']) {
                    echo '<img class="employee-reviews__slide-photo" src="' . do_shortcode($slide['photo']) . '" alt="photo">';
                }
                echo '<div class="employee-reviews__slide-top-inner">';
                if ($slide['name']) {
                    echo '<div class="employee-reviews__slide-name">
                                    ' . esc_html($slide['name']) . '
                                </div>';
                }
                if ($slide['position']) {
                    echo '<div class="employee-reviews__slide-position">
                                    ' . esc_html($slide['position']) . '
                                </div>';
                }
                echo '</div>';
                echo '</div>';
                if ($slide['text']) {
                    echo '<div class="employee-reviews__slide-text">
                                    ' . do_shortcode($slide['text']) . '
                                </div>';
                }
                echo '</div>';
            }
            echo '</div>';

            echo '<div class="employee-reviews__buttons-wrapper mob">
                    <div class="swiper-button-prev-mob"></div>
                    <div class="swiper-button-next-mob"></div>
                </div>';

            echo '</div>';
        }
        ?>
    </div>
    </div>
</section>
