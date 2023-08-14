<?php

/**
 * Block - Vacancies.
 *
 * @package WP-rock
 */

$fields = get_fields();
$title = get_field_value($fields, 'title');

$args = array(
    'post_type' => 'vacancies',
);

$carriers_posts = new WP_Query($args);
?>
<section class="vacancies">
    <div class="vacancies__container container">
        <?php
        echo (!empty($title)) ? '<h2 class="vacancies__title">' . do_shortcode($title) . '</h2>' : '';

        if($carriers_posts->have_posts()) {
            foreach($carriers_posts->posts as $item) {

                var_dump($item->post_title);
                echo '<div class="vacancies__carriers">
                        <div class="vacancies__carriers-post">
                            <span class="vacancies__carriers-post-title"></span>
                            <span class="vacancies__carriers-post-map"></span>
                            <a href="" class="vacancies__carriers-post-link"></a>
                        </div>
                    </div>';
            }
        }

        ?>



    </div>
</section>
