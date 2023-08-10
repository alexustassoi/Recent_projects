<?php
/**
 * General template for pages
 *
 * @package WP-rock
 * @since 4.4.0
 */

get_header();
?>


<?php
do_action( 'wp_rock_before_page_content' );
?>
	
	<div class="container">
		<div class="privacy-policy-container">
			<h1 class="privacy-policy-container__title"><?php echo get_the_title(); ?></h1>
			<?php
			if ( have_posts() ) :
				// Start the loop.
				while ( have_posts() ) :
					the_post();
					the_content();
				endwhile;
			endif;
			
			do_action( 'wp_rock_after_page_content' );
			?>
		</div>
	</div>

<?php
get_footer();
