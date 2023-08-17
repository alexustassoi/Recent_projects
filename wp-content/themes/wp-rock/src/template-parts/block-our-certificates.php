<?php
$group        = get_field( 'our_certificates' );
$title        = get_field_value( $group, 'title' );
$certificates = get_field_value( $group, 'certificates' );
$logotypes    = get_field_value( $group, 'logotypes' );
?>

<div class="our-certificate">
	<div class="container">
		<h2 class="our-certificate__title">
			<?php echo esc_html( $title ); ?>
		</h2>
		<div class="our-certificate__slider">
			<?php if ( is_array( $certificates ) ) { ?>
				<div class="swiper our-certificate__swiper swiper-certificates">
					<div class="swiper-wrapper">
						<?php foreach ( $certificates as $card ) { ?>
							<div class="swiper-slide our-certificate__slide">
								<a href="<?php echo esc_url( $card ); ?>" data-fancybox="certificate">
									<figure class="our-certificate__figure">
										<svg class="our-certificate__icon" width="60" height="60" viewBox="0 0 60 60" fill="none"
										     xmlns="http://www.w3.org/2000/svg">
											<circle cx="30" cy="30" r="29.5" stroke="white"/>
											<path fill-rule="evenodd" clip-rule="evenodd"
											      d="M33.8421 33.0789L39.8421 39.0789C40.0526 39.2895 40.0526 39.6053 39.8421 39.8158C39.7368 39.9474 39.6053 40 39.4737 40C39.3421 40 39.2105 39.9474 39.1053 39.8421L33.0789 33.8421C31.7105 35.0526 29.8947 35.7895 27.8947 35.7895C23.5526 35.7895 20 32.2368 20 27.8947C20 23.5526 23.5526 20 27.8947 20C32.2368 20 35.7895 23.5526 35.7895 27.8947C35.7895 29.8947 35.0526 31.7105 33.8421 33.0789ZM21.0526 27.8947C21.0526 31.6579 24.1316 34.7368 27.8947 34.7368C31.6579 34.7368 34.7368 31.6579 34.7368 27.8947C34.7368 24.1316 31.6579 21.0526 27.8947 21.0526C24.1316 21.0526 21.0526 24.1316 21.0526 27.8947Z"
											      fill="white"/>
										</svg>
									<img src="<?php echo $card; ?>" alt="image">
									</figure>
								</a>
							</div>
						<?php } ?>
						<div class="swiper-slide our-certificate__slide empty">
						
						</div>
					</div>
				</div>
				<div class="our-certificate-nav">
					<div class="slider-our-certificate__prev">
						<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
							<circle stroke="#F4BC20" class="circle" cx="40" cy="40" r="40"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M29.3555 31H27.1249L20.9983 40L27.1249 49H29.3555L23.2289 40L29.3555 31Z" fill="#F4BC20"/>
							<path d="M59.3036 40H23.0893" stroke="#F4BC20" stroke-linecap="square"/>
						</svg>
					</div>
					<div class="slider-our-certificate__next">
						<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80" fill="none">
							<circle stroke="#F4BC20" class="circle" cx="40" cy="40" r="40"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M29.3555 31H27.1249L20.9983 40L27.1249 49H29.3555L23.2289 40L29.3555 31Z" fill="#F4BC20"/>
							<path d="M59.3036 40H23.0893" stroke="#F4BC20" stroke-linecap="square"/>
						</svg>
					</div>
				</div>
			<?php } ?>
		</div>
		<div class="our-certificate__logos">
			<?php if ( is_array( $logotypes ) ) { ?>
				<?php foreach ( $logotypes as $card ) { ?>
					<img class="our-certificate__logo" src="<?php echo $card; ?>" alt="image">
				<?php } ?>
			<?php } ?>
		
		</div>
	</div>
</div>
