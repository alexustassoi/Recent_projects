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

<?php
include(locate_template('src/template-parts/template-contact-us.php', false, false));
?>
