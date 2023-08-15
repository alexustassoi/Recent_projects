<?php

/**
 * Block - News.
 *
 * @package WP-rock
 */

global $global_options;

$fields        = get_fields();
$block_title   = get_field_value($fields, 'block_title');
$more_news_btn = get_field_value($fields, 'more_news_btn');

$blog_link_text = get_field_value($global_options, 'blog_link_text');
$blog_link_text = (!is_null($blog_link_text)) ? $blog_link_text : 'Read more';

?>

<section class="news">
    <div class="news__container container">
        <div class="news__content">
            <div class="news__items">
                <div class="blog-page__inner">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 3,
                    );

                    $news_query = new WP_Query($args);

                    if ($news_query->have_posts()) {
                        while ($news_query->have_posts()) {
                            $news_query->the_post();
                            $excerpt = get_the_excerpt() ? '<p class="post-card__excerpt">' . get_the_excerpt() . '</p>' : '';
                            $thumb   = get_the_post_thumbnail_url() ? '<a href="' . get_the_permalink() . '" class="post-card__thumb">
                        <img src="' . get_the_post_thumbnail_url() . '" alt="thumbnail">
                    </a>' : '';


                            echo '<div class="post-card">
                        <time class="post-card__date">' . get_the_date('d.m.Y') . '</time>
                        ' . do_shortcode($excerpt) . '
                        ' . $thumb . '
                        <a class="post-card__link arrow-link" href="' . get_the_permalink() . '">
                            ' . $blog_link_text . '
                        </a>
                    </div>'; ?>
                            <?php
                        }

                        wp_reset_postdata();
                    }
                    ?>
                </div>
                <?php
                echo ($more_news_btn)
                    ? '<a href="' . do_shortcode($more_news_btn["url"]) . '" class="news__btn primary mobile" >' . do_shortcode($more_news_btn["title"]) . '</a>'
                    : '';
                ?>
            </div>
            <div class="news__block-info">
                <?php
                echo ($block_title)
                    ? '<h2 class="news__title">' . do_shortcode($block_title) . '</h2>'
                    : '';

                echo ($more_news_btn)
                    ? '<a href="' . do_shortcode($more_news_btn["url"]) . '" class="news__btn primary desktop" >' . do_shortcode($more_news_btn["title"]) . '</a>'
                    : '';
                ?>
            </div>
        </div>
    </div>
</section>
