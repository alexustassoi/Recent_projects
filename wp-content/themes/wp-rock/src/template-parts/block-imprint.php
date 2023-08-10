<?php

/**
 * Block - Hero.
 *
 * @package WP-rock
 */

$fields              = get_field( 'imprint' );
$title               = get_field_value( $fields, 'title' );
$subtitle            = get_field_value( $fields, 'subtitle' );
$office_title        = get_field_value( $fields, 'office_title' );
$location            = get_field_value( $fields, 'location' );
$tel                 = get_field_value( $fields, 'tel' );
$email               = get_field_value( $fields, 'email' );
$management_title    = get_field_value( $fields, 'management_title' );
$management_subtitle = get_field_value( $fields, 'management_subtitle' );
$management_text     = get_field_value( $fields, 'management_text' );

?>

<div class="imprint container">
	<div class="imprint-wrapper">
		<h2 class="imprint-title"><?php echo esc_html( $title ); ?></h2>
		<p class="imprint-subtitle"><?php echo esc_html( $subtitle ); ?></p>
		<p class="imprint-title__small"><?php echo esc_html( $office_title ); ?></p>
		<div class="imprint-contacts">
		<p class="imprint-contact">
			<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M11.5 5.09229C9.02298 5.09229 7.00781 7.10564 7.00781 9.58042C7.00781 12.0552 9.02298 14.0686 11.5 14.0686C13.977 14.0686 15.9922 12.0552 15.9922 9.58042C15.9922 7.10564 13.977 5.09229 11.5 5.09229Z" fill="#E41019"/>
				<path fill-rule="evenodd" clip-rule="evenodd" d="M18.2337 2.80385C20.0327 4.59893 21.0234 6.98553 21.0234 9.52431C21.0234 12.0629 20.0327 14.4495 18.2337 16.2446L11.5 22.9638L4.76628 16.2446C2.9673 14.4495 1.97656 12.0629 1.97656 9.52431C1.97656 6.98553 2.9673 4.59893 4.76628 2.80385C6.56491 1.00895 8.9563 0.0205078 11.5 0.0205078C14.0437 0.0205078 16.4351 1.00895 18.2337 2.80385ZM5.66016 9.58024C5.66016 12.7975 8.27984 15.4148 11.5 15.4148C14.7202 15.4148 17.3398 12.7975 17.3398 9.58024C17.3398 6.36298 14.7202 3.74566 11.5 3.74566C8.27984 3.74566 5.66016 6.36298 5.66016 9.58024Z" fill="#E41019"/>
				<path d="M14.7244 21.6533L13.375 22.9998H23.0039V21.6533H14.7244Z" fill="#F4BC20"/>
				<path d="M0 21.6533V22.9998H9.6289L8.27949 21.6533H0Z" fill="#F4BC20"/>
			</svg>
			<?php echo esc_html( $location ); ?>
		</p>
		<p class="imprint-contact">
			<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M19.6376 3.35789C17.4699 1.19254 14.5799 0 11.5 0C8.42676 0 5.53793 1.19609 3.36555 3.36794C1.19308 5.53993 -0.00215334 8.42719 2.91237e-06 11.4979C0.00215916 14.5726 1.21312 17.4643 3.4098 19.6405C5.58536 21.7957 8.45515 22.9793 11.4999 22.9793C11.5303 22.9793 11.5608 22.9792 11.5913 22.9789C13.5808 22.9634 15.538 22.4317 17.2515 21.4412L16.5766 20.2757C15.0648 21.1497 13.3373 21.6188 11.5808 21.6325C8.86394 21.653 6.29913 20.6066 4.35873 18.6843C2.41891 16.7627 1.34959 14.2102 1.34766 11.4969C1.34577 8.78606 2.40094 6.23716 4.31884 4.3197C6.2366 2.40236 8.78694 1.34644 11.5 1.34644C17.097 1.34644 21.6514 5.89584 21.6523 11.4878C21.6527 13.7043 20.9506 15.8098 19.622 17.5764C19.5064 17.7301 19.3358 17.8223 19.1417 17.836C18.9454 17.8499 18.7527 17.7781 18.6136 17.6391L17.6969 16.7232L18.1039 16.3166L14.9274 13.143L13.6568 14.4124C11.0116 14.0563 8.93096 11.9775 8.57451 9.33469L9.84508 8.06527L6.66861 4.89166L4.91423 6.64446C4.74236 9.61781 5.79254 12.6485 8.06626 14.9202C10.34 17.1918 13.3734 18.2411 16.3495 18.0694L16.744 17.6753L17.6606 18.5911C18.076 19.0061 18.6504 19.2204 19.2366 19.1791C19.8176 19.1381 20.3508 18.8487 20.6994 18.3852C22.2049 16.3834 23.0004 13.9983 23 11.4876C22.9995 8.41045 21.8053 5.52328 19.6376 3.35789Z" fill="#E41019"/>
			</svg>
			
			<a href="tel:<?php echo $tel; ?>"><?php echo $tel; ?></a>
		</p>
		<p class="imprint-contact">
			<svg width="23" height="15" viewBox="0 0 23 15" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M0.679688 0.782715V2.38988L11.5032 8.21718L22.3267 2.38988V0.782715L0.679688 0.782715Z" fill="#E41019"/>
				<path d="M0.679688 3.82422V14.638H22.3267V3.82422L11.5032 9.68389L0.679688 3.82422Z" fill="#E41019"/>
			</svg>
			<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
		</p>
		</div>
		<p class="imprint-title__small"><?php echo esc_html( $management_title ); ?></p>
		<div class="imprint-management">
			<p class="imprint-management__text" ><?php echo esc_html( $management_subtitle ); ?></p>
			<p class="imprint-management__uppercase"><?php echo esc_html( $management_text ); ?></p>
		</div>
	</div>
</div>
