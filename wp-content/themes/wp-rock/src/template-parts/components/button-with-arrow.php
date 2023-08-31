<?php

if ( ! isset( $args ) ) {
	return;
}

$url    = get_field_value( $args, 'url' );
$title  = get_field_value( $args, 'title' );
$target = get_field_value( $args, 'target' );
$style  = get_field_value( $args, 'style' );

if ( $url && $title )
?>

<a href="<?php echo esc_url( $url ); ?>"
   target="<?php echo esc_html( $target ); ?>"
   class="btn-default js-open-popup-activator <?php echo esc_html( $style ); ?>"
>
	<?php echo $title; ?>

	<svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
		<circle cx="11.5" cy="11.5" r="11.5" fill="#E41019"/>
		<path fill-rule="evenodd" clip-rule="evenodd" d="M9 6H10.3345L14 11.5L10.3345 17H9L12.6655 11.5L9 6Z"
		      fill="white"/>
	</svg>
</a>
