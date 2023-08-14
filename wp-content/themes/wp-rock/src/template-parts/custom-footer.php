<?php

/**
 * Custom footer template.
 *
 * @package WP-rock
 */

global $global_options;

$logo = get_field_value($global_options, 'footer_logo');
$logo2 = get_field_value($global_options, 'footer_img_1');
$logo3 = get_field_value($global_options, 'footer_img_2');

$phone = get_field_value($global_options, 'phone');
$email = get_field_value($global_options, 'email');
$address = get_field_value($global_options, 'address');
$footer_contact_title = get_field_value($global_options, 'footer_contact_title');
$footer_copyright = get_field_value($global_options, 'footer_copyright');

$socials_repeater = get_field_value($global_options, 'socials_repeater');
?>
<footer id="site-footer" class="site-footer">
    <div class="site-footer__container container">
        <div class="site-footer__logos-wrapper">
            <figure class="site-footer__logo-img">
                <img src="<?php echo esc_attr($logo); ?>" alt="Logo" />
            </figure>
            <figure class="site-footer__logo-img">
                <img src="<?php echo esc_attr($logo2); ?>" alt="Logo" />
            </figure>
            <figure class="site-footer__logo-img">
                <img src="<?php echo esc_attr($logo3); ?>" alt="Logo" />
            </figure>
        </div>
        <div class="site-footer__menu-wrapper">
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'footer-menu',
                    'container'      => 'ul',
                    'menu_class'     => 'site-footer__menu',
                )
            )
            ?>
        </div>
        <div class="site-footer__contacts-wrapper">
            <?php

            if (!empty($footer_contact_title)) {
                echo '<p class="site-footer__contacts-title">' . do_shortcode($footer_contact_title) . '</p>';
            }

            if (!empty($phone)) {
                $clear_number = preg_replace('/[0-9]+/', '', $phone);

                echo '<a href="tel:' . do_shortcode($clear_number) . '" class="site-footer__contact phone">
                            ' . esc_html($phone) . '
                        </a>';
            }
            if (!empty($email)) {
                echo '<a href="mailto:' . esc_html($email) . '" class="site-footer__contact email">
                            ' . esc_html($email) . '
                        </a>';
            }
            if (!empty($phone)) {
                echo '<p class="site-footer__contact mark">
                            ' . do_shortcode($address) . '
                        </p>';
            }

            if ($socials_repeater) {
                echo '<div class="site-footer__socials">';
                foreach ($socials_repeater as $item) {
                    $icon = get_field_value($item, 'icon');
                    $url  = get_field_value($item, 'url');

                    echo '<a class="site-footer__social" href="' . do_shortcode($url) . '">
                            <img src="' . do_shortcode($icon) . '" alt="Social icon"/>
                        </a>';
                }
                echo '</div>';
            }
            ?>
        </div>
    </div>
    <div class="site-footer__ps-wrapper">
        <div class="site-footer__ps-container container">
            <?php
            if (!empty($footer_copyright)) {
                echo '<p class="site-footer__ps-text">' . do_shortcode($footer_copyright) . '</p>';
            }
            ?>
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'ps-footer-menu',
                    'container'      => 'ul',
                    'menu_class'     => 'site-footer__ps-menu',
                )
            )
            ?>
        </div>
    </div>
</footer>

<?php
echo esc_html( get_template_part( 'src/template-parts/components/popup-contacts', null ) );
?>

<?php
echo esc_html( get_template_part( 'src/template-parts/components/popup-question', null ) );
?>
