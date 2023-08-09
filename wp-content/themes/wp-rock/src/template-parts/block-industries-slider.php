<?php
/**
 * Block - Industries slider
 *
 * @package WP-rock
 */

$group  = get_field( 'industries_block' );
$title  = get_field_value( $group, 'title' );
$slider = get_field_value( $group, 'slider' );

?>

<div class="container">
	<div class="industries">
		<?php if ( $title ): ?>
			<h2 class="industries-title">
				<?php echo $title ?>
			</h2>
		<?php endif; ?>
		
		<?php if ( is_array( $slider ) ): ?>
			<div class="slider-industries swiper js-swiper-industry">
				<div class="swiper-wrapper">
					<?php foreach ( $slider as $slide ): ?>
						<div class="swiper-slide">
							<a href="<?php echo $slide[ 'link' ][ 'url' ]; ?>"
								class="industries-card">
							<?php if ( $slide[ 'image' ] ): ?>
							<figure class="industries-card__figure">
								<img class="industries-card__img" src="<?php echo $slide[ 'image' ]; ?>" alt="img">
								<?php if ( $slide[ 'link' ] ): ?>
									<p class="industries-card__text">
										<svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M0.398438 20.4812H8.95505L22.7593 0.0575695H14.1767L0.398438 20.4812Z" fill="#F4BC20"/>
										</svg>
										<?php echo $slide[ 'link' ][ 'title' ]; ?>
									</p>
								<?php endif; ?>
							</figure>
							<?php endif; ?>
							
							</a>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="industries-nav">
					<div class="slider-industries__prev">
						<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle class="circle" cx="40" cy="40" r="40" stroke="#E41019"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M29.3555 31H27.1249L20.9983 40L27.1249 49H29.3555L23.2289 40L29.3555 31Z" fill="#0E0E0F"/>
							<path d="M59.3036 39.9999H23.0893" stroke="#0E0E0F" stroke-linecap="square"/>
						</svg>
					
					</div>
					<div class="slider-industries__next">
						<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle class="circle" cx="40" cy="40" r="39.5" transform="matrix(-1 0 0 1 80 0)" stroke="#E41019"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M29.3555 31H27.1249L20.9983 40L27.1249 49H29.3555L23.2289 40L29.3555 31Z" fill="#0E0E0F"/>
							<path d="M59.3036 39.9999H23.0893" stroke="#0E0E0F" stroke-linecap="square"/>
						</svg>
					</div>
				</div>
			</div>
		<?php endif; ?>
	
	</div>
</div>
