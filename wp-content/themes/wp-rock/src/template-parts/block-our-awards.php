<?php
$group = get_field( 'our_awards' );
$title = get_field_value( $group, 'title' );
$cards = get_field_value( $group, 'cards' );
?>

<div class="our-awards">
	<div class="container">
		<h2 class="our-awards__title">
			<?php echo esc_html( $title ); ?>
		</h2>
		<?php if ( is_array( $cards ) ) { ?>
			<div class="our-awards__wrap">
				<ul class="our-awards__list">
					<?php foreach ( $cards as $card ) { ?>
						<li class="our-awards__item">
							<p class="our-awards__text">
								<?php echo esc_html( $card[ 'text' ] ); ?>
							</p>
							<a href="<?php echo esc_url( $card[ 'image' ] ); ?>" data-fancybox="awards">
							<figure class="our-awards__figure">
								<svg class="our-awards__icon" width="60" height="60" viewBox="0 0 60 60" fill="none"
								     xmlns="http://www.w3.org/2000/svg">
									<circle cx="30" cy="30" r="29.5" stroke="white"/>
									<path fill-rule="evenodd" clip-rule="evenodd"
									      d="M33.8421 33.0789L39.8421 39.0789C40.0526 39.2895 40.0526 39.6053 39.8421 39.8158C39.7368 39.9474 39.6053 40 39.4737 40C39.3421 40 39.2105 39.9474 39.1053 39.8421L33.0789 33.8421C31.7105 35.0526 29.8947 35.7895 27.8947 35.7895C23.5526 35.7895 20 32.2368 20 27.8947C20 23.5526 23.5526 20 27.8947 20C32.2368 20 35.7895 23.5526 35.7895 27.8947C35.7895 29.8947 35.0526 31.7105 33.8421 33.0789ZM21.0526 27.8947C21.0526 31.6579 24.1316 34.7368 27.8947 34.7368C31.6579 34.7368 34.7368 31.6579 34.7368 27.8947C34.7368 24.1316 31.6579 21.0526 27.8947 21.0526C24.1316 21.0526 21.0526 24.1316 21.0526 27.8947Z"
									      fill="white"/>
								</svg>
								
									<img class="our-awards__image"
									     src="<?php echo esc_url( $card[ 'image' ] ); ?>"
									     alt="img">
								
							</figure>
							</a>
						</li>
					<?php } ?>
				</ul>
			</div>
		<?php } ?>
	</div>
</div>