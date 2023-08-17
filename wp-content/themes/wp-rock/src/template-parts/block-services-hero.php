<?php

/**
 * Block - Services hero.
 *
 * @package WP-rock
 */

$fields               = get_fields();
$reverse_block_needed = get_field_value($fields, 'reverse_block_needed');
$block_title          = get_field_value($fields, 'block_title');
$desc                 = get_field_value($fields, 'desc');
$bg_img               = get_field_value($fields, 'bg_img');

$args = [
    'reverse_block' => $reverse_block_needed,
    'block_title'   => $block_title,
    'desc'          => $desc,
    'bg_img'        => $bg_img
];

include(locate_template('src/template-parts/template-service-hero.php', false, false, $args));


