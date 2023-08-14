<?php
/**
 * Main function themes
 *
 * @package WP-rock
 * @since 4.4.0
 */

// required files.
require get_template_directory() . '/src/inc/class-wp-rock.php';
require get_template_directory() . '/src/inc/initial-setup.php';
require get_template_directory() . '/src/inc/enqueue-scripts.php';
require get_template_directory() . '/src/inc/wpeditor-formats-options.php';
require get_template_directory() . '/src/inc/analytics-settings.php';
require get_template_directory() . '/src/inc/acf-setting.php';
require get_template_directory() . '/src/inc/custom-posts-type.php';
require get_template_directory() . '/src/inc/custom-taxonomies.php';
require get_template_directory() . '/src/inc/woocommerce-customization.php';
require get_template_directory() . '/src/inc/class-wp-rock-blocks.php';
require get_template_directory() . '/src/inc/ajax-requests.php';
require get_template_directory() . '/src/inc/custom-accept-cookies.php';
require get_template_directory() . '/src/inc/custom-hooks.php';

add_filter( 'show_admin_bar', '__return_false' );

add_filter('bcn_breadcrumb_title', 'my_breadcrumb_title_swapper', 3, 10);
function my_breadcrumb_title_swapper($title, $type, $id)
{
    if(in_array('home', $type)) {
        $title = get_option('page_on_front') ? get_the_title( get_option('page_on_front') ) : __('Home');
    }
    return $title;
}

function theme_custom_display_img_menu( $title, $item, $args, $depth ) {
    // Check if $title contains an <img> tag.
    if ( strpos( $title, '<img' ) !== false && strpos( $title, '<span>' ) !== false ) {
        // Replace the original img tag structure with the new one.
        $title = str_replace('<img', '<figure><img', $title);
        $title = str_replace('</span><img', '</span><figure><img', $title);
        $title = str_replace('width="25px">', 'width="25px"></figure>', $title);
    }
    return $title;
}
add_filter( 'nav_menu_item_title', 'theme_custom_display_img_menu', 80, 4 );
