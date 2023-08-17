<?php
$labels = get_field( 'counters' );

if ( is_array( $labels ) ) {
	?>
	
	<div class="container counters">
		<div class="counters-container">
			<?php foreach ( $labels as $label ) { ?>
				<div class="counters-item">
					<svg class="counters-item__icon" width="267" height="229" viewBox="0 0 267 229" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M33 15H122.543L267 229H177.186L33 15Z" fill="#F8F8F8"/>
						<path d="M144.452 213.5L0.939783 0.5H89.2769L233.059 213.5H144.452Z" stroke="#F4BC20"/>
					</svg>
					
					<div class="counters-item__wrapper">
						<span class="counters-item__num">
							<?php echo $label[ 'number' ]; ?>+
						</span>
							<span class="counters-item__label">
							<?php echo $label[ 'text' ]; ?>
						</span>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
<?php } ?>
