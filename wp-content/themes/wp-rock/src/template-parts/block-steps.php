<?php

/**
 * Block - Steps
 *
 * @package WP-rock
 */

$steps = get_field( 'steps' );
?>

<div class="steps">
	<div class="container">
		<div class="steps-container">
			<?php
			if ( is_array( $steps ) ):
				foreach ( $steps as $key => $step ):
					?>
					<div class="steps-card">
						<span class="steps-card__number">
							<?php echo esc_html( $key + 1 ); ?>
							<svg class="steps-card__icon"
							     width="130"
							     height="132"
							     viewBox="0 0 130 132"
							     fill="none"
							     xmlns="http://www.w3.org/2000/svg">
								<path opacity="0.0457749" fill-rule="evenodd" clip-rule="evenodd"
								      d="M0.386719 132H87.3867L129.999 66L87.3867 0H0.386719L42.9987 66L0.386719 132Z"
								      fill="white"/>
							</svg>

						</span>
						<p class="steps-card__text">
							<?php echo $step[ 'text' ]; ?>
						</p>
					</div>
				<?php
				endforeach;
			endif;
			?>
		</div>
	</div>
</div>
