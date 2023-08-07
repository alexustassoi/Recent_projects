<?php

/**
 * Block - Hero.
 *
 * @package WP-rock
 */

$fields           = get_fields();
$disable_block    = get_field_value($fields, 'disable_block');

?>

<section class="hero" id="hero">
    <div class="hero__container container">
        <div class="hero__top-content-part">
            <?php
            if (!empty($cloud_block)) {
                echo '<div class="hero__cloud-block">
                        <p>' . do_shortcode($cloud_block) . '</p>
                    </div>';
            }
            if (!empty($top_content_part)) {
                echo '<div class="hero__inner-content top">' . do_shortcode($top_content_part) . '</div>';
            }
            ?>
        </div>
        <div class="hero__middle-content-part">
            <?php
            if (!empty($middle_content_part)) {
                echo '<div class="hero__inner-content js-animate animate__animated" data-animate="animate__slideInLeft">' . do_shortcode($middle_content_part) . '</div>';
            }

            if ($middle_image) {
                echo '<figure class="hero__middle-image js-animate animate__animated" data-animate="animate__slideInRight">
                        <img src="' . do_shortcode($middle_image) . '" alt="middle image">
                    </figure>';
            }
            ?>
        </div>
        <div class="hero__bottom-content-part">
            <?php
            if ($bottom_image) {
                echo '<figure class="hero__bottom-image js-animate animate__animated" data-animate="animate__slideInUp">
                            <img src="' . do_shortcode($bottom_image) . '" alt="middle image">
                        </figure>';
            }

            if (!empty($bottom_content_part)) {
                echo '<div class="hero__inner-content js-animate animate__animated" data-animate="animate__slideInUp">' . do_shortcode($bottom_content_part) . '</div>';
            }
            ?>
        </div>
        <?php
        if ($advantages_list) {
            $count = 0;
            echo '<ul class="hero__advantages-list">';
            foreach ($advantages_list as $item) {
//                    $animate_delay = "animate__delay-" . $count . "s";
                $animate_delay = 0;
                echo '<div class="hero__advantages-list-item-wrap ' . do_shortcode($animate_delay) . ' js-animate animate__animated js-advantages-animate" data-animate="animate__fadeIn">
                            <li class="hero__advantages-list-item">
                                ' . do_shortcode($svg_icon) . '
                                <p>' . do_shortcode($item['text']) . '</p>
                            </li>
                        </div>';
                $count++;
            }
            echo '</ul>';
        }
        ?>
    </div>
</section>
