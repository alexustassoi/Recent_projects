<?php
/**
 * General template for 404 page
 *
 * @package WP-rock
 * @since 4.4.0
 */

get_header();

do_action( 'wp_rock_before_page_content' );

global $global_options;

$title = get_field_value($global_options, 'title_page_404');
$text = get_field_value($global_options, 'description_page_404');
$img = get_field_value($global_options, 'image_404');
$link = get_field_value($global_options, 'link_404');

?>
<section class="section-404">
	<div class="container">
		<div class="section-404__wrapper">
			<h1 class="section-404__title">
				<?php echo esc_html( $title ); ?>
			</h1>
			<p class="section-404__text">
				<?php echo esc_html( $text ); ?>
			</p>

			<div class="section-404__miniature">
				<svg width="190" height="210" viewBox="0 0 190 210" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd"
					      d="M167.203 127.5H189.703V174H167.203V210H112.603V174H4.60313L0.703125 124.8L112.603 0H167.203V127.5ZM113.203 128.4V68.4L60.4031 128.4H113.203Z"
					      fill="#E41019"/>
				</svg>
				<figure class="section-404__figure">
					<img class="section-404__image" src="<?php echo esc_url( $img ); ?>" alt="img">
				</figure>
				<svg width="190" height="210" viewBox="0 0 190 210" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd"
					      d="M167.203 127.5H189.703V174H167.203V210H112.603V174H4.60313L0.703125 124.8L112.603 0H167.203V127.5ZM113.203 128.4V68.4L60.4031 128.4H113.203Z"
					      fill="#E41019"/>
				</svg>
			</div>
			<div class="section-404__nav">
				<?php if ( is_array( $link ) ) :
					$array_link = array(
						'url'    => $link[ 'url' ],
						'target' => $link[ 'target' ],
						'title'  => $link[ 'title' ],
					);
					echo esc_html( get_template_part( 'src/template-parts/components/button-with-arrow', null, $array_link ) );
				endif; ?>
			</div>
		</div>
	</div>
</section>
<?php do_action( 'wp_rock_after_page_content' ); ?>
<?php get_footer(); ?>
