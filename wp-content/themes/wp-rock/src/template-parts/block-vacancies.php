<?php
/**
 * Block - Vacancies.
 *
 * @package WP-rock
 */

$fields = get_fields();
$title = get_field_value($fields, 'title');

$vacancies_repeater = get_field_value($fields, 'vacancies_repeater');
?>
<section class="vacancies">
    <div class="vacancies__container container">
        <?php
        if (!empty($title)) {
            echo '<h2 class="vacancies__title">' . do_shortcode($title) . '</h2>';
        }

        if ($vacancies_repeater) {
            foreach ($vacancies_repeater as $item) {

                $args = array(
                    'cat' => pll_get_term_translations($item['category_id']),
                    'post_type' => 'vacancies',
                    'lang' => pll_current_language()
                );

                $query = new WP_Query($args);
                echo '<div class="vacancies__category">';

                if (!empty($item['list_title'])) {
                    echo '<h4 class="vacancies__category-title">' . $item['list_title'] . '</h4>';
                }

                echo '<div class="vacancies__category-inner">';

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();

                        $post_fields = get_fields(get_the_ID());
                        $post_title = get_the_title(get_the_ID());
                        $post_link = get_permalink(get_the_ID());
                        $location = 'Paris, France';//get_field_value($post_fields, 'location') ? get_field_value($post_fields, 'location') : '';

                        echo '<div class="vacancies__category-post">

                                <span class="vacancies__category-post-title">
                                    ' . do_shortcode($post_title) . '
                                </span>

                                <span class="vacancies__category-post-location">
                                    ' . esc_html($location) . '
                                </span>

                                <a href="' . do_shortcode($post_link) . '" class="vacancies__category-post-link circle-link"></a>
                            </div>';
                    }
                }

                echo '</div>';
                echo '</div>';
            }
        }


        ?>



    </div>
</section>
