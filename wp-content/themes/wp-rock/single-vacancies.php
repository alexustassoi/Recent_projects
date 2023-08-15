<?php

/**
 * General template for post vacancies.
 *
 * @package WP-rock
 * @since 4.4.0
 */

get_header();
do_action('wp_rock_before_page_content');

global $global_options;

$blog_title     = get_field_value($global_options, 'blog_title');
$blog_link_text = get_field_value($global_options, 'blog_link_text');
$block_title    = get_field_value($global_options, 'vacancies_form_title');
$desc           = get_field_value($global_options, 'vacancies_form_desc');
$form_shortcode = get_field_value($global_options, 'vacancies_form_shortcode');

?>

    <div class="single-vacancy">
        <div class="single-vacancy__container container">
            <?php
            while (have_posts()) :
                the_post();

                $location        = get_post_meta(get_the_ID(), 'location', true);
                $hero_desc       = get_post_meta(get_the_ID(), 'hero_desc', true);
                $vacancy_content = get_the_content();


//                if ($location) {
//                    echo '<p><strong>Location:</strong> ' . esc_html($location) . '</p>';
//                }

                echo '<div class="single-vacancy__content">' . apply_filters('the_content', $vacancy_content) . '</div>';

            endwhile;

            ?>
        </div>

        <?php
        include(locate_template('src/template-parts/template-contact-us.php', false, false));
        ?>
    </div>

<?php do_action('wp_rock_after_page_content');

get_footer();
