<?php
$group = get_field( 'history' );
$title = get_field_value( $group, 'title' );
$years = get_field_value( $group, 'years' )
?>

<div class="history">
	<div class="container">
		<h2 class="history-title"><?php echo $title; ?></h2>
		<?php if ( is_array( $years ) ) { ?>
			<ul class="history-list">
				<?php foreach ( $years as $year ) { ?>
					<li class="history-item">
						<div class="history-item__icon">
							<svg width="42" height="41" viewBox="0 0 42 41" fill="none"
							     xmlns="http://www.w3.org/2000/svg">
								<circle cx="20.5" cy="20.5" r="20.5" stroke="#E41019"/>
								<circle opacity="0.404986" cx="20.5" cy="20.5" r="13.5" fill="#E41019"/>
								<circle cx="20.5" cy="20.5" r="6.5" fill="#E41019"/>
							</svg>
							<span class="history-item__year">
								<?php echo $year[ 'year' ]; ?>
							</span>
						</div>
						<p class="history-item__text">
							<?php echo $year[ 'text' ]; ?>
						</p>
					</li>
				<?php } ?>
			</ul>
		<?php } ?>
	</div>
</div>
