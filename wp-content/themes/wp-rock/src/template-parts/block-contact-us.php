<?php

/**
 * Block - Contact us.
 *
 * @package WP-rock
 */

$fields         = get_fields();
$block_title    = get_field_value($fields, 'block_title');
$desc           = get_field_value($fields, 'desc');
$form_shortcode = get_field_value($fields, 'form_shortcode');

?>

<section class="contact-us">
    <div class="contact-us__container container">
        <div class="contact-us__content-info">
            <?php
            echo ($block_title)
                ? '<h2 class="contact-us__title">' . do_shortcode($block_title) . '</h2>'
                : '';

            echo ($desc)
                ? '<div class="contact-us__desc">' . do_shortcode($desc) . '</div>'
                : '';
            ?>
        </div>
        <?php
        echo ($form_shortcode)
            ? '<div class="contact-us__form-wrap">' . do_shortcode($form_shortcode) . '</div>'
            : '';
        ?>
    </div>
</section>
