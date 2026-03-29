<?php
/**
 * Block Styles
 *
 * @package pixel_cyber_security
 * @since 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	function pixel_cyber_security_register_block_styles() {

		//Wp Block Padding Zero
		register_block_style(
			'core/group',
			array(
				'name'  => 'pixel-cyber-security-padding-0',
				'label' => esc_html__( 'No Padding', 'pixel-cyber-security' ),
			)
		);

		//Wp Block Post Author Style
		register_block_style(
			'core/post-author',
			array(
				'name'  => 'pixel-cyber-security-post-author-card',
				'label' => esc_html__( 'Theme Style', 'pixel-cyber-security' ),
			)
		);

		//Wp Block Button Style
		register_block_style(
			'core/button',
			array(
				'name'         => 'pixel-cyber-security-button',
				'label'        => esc_html__( 'Plain', 'pixel-cyber-security' ),
			)
		);

		//Post Comments Style
		register_block_style(
			'core/post-comments',
			array(
				'name'         => 'pixel-cyber-security-post-comments',
				'label'        => esc_html__( 'Theme Style', 'pixel-cyber-security' ),
			)
		);

		//Latest Comments Style
		register_block_style(
			'core/latest-comments',
			array(
				'name'         => 'pixel-cyber-security-latest-comments',
				'label'        => esc_html__( 'Theme Style', 'pixel-cyber-security' ),
			)
		);


		//Wp Block Table Style
		register_block_style(
			'core/table',
			array(
				'name'         => 'pixel-cyber-security-wp-table',
				'label'        => esc_html__( 'Theme Style', 'pixel-cyber-security' ),
			)
		);


		//Wp Block Pre Style
		register_block_style(
			'core/preformatted',
			array(
				'name'         => 'pixel-cyber-security-wp-preformatted',
				'label'        => esc_html__( 'Theme Style', 'pixel-cyber-security' ),
			)
		);

		//Wp Block Verse Style
		register_block_style(
			'core/verse',
			array(
				'name'         => 'pixel-cyber-security-wp-verse',
				'label'        => esc_html__( 'Theme Style', 'pixel-cyber-security' ),
			)
		);
	}
	add_action( 'init', 'pixel_cyber_security_register_block_styles' );
}
