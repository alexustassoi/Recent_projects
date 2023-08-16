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
        <?php
        while (have_posts()) :
            the_post();

            $location        = get_post_meta(get_the_ID(), 'location', true);
            $post_desc       = get_post_meta(get_the_ID(), 'hero_desc', true);
            $vacancy_content = get_the_content();
            $thumbnail_id    = get_post_thumbnail_id(get_the_ID());
            $image_url       = wp_get_attachment_image_url($thumbnail_id, 'full');

            $args = [
                'block_title' => get_the_title(),
                'bg_img' => $image_url,
                'location' => $location,
                'post_desc' => $post_desc
            ];

            include(locate_template('src/template-parts/template-service-hero.php', false, false));

            echo '<div class="single-vacancy__content">' . apply_filters('the_content', $vacancy_content) . '</div>';

        endwhile;

        ?>

        <?php
        include(locate_template('src/template-parts/template-contact-us.php', false, false));
        ?>
    </div>

<?php do_action('wp_rock_after_page_content');

get_footer();
