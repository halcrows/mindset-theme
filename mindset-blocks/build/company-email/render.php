<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>
<div <?php echo get_block_wrapper_attributes(); ?>>
	<?php if ( $attributes[ 'svgIcon' ] ) : ?>
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" role="img" aria-label="Email Icon">
			<path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/>
		</svg>
	<?php endif; ?>
	<p>
		<a href="mailto:<?php echo esc_attr( get_post_meta( 14, 'company_email', true ) ); ?>">
			<?php echo esc_html( get_post_meta( 14, 'company_email', true ) ); ?>
		</a>
	</p>
</div>