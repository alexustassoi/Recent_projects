<?php
/**
 * Block - Top banner info
 *
 * @package WP-rock
 */

$group          = get_field( 'information_with_image' );
$title          = get_field_value( $group, 'title' );
$image          = get_field_value( $group, 'image' );
$text           = get_field_value( $group, 'text' );


?>

<div class="info-block" >
	<div class="container">
		<div class="info-block__wrapper">
			<div class="info-block__left">
				<?php if ($image): ?>
				<figure class="info-block__figure">
					<img class="info-block__image" src="<?php echo $image; ?>" alt="img">
				</figure>
				<?php endif; ?>
			</div>
			<div class="info-block__right">
				<?php if ( $title ) : ?>
					<h2 class="info-block__title">
						<?php echo esc_html( $title ); ?>
					</h2>
				<?php endif; ?>
				
				<?php if ( $text ) : ?>
					<div class="info-block__text">
						<?php echo $text; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>