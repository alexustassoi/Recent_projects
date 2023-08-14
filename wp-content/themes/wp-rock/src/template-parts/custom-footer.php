<?php
/**
 * Custom footer template
 *
 * @package WP-rock
 */

global $global_options;

$logo = get_field_value( $global_options, 'footer_logo' );
$logo2 = get_field_value($global_options, 'footer_img_1');
$logo3 = get_field_value($global_options, 'footer_img_2');
$phone = get_field_value($global_options, 'phone');

?>
<footer id="site-footer" class="site-footer">
    <div class="container">
        <div class="site-footer__wrapper">
            <div class="site-footer__logo-nav">
                <a href="<?php echo esc_url( get_home_url() ); ?>">
                    <img class="site-footer__logo" src="<?php echo esc_attr( $logo ); ?>"
                         alt="Logo"/>
                </a>
                <div class="site-footer__menu-wrapper">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer_menu',
                            'container'      => 'ul',
                            'menu_class'     => 'site-footer__menu',
                        )
                    )
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
echo esc_html( get_template_part( 'src/template-parts/components/popup-contacts', null ) );
?>

<?php
echo esc_html( get_template_part( 'src/template-parts/components/popup-question', null ) );
?>
