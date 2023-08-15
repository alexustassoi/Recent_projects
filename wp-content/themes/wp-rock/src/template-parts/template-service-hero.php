<?php

/**
 * Template: Service hero.
 *
 * @package WP-rock
 */

$hero_title = (isset($args['block_title'])) ? $args['block_title'] : null;
$hero_desc  = (isset($args['desc'])) ? $args['desc'] : null;
$hero_img   = (isset($args['bg_img'])) ? $args['bg_img'] : null;
$location   = (isset($args['location'])) ? $args['location'] : null;
$post_desc  = (isset($args['post_desc'])) ? $args['post_desc'] : null;

?>

<section class="services-hero">
    <?php
    if ($hero_img) {
        echo ' <figure class="services-hero__image">
                    <img src="' . $hero_img . '" alt="image">
                </figure>';
    }
    ?>

    <div class="services-hero__container container">
        <div class="services-hero__content">
            <?php
            echo ($hero_title)
                ? '<h2 class="services-hero__title">' . do_shortcode($hero_title) . '</h2>'
                : '';

            echo ($location)
                ? '<div class="services-hero__location">' . do_shortcode($location) . '</div>'
                : '';

            echo ($post_desc)
                ? '<div class="services-hero__post-desc">' . do_shortcode($post_desc) . '</div>'
                : '';

            echo ($hero_desc)
                ? '<div class="services-hero__desc">' . do_shortcode($hero_desc) . '</div>'
                : '';
            ?>
        </div>
    </div>
</section>
