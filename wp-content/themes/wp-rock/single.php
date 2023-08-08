<?php

/**
 * General template for single posts.
 *
 * @package WP-rock
 * @since 4.4.0
 */

get_header();

do_action('wp_rock_before_page_content');

global $global_options;
$fields = get_fields();

$back_text = get_field_value($global_options, 'back_text');
$share_text = get_field_value($global_options, 'share_text');
$socials_in_single_post = get_field_value($global_options, 'socials_in_single_post');

$content = get_field_value($fields, 'content');
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
);

$query = new WP_Query($args);
?>
<section class="post-single">
    <div class="post-single__container container">
        <h1 class="post-single__title"><?php echo do_shortcode(get_the_title()); ?></h1>
        <div class="post-single__wrapper">
            <div class="post-single__content">
                <time class="post-single__date"><?php echo get_the_date('d.m.Y'); ?></time>
                <div class="post-single__inner-text"><?php echo do_shortcode($content); ?></div>
                <div class="post-single__buttons-wrapper">
                    <?php
                    if (!empty($back_text)) {
                        echo '<button onclick="history.back()" class="post-single__back arrow-link-reverse arrow-link">
                                    ' . do_shortcode($back_text) . '
                                </button>';
                    }
                    ?>
                    <div class="post-single__social">

                        <?php
                        if (!empty($share_text)) {
                            echo '<span>' . do_shortcode($share_text) . '</span>';
                        }
                        ?>
                        <button>
                            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.36369 2.18184C4.36369 3.38684 3.38684 4.36369 2.18184 4.36369C0.976845 4.36369 0 3.38684 0 2.18184C0 0.976845 0.976845 0 2.18184 0C3.38684 0 4.36369 0.976845 4.36369 2.18184ZM0 5.45456H4.36359V17.4546H0V5.45456ZM10.9091 7.39641C10.9091 7.39641 11.3018 5.45456 14.5746 5.45456C17.0618 5.45456 18.5454 7.49456 18.5454 10.9091V17.4546H14.1818V10.9091C14.1818 9.69816 13.8546 8.72728 12.7637 8.72728C10.9091 8.72728 10.9091 10.9091 10.9091 10.9091V17.4546H6.54553V5.45456H10.9091V7.39641Z" fill="#292B2E" />
                            </svg>
                            <script type="IN/Share" data-url="https://www.linkedin.com"></script>
                        </button>

                        <button>
                            <svg width="10" height="20" viewBox="0 0 10 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.18184 4.36369V6.54553H0V9.81825H2.18184V19.6364H6.54544V9.81825H9.44728L9.81816 6.54553H6.54544V4.63641C6.54544 3.75281 6.63272 3.28369 7.99631 3.28369H9.81816V0H6.89456C3.40369 9.375e-05 2.18184 1.63641 2.18184 4.36369Z" fill="#292B2E" />
                            </svg>
                            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="" data-size="">
                                <a target="_blank"
                                    href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $actual_link; ?>" class="fb-xfbml-parse-ignore"></a>
                            </div>
                        </button>


                    </div>
                </div>
            </div>
            <div class="post-single__related-posts">
                <?php
                if ($query->have_posts()) {
                    while ($query->have_posts()) : $query->the_post();

                        $thumb = get_the_post_thumbnail_url() ?
                            '<a href="' . get_the_permalink() . '" class="post-single__related-post-thumb">
                                <img src="' . get_the_post_thumbnail_url() . '" alt="thumbnail">
                            </a>' : '';

                        echo '<div class="post-single__related-post">
                                    <time class="post-single__related-post-date">' . get_the_date('d.m.Y') . '</time>
                                    <p class="post-single__related-post-title">' . get_the_title() . '</p>
                                    ' . $thumb . '
                                    <a href="#" class="post-single__related-post-link circle-link"></a>
                                </div>';

                    endwhile;
                }
                ?>

            </div>
        </div>
    </div>
</section>

<?php

do_action('wp_rock_after_page_content');

get_footer();
