<?php
/**
 * Block - Top banner info
 *
 * @package WP-rock
 */

$group          = get_field( 'top_banner_info' );
$title          = get_field_value( $group, 'title' );
$image          = get_field_value( $group, 'image' );
$image_position = get_field_value( $group, 'image_position' );
$text           = get_field_value( $group, 'text' );
$link           = get_field_value( $group, 'link' );

$background_image = !$image_position ? 'background-image: url(' . $image . ')' : '';

?>

<div class="top-banner <?php echo $background_image === '' ? 'top-banner--nopadding' : ''; ?>" style="<?php echo $background_image; ?>">
	<div class="container">
		<div class="top-banner__wrapper">
			<div class="top-banner__left">
				<?php if ($background_image === ''): ?>
				<figure class="top-banner__figure">
					<img class="top-banner__image" src="<?php echo $image; ?>" alt="img">
				</figure>
				<?php endif; ?>
			</div>
			<div class="top-banner__right">
				<svg class="top-banner__line" width="856" height="781" viewBox="0 0 856 781" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M855.246 0H528.065L0.229736 781H328.404L855.246 0Z" fill="#F8F8F8"/>
				</svg>
				<?php if ( $title ) : ?>
					<h2 class="top-banner__title">
						<?php echo esc_html( $title ); ?>
					</h2>
				<?php endif; ?>
				
				<?php if ( $text ) : ?>
					<div class="top-banner__text">
						<?php echo $text; ?>
					</div>
				<?php endif; ?>
				
				<?php if ( is_array( $link ) ) :
					$array_link = array(
						'url' => $link['url'],
						'target' => $link['target'],
						'title' => $link['title'],
						'style' => 'default',
					);
					echo esc_html( get_template_part( 'src/template-parts/components/button-with-arrow', null, $array_link ) );
				endif; ?>
			</div>
		</div>
	</div>
</div>
