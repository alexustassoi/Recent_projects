<?php
	$group = get_field('social_responsibility');
	$title = get_field_value($group, 'title');
	$subtitle = get_field_value($group, 'subtitle');
	$cards = get_field_value($group, 'cards');
?>

<div class="social-resp">
	<svg class="social-resp__bg" xmlns="http://www.w3.org/2000/svg" width="948" height="865" viewBox="0 0 948 865" fill="none">
		<path opacity="0.694912" fill-rule="evenodd" clip-rule="evenodd" d="M947.797 0H585.426L0.819763 865H364.291L947.797 0Z" fill="white"/>
	</svg>
	<div class="container social-resp__wrapper">
		<div class="social-resp__top">
			<h2 class="social-resp__title">
				<?php echo $title; ?>
			</h2>
			<p class="social-resp__subtitle">
				<?php echo $subtitle; ?>
			</p>
		</div>
		<?php if (is_array($cards)) { ?>
		<div class="social-resp__cards">
			<?php foreach ($cards as $card) { ?>
			<div class="social-resp-card">
				<?php if ($card['image']) { ?>
				<figure class="social-resp-card__figure">
					<img class="social-resp-card__image"
					     src="<?php echo $card['image'] ?>"
					     alt="image">
					<svg class="social-resp-card__icon" width="146" height="206" viewBox="0 0 146 206" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path opacity="0.558891" fill-rule="evenodd" clip-rule="evenodd" d="M0.167969 206H78.484L145.105 103L78.484 0H0.167969L66.7889 103L0.167969 206Z" fill="#E41019"/>
					</svg>
				
				</figure>
				<?php } ?>
				<h4 class="social-resp-card__title">
					<?php echo $card['title']; ?>
				</h4>
				<p class="social-resp-card__subtitle">
					<?php echo $card['text']; ?>
				</p>
				<p></p>
			</div>
			<?php } ?>
		</div>
		<?php } ?>
	</div>
</div>
