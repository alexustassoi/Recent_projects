<?php
/**
 *  Custom ACF Gutenberg blocks.
 *
 *  @package WP-rock
 *  @since 4.4.0
 */

/**
 * Registering ACF blocks.
 */
class WP_Rock_Blocks {

    /**
     * Array with blocks defining.
     *
     * @var array|array[]
     */
    protected array $blocks = array(
        'custom-classic' => array(
            'title' => 'Custom classic block',
            'description' => '',
            'template' => 'src/template-parts/block-custom-classic.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'hero' => array(
            'title' => 'Hero block',
            'description' => '',
            'template' => 'src/template-parts/block-hero.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'welcomes' => array(
            'title' => 'Welcomes block',
            'description' => '',
            'template' => 'src/template-parts/block-welcomes.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'advantages' => array(
            'title' => 'Advantages block',
            'description' => '',
            'template' => 'src/template-parts/block-advantages.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'our-offer' => array(
            'title' => 'Our Offer block',
            'description' => '',
            'template' => 'src/template-parts/block-our-offer.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'our-industries' => array(
            'title' => 'Our Industries block',
            'description' => '',
            'template' => 'src/template-parts/block-our-industries.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'our-directions' => array(
            'title' => 'Our Directions block',
            'description' => '',
            'template' => 'src/template-parts/block-our-directions.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'top-banner-info' => array(
	        'title' => 'Top banner info',
	        'description' => '',
	        'template' => 'src/template-parts/block-top-banner-info.php',
	        'post_types' => array( 'post', 'page' ),
        ),
        'steps' => array(
	        'title' => 'Steps',
	        'description' => '',
	        'template' => 'src/template-parts/block-steps.php',
	        'post_types' => array( 'post', 'page' ),
        ),
        'industries-slider' => array(
	        'title' => 'Industries slider',
	        'description' => '',
	        'template' => 'src/template-parts/block-industries-slider.php',
	        'post_types' => array( 'post', 'page' ),
        ),
        'information-with-image' => array(
	        'title' => 'Information with image',
	        'description' => '',
	        'template' => 'src/template-parts/block-information-with-image.php',
	        'post_types' => array( 'post', 'page' ),
        ),
        'value-for-you' => array(
	        'title' => 'Value For You',
	        'description' => '',
	        'template' => 'src/template-parts/block-value-for-you.php',
	        'post_types' => array( 'post', 'page' ),
        ),
        'our-offer-small' => array(
	        'title' => 'Our Offer small',
	        'description' => '',
	        'template' => 'src/template-parts/block-our-offer-small.php',
	        'post_types' => array( 'post', 'page' ),
        ),
        'news' => array(
            'title' => 'News block',
            'description' => '',
            'template' => 'src/template-parts/block-news.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'ask-question' => array(
            'title' => 'Ask a question block',
            'description' => '',
            'template' => 'src/template-parts/block-ask-question.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'reviews' => array(
            'title' => 'Reviews block',
            'description' => '',
            'template' => 'src/template-parts/block-reviews.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'imprint' => array(
	        'title' => 'Imprint block',
	        'description' => '',
	        'template' => 'src/template-parts/block-imprint.php',
	        'post_types' => array( 'post', 'page' ),
        ),
        'services-hero' => array(
            'title' => 'Services hero block',
            'description' => '',
            'template' => 'src/template-parts/block-services-hero.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'services-items' => array(
            'title' => 'Services items block',
            'description' => '',
            'template' => 'src/template-parts/block-services-items.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'benefits' => array(
            'title' => 'Benefits block',
            'description' => '',
            'template' => 'src/template-parts/block-benefits.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'opening-companies' => array(
            'title' => 'Opening companies block',
            'description' => '',
            'template' => 'src/template-parts/block-opening-companies.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'contact-us' => array(
            'title' => 'Contact us block',
            'description' => '',
            'template' => 'src/template-parts/block-contact-us.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'our-service' => array(
            'title' => 'Our service block',
            'description' => '',
            'template' => 'src/template-parts/block-our-service.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'additional-info' => array(
            'title' => 'Additional info block',
            'description' => '',
            'template' => 'src/template-parts/block-additional-info.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'advantages-list' => array(
            'title' => 'Advantages list block',
            'description' => '',
            'template' => 'src/template-parts/block-advantages-list.php',
            'post_types' => array( 'post', 'page' ),
        ),
        'vacancies' => array(
            'title' => 'Vacancies',
            'description' => '',
            'template' => 'src/template-parts/block-vacancies.php',
            'post_types' => array( 'post', 'page' ),
        ),
    );
    /**
     * List of Allowed blocks
     * core/freeform  - it's standard WYSIWYG.
     *
     * @var string[]
     */
    protected array $allowed = array( 'core/freeform' );


    /**
     *  Construct of the class
     */
    public function __construct() {
         add_action( 'init', array( $this, 'add_custom_blocks' ) );
        add_filter( 'allowed_block_types_all', array( $this, 'filter_allowed_blocks' ), 10, 2 );
    }

    /**
     * Function for `allowed_block_types_all` filter-hook.
     *
     * @param bool|string[]           $allowed_block_types Array of block type slugs, or boolean to enable/disable all.
     * @param WP_Block_Editor_Context $editor_context      The current block editor context.
     *
     * @return bool|string[]
     */
    public function filter_allowed_blocks( array|bool $allowed_block_types, WP_Block_Editor_Context $editor_context ): array|bool {

        if ( ! empty( $editor_context->post ) ) {
            $allowed = array_map( array( $this, 'add_prefix' ), array_keys( $this->blocks ) );

            if ( ! empty( $this->allowed ) ) {
                foreach ( $this->allowed as $block ) {
                    $allowed[] = $block;
                }
            }

            return $allowed;
        }
        return $allowed_block_types;
    }

    /**
     * Just adding prefix to blocks.
     *
     * @param string $value  - name of block.
     * @return string
     */
    public function add_prefix( string $value ) : string {
        return 'acf/' . $value;
    }

    /**
     * Final registration blocks
     *
     * @return void
     */
    public function add_custom_blocks(): void {
        if ( function_exists( 'acf_register_block_type' ) ) {
            foreach ( $this->blocks as $id => $block ) {

                $title = $block['title'];
                $description = $block['description'];

                $args = array(
                    'name'              => $id,
                    'title'             => __( $title, 'headless_wp' ),
                    'description'       => __( $description, 'headless_wp' ),
                    'render_template'   => $block['template'],
                    'category'          => 'layout',
                    'example'            => array(
                        'attributes' => array(
                            'data' => array( 'is_example' => true ),
                        ),
                    ),

                );
                if ( array_key_exists( 'post_types', $block ) ) {
                    $args['post_types'] = $block['post_types'];
                }

                acf_register_block_type( $args );
            }
        }
    }
}

new WP_Rock_Blocks();
