<?php
/**
 * Registers the block(s) metadata from the `blocks-manifest.php` and registers the block type(s)
 * based on the registered block metadata. Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://make.wordpress.org/core/2025/03/13/more-efficient-block-type-registration-in-6-8/
 * @see https://make.wordpress.org/core/2024/10/17/new-block-type-registration-apis-to-improve-performance-in-wordpress-6-7/
 */
function mindset_blocks_mindset_blocks_block_init() {
	wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
}
add_action( 'init', 'mindset_blocks_mindset_blocks_block_init' );

/**
 * Registers the custom fields for some blocks.
 *
 * @see https://developer.wordpress.org/reference/functions/register_post_meta/
 */
function mindset_register_custom_fields() {
	register_post_meta(
		'page',
		'company_email',
		array(
			'type'         => 'string',
			'show_in_rest' => true,
			'single'       => true
		)
	);

	register_post_meta(
		'page',
		'company_address',
		array(
			'type'         => 'string',
			'show_in_rest' => true,
			'single'       => true
		)
	);
}
add_action( 'init', 'mindset_register_custom_fields' );

// Wrapper function for all PHP-only blocks
function mindset_register_php_blocks() {

	// Register the Service Posts PHP-only block.
	register_block_type(
		'mindset-blocks/service-posts',
		array(
			'title'           => __( 'Service Posts', 'mindset-blocks' ),
			'icon'            => 'admin-tools',
			'category'        => 'text',
			'description'     => __( 'Displays all Service posts.', 'mindset-blocks' ),
			'keywords'        => array( 'services', 'service', 'posts' ),
			'render_callback' => 'mindset_render_service_posts',
			'supports'        => array(
				'autoRegister' => true
			)
		)
	);
}

// Hook into 'init' to register the PHP-only blocks.
add_action( 'init', 'mindset_register_php_blocks' );

/**
 * Renders the Service Posts block.
 */
function mindset_render_service_posts( $attributes ) {
	ob_start();
	?>
	<div <?php echo get_block_wrapper_attributes(); ?>>
		<?php

		// Query all Service posts alphabetically to create in-page navigation.
		$args = array(
			'post_type'      => 'fwd-service',
			'posts_per_page' => -1,
			'orderby'        => 'title',
			'order'          => 'ASC',
		);

		$service_query = new WP_Query( $args );

		// Output a navigation link for each Service post.
		if ( $service_query->have_posts() ) :
			?>
			<nav class="service-posts-navigation">
				<?php
				while ( $service_query->have_posts() ) :
					$service_query->the_post();
					?>
					<a href="#<?php echo esc_attr( get_the_ID() ); ?>">
						<?php the_title(); ?>
					</a>
					<?php
				endwhile;
				?>
			</nav>
			<?php

			// Restore the original post data after the navigation query.
			wp_reset_postdata();
		endif;


// Get all Service Category terms.
$terms = get_terms(
	array(
		'taxonomy' => 'fwd-service-category',
	)
);

// Loop through each Service Category.
if ( $terms && ! is_wp_error( $terms ) ) :
	foreach ( $terms as $term ) :
		?>

		<h2><?php echo esc_html( $term->name ); ?></h2>

		<?php

		// Query Service posts assigned to the current taxonomy term.
		$args = array(
			'post_type'      => 'fwd-service',
			'posts_per_page' => -1,
			'orderby'        => 'title',
			'order'          => 'ASC',
			'tax_query'      => array(
				array(
					'taxonomy' => 'fwd-service-category',
					'field'    => 'slug',
					'terms'    => $term->slug,
				),
			),
		);

		$service_query = new WP_Query( $args );

		// Output each Service post within the current taxonomy term.
		if ( $service_query->have_posts() ) :
			while ( $service_query->have_posts() ) :
				$service_query->the_post();
				?>

				<article id="<?php echo esc_attr( get_the_ID() ); ?>">
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
				</article>

				<?php
			endwhile;

			// Restore the original post data after each taxonomy query.
			wp_reset_postdata();
		endif;

	endforeach;
endif;

		?>
	</div>
	<?php
	return ob_get_clean();
}