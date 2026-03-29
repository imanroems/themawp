<?php
/**
 * Block Patterns
 *
 * @package pixel_cyber_security
 * @since 1.0
 */

function pixel_cyber_security_register_block_patterns() {
	$pixel_cyber_security_block_pattern_categories = array(
		'pixel-cyber-security' => array( 'label' => esc_html__( 'Pixel Cyber Security', 'pixel-cyber-security' ) ),
		'pages' => array( 'label' => esc_html__( 'Pages', 'pixel-cyber-security' ) ),
	);

	$pixel_cyber_security_block_pattern_categories = apply_filters( 'pixel_cyber_security_pixel_cyber_security_block_pattern_categories', $pixel_cyber_security_block_pattern_categories );

	foreach ( $pixel_cyber_security_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'pixel_cyber_security_register_block_patterns', 9 );