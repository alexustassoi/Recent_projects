<?php

/**
 * Custom header template.
 *
 * @package WP-rock
 */

global $global_options;

$logo             = get_field_value($global_options, 'logo');
$socials_repeater = get_field_value($global_options, 'socials_repeater');
?>

<header id="site-header" class="site-header">
    <div class="container site-header__container">
        <div class="site-header__socials-wrapper">
            <?php
            if ($socials_repeater) {
                echo '<div class="site-header__socials">';
                foreach ($socials_repeater as $item) {
                    $icon = get_field_value($item, 'icon');
                    $url  = get_field_value($item, 'url');

                    echo '<a class="site-header__social" href="' . do_shortcode($url) . '">
                                    <img src="' . do_shortcode($icon) . '" alt="Social icon"/>
                                </a>';
                }
                echo '</div>';
            }
            ?>
        </div>
        <div class="site-header__header-wrapper">
            <a class="site-header__logo-wrap" href="<?php echo esc_html(get_home_url()); ?>">
                <img src="<?php echo esc_attr($logo); ?>" alt="Logo" />
            </a>
            <nav class="site-header__menu-wrapper">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary_menu',
                        'container' => 'ul',
                        'menu_class' => 'site-header__menu',
                    )
                )
                ?>
            </nav>
        </div>
    </div>
</header>
