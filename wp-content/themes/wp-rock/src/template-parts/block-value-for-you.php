<?php
/**
 * Block - Value for you
 *
 * @package WP-rock
 */

$group = get_field( 'value_for_you' );
$title = get_field_value( $group, 'title' );
$text  = get_field_value( $group, 'text' );
$link  = get_field_value( $group, 'link' );
$posts = get_field_value( $group, 'posts' );

?>

<div class="for-you">
	<div class="container">
		<div class="for-you__wrapper">
			<div class="for-you__left">
				<svg class="for-you__line" width="901" height="823" viewBox="0 0 901 823" fill="none"
				     xmlns="http://www.w3.org/2000/svg">
					<path opacity="0.0278378" fill-rule="evenodd" clip-rule="evenodd"
					      d="M900.25 0H555.76L0.000915527 823H345.537L900.25 0Z" fill="#F8F8F8"/>
				</svg>
				<?php if ( $title ) : ?>
					<h2 class="for-you__title">
						<?php echo esc_html( $title ); ?>
					</h2>
				<?php endif; ?>
				
				<?php if ( $text ) : ?>
					<div class="for-you__text">
						<?php echo $text; ?>
					</div>
				<?php endif; ?>
				
				<?php if ( is_array( $link ) ) :
					$array_link = array(
						'url'    => $link[ 'url' ],
						'target' => $link[ 'target' ],
						'title'  => $link[ 'title' ],
						'style'  => 'white',
					);
					echo esc_html( get_template_part( 'src/template-parts/components/button-with-arrow', null, $array_link ) );
				endif; ?>
			
			</div>
			<div class="for-you__right">
				<?php if ( is_array( $posts ) ): ?>
					<?php foreach ( $posts as $post ): ?>
						<div class="for-you-card">
							<a href="<?php echo esc_url( $post[ 'link' ][ 'url' ] ); ?>">
								<figure class="for-you-card__figure">
									<img class="for-you-card__image" src="<?php echo esc_url( $post[ 'image' ] ); ?>"
									     alt="image">
									<svg class="for-you-card__arrow" width="119" height="169" viewBox="0 0 119 169"
									     fill="none" xmlns="http://www.w3.org/2000/svg">
										<path opacity="0.558891" fill-rule="evenodd" clip-rule="evenodd"
										      d="M0.558594 169H64.5586L119.001 84.5L64.5586 0H0.558594L55.0012 84.5L0.558594 169Z"
										      fill="#E41019"/>
									</svg>
								</figure>
								<h4 class="for-you-card__title">
									<?php echo esc_html( $post[ 'link' ][ 'title' ] ); ?>
								</h4>
							</a>
							<p class="for-you-card__description">
								<?php echo esc_html( $post[ 'description' ] ); ?>
							</p>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>