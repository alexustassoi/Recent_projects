<?php
/**
 * General template for pages
 *
 * @package WP-rock
 * @since 4.4.0
 */

var_dump('sdfdsf');
//get_header();
?>


<?php
do_action( 'wp_rock_before_page_content' );

echo '<div class="container">';
if ( have_posts() ) :
    // Start the loop.
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
endif;
echo '</div>';

do_action( 'wp_rock_after_page_content' );
?>


<?php
get_footer();
