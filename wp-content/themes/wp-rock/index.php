<?php

/**
 * General template for pages
 *
 * @package WP-rock
 * @since 4.4.0
 */

get_header();
do_action('wp_rock_before_page_content');

global $global_options;

$blog_title = get_field_value($global_options, 'blog_title');
$blog_link_text = get_field_value($global_options, 'blog_link_text');

$blog_link_text = (!is_null($blog_link_text)) ? $blog_link_text : 'Read more';

?>
<div class="blog">
    <div class="container">
        <?php
        echo (!empty($blog_title)) ? '<h1 class="blog__title">' . do_shortcode($blog_title) . '</h1>' : '';
        ?>
        <div class="blog__inner">
            <?php if (have_posts()) : ?>
                <?php
                while (have_posts()) :
                    the_post();

                    $excerpt = get_the_excerpt() ? '<p class="post__excerpt">' . get_the_excerpt() . '</p>' : '';

                    echo '<div class="post">
                        <time class="post__date">' . get_the_date('d.m.Y') . '</time>
                        ' . do_shortcode($excerpt) . '
                        <a href="' . get_the_permalink() . '" class="post__thumb">
                            <img src="' . get_the_post_thumbnail_url() . '" alt="thumbnail">
                        </a>
                        <a class="post__link arrow-link" href="' . get_the_permalink() . '">
                            ' . $blog_link_text . '
                        </a>
                    </div>';

                endwhile; ?>
            <?php endif; ?>
        </div>
        <?php the_posts_pagination(); ?>
    </div>
</div>

<?php do_action('wp_rock_after_page_content');

get_footer();
