<?php
/**
 * Block - Our offer small
 *
 * @package WP-rock
 */
$group       = get_field( 'our_offer_small' );
$title       = get_field_value( $group, 'title' );
$description = get_field_value( $group, 'description' );
$offers = get_field_value($group, 'offers')

?>

<div class="offer-small">
	<div class="container">
		<div class="offer-small__container">
			<div class="offer-small__left">
				<?php if ( $title ) : ?>
					<h2 class="offer-small__title">
						<?php echo esc_html( $title ); ?>
					</h2>
				<?php endif; ?>
				
				<?php if ( $description ) : ?>
					<p class="offer-small__text">
						<?php echo $description; ?>
					</p>
				<?php endif; ?>
			</div>
			<div class="offer-small__right">
				<?php foreach ( $offers as $item ) {
					$offer_icon  = get_field_value( $item, 'icon' );
					$link = get_field_value($item, 'link');
					$offer_title = get_field_value( $link, 'title' );
					$offer_link  = get_field_value( $link, 'url' );
					?>
					<div class="our-offer__item offer-small__item">
						<figure class="our-offer__item-icon-wrap">
							<?php if ($offer_icon) : ?>
							<img class="our-offer__item-icon" src="<?php echo do_shortcode( $offer_icon ); ?>"
							     alt="Icon"/>
							<?php endif; ?>
						</figure>
						<div class="our-offer__item-title">
							<?php echo do_shortcode( $offer_title ); ?>
						</div>
						<a href="<?php echo do_shortcode( $offer_link ); ?>" class="our-offer__item-btn"></a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
