<?php

/**
 * Custom header template.
 *
 * @package WP-rock
 */

global $global_options;
$fields = get_fields();

$logo = get_field_value($global_options, 'logo');
$logo_mini = get_field_value($global_options, 'logo_mini');
$socials_repeater = get_field_value($global_options, 'socials_repeater');
$call_to_action_link = get_field_value($global_options, 'call_to_action_link');
$translations = pll_the_languages(array('raw' => 1));
$current_language = pll_current_language();

$header_type = get_field_value($fields, 'header_view') ? get_field_value($fields, 'header_view') : 'block-header';
$header_bg = $header_type === 'block-header' ? get_field_value($global_options, 'header_background') : '';

?>

<header id="site-header" style="background-image: url(<?php echo $header_bg; ?>)" class="site-header <?php echo $header_type; ?> js-toggle-active-menu">

    <div class="container site-header__container">
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
        <a class="site-header__logo" href="<?php echo esc_html(get_home_url()); ?>">
            <img src="<?php echo esc_attr($logo); ?>" alt="Logo" />
            <img src="<?php echo esc_attr($logo_mini); ?>" alt="Logo" />
        </a>
        <div class="site-header__breacrumbs-container">
            <div class="site-header__menu-wrapper-container">
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
                <?php
                if ($translations) {

                    $lang_name = $translations[$current_language]['name'] ?
                        '<span>' . $translations[$current_language]['name'] . '</span>' : '';

                    $flag = $translations[$current_language]['flag'] ?
                        '<img src="' . $translations[$current_language]['flag'] . '" alt="flag">' : '';

                    echo '<div class="site-header__lang-switcher">';

                    echo '<div class="site-header__lang-switcher-current">
                        ' . do_shortcode($flag) . '' . do_shortcode($lang_name) . '
                    </div>';

                    echo '<div class="site-header__lang-switcher-langs">';
                    foreach ($translations as $slug => $language) {
                        $selected = ($slug === $current_language) ? 'selected' : '';
                        $flag_img = (!empty($language['flag'])) ? '<img src="' . $language['flag'] . '" alt="flag">' : '';

                        echo '<a href="' . esc_url($language['url']) . '" class="site-header__lang-switcher-link ' . $selected . '">
                                    ' . $flag_img . '
                                    <span>' . esc_html($language['name']) . '</span>
                            </a>';
                    }
                    echo '</div>';

                    echo '</div>';
                }
                ?>

                <?php if (!empty($call_to_action_link)) : ?>
                    <a href="<?php echo do_shortcode($call_to_action_link); ?>" class="site-header__call-to-action">
                        <svg xmlns="http://www.w3.org/2000/svg" width="69" height="69" viewBox="0 0 69 69" fill="none">
                            <path d="M44.1231 24.9454C41.5784 22.4012 38.1858 21 34.5703 21C30.9626 21 27.5714 22.4054 25.0212 24.9572C22.4709 27.5093 21.0678 30.9017 21.0703 34.5097C21.0728 38.1224 22.4944 41.5201 25.0731 44.077C27.627 46.6093 30.9959 48 34.5702 48C34.6059 48 34.6417 47.9999 34.6775 47.9996C37.013 47.9814 39.3106 47.3566 41.3221 46.1928L40.5298 44.8234C38.7551 45.8503 36.7271 46.4015 34.6652 46.4176C31.4758 46.4416 28.4649 45.2122 26.1871 42.9536C23.9099 40.6958 22.6546 37.6965 22.6523 34.5086C22.6501 31.3234 23.8888 28.3285 26.1403 26.0755C28.3915 23.8227 31.3854 22.582 34.5703 22.582C41.1408 22.582 46.4872 27.9275 46.4883 34.4978C46.4887 37.1022 45.6645 39.5761 44.1048 41.6518C43.9691 41.8324 43.7689 41.9407 43.541 41.9569C43.3106 41.9731 43.0844 41.8888 42.921 41.7255L41.8449 40.6494L42.3227 40.1716L38.5938 36.4427L37.1022 37.9342C33.997 37.5158 31.5545 35.0733 31.136 31.968L32.6276 30.4765L28.8987 26.7476L26.8392 28.8071C26.6374 32.3007 27.8703 35.8617 30.5394 38.5308C33.2086 41.2 36.7695 42.4328 40.2631 42.231L40.7263 41.768L41.8024 42.8441C42.29 43.3317 42.9643 43.5835 43.6524 43.5349C44.3345 43.4867 44.9604 43.1468 45.3696 42.6021C47.1369 40.2501 48.0708 37.4476 48.0703 34.4976C48.0697 30.8821 46.6679 27.4897 44.1231 24.9454Z" fill="white" />
                        </svg>
                    </a>
                <?php endif; ?>
                <button data-role="burger" class="site-header__burger js-toggle-active-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" width="40px" height="40px" viewBox="0 0 20 20" version="1.1">
                        <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-212.000000, -888.000000)" fill="#e41019">
                            <path d="M230,904 L214,904 C212.896,904 212,904.896 212,906 C212,907.104 212.896,908 214,908 L230,908 C231.104,908 232,907.104 232,906 C232,904.896 231.104,904 230,904 L230,904 Z M230,896 L214,896 C212.896,896 212,896.896 212,898 C212,899.104 212.896,900 214,900 L230,900 C231.104,900 232,899.104 232,898 C232,896.896 231.104,896 230,896 L230,896 Z M214,892 L230,892 C231.104,892 232,891.104 232,890 C232,888.896 231.104,888 230,888 L214,888 C212.896,888 212,888.896 212,890 C212,891.104 212.896,892 214,892 L214,892 Z" id="hamburger" sketch:type="MSShapeGroup">
                            </path>
                        </g>
                    </svg>
                </button>
            </div>
            <?php
            if (function_exists('bcn_display') && !is_front_page()) {
                echo '<div class="site-header__breadcrumb">';
                bcn_display();
                echo '</div>';
            }
            ?>
        </div>
    </div>
</header>
