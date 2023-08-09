<?php

/**
 * Block - Ask a question.
 *
 * @package WP-rock
 */

global $global_options;

$fields      = get_fields();
$block_title = get_field_value($fields, 'block_title');
$block_btn   = get_field_value($fields, 'block_btn');
$bg_img      = get_field_value($fields, 'bg_img');

?>

<section class="ask-question" style="background-image: url(<?php echo ($bg_img) ? do_shortcode($bg_img) : 'none'; ?>)">
    <div class="ask-question__container container">
        <div class="ask-question__content">
            <?php
            echo ($block_title)
                ? '<h2 class="ask-question__title">' . do_shortcode($block_title) . '</h2>'
                : '';

            echo ($block_btn)
                ? '<a href="' . do_shortcode($block_btn["url"]) . '" class="ask-question__btn primary">' . do_shortcode($block_btn["title"]) . '</a>'
                : '';
            ?>
        </div>
    </div>
</section>
