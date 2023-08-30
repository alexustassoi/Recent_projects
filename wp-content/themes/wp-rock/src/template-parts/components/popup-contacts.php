<?php
global $global_options;
$popup_contact = get_field_value( $global_options, 'popup_contact' );
$title         = get_field_value( $popup_contact, 'title' );
$shortcode     = get_field_value( $popup_contact, 'shortcode' );

if ( $title && $shortcode ) { ?>
	<div id="contact" class="popup">
		<div class="my_overlay js-popup-close">
			<svg class="my_overlay__image" width="1048" height="794" viewBox="0 0 1048 794" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path opacity="0.0156228" fill-rule="evenodd" clip-rule="evenodd" d="M129 -22H480.665L1048 818H695.267L129 -22Z" fill="#F8F8F8"/>
				<path d="M566.533 758.5L0.940066 -80.5H351.4L918.059 758.5H566.533Z" stroke="#F4BC20"/>
			</svg>
		</div>
		<div class="popup-wrapper-inner">
			<button class="popup-close js-popup-close">
				<svg width="36" height="37" viewBox="0 0 36 37" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd"
					      d="M17.9977 17.2301L0.816287 0L0.0187005 0.795334L17.2013 18.0266L0 35.2279L0.796461 36.0243L17.9966 18.8242L35.1804 36.0566L35.978 35.2613L18.7931 18.0277L36 0.820793L35.2035 0.0243332L17.9977 17.2301Z"
					      fill="#0E0E0F"/>
				</svg>
			</button>
			<div class="popup-container">
				<h3 class="popup-container__title">
					<?php echo esc_html( $title ); ?>
				</h3>
				<div class="popup-container__form">
					<?php echo do_shortcode( $shortcode ); ?>
				</div>
			</div>
		</div>
	</div>
<?php } ?>
