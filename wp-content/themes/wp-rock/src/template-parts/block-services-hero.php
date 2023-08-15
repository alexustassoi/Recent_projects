<?php

/**
 * Block - Services hero.
 *
 * @package WP-rock
 */

$fields      = get_fields();
$block_title = get_field_value($fields, 'block_title');
$desc        = get_field_value($fields, 'desc');
$bg_img      = get_field_value($fields, 'bg_img');
//style="background-image: url(<?php echo ($bg_img) ? do_shortcode($bg_img) : 'none';)"
$args = [
    'block_title' => $block_title,
    'desc' => $desc,
    'bg_img' => $bg_img
];

include(locate_template('src/template-parts/template-service-hero.php', false, false, $args));

?>

