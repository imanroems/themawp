<?php

require get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function pixel_cyber_security_register_recommended_plugins() {
	$plugins = array(
		array(
            'name'             => __( 'Video Popup Block by WPZOOM', 'pixel-cyber-security' ),
            'slug'             => 'wpzoom-video-popup-block',
            'required'         => false,
            'force_activation' => false,
        )
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'pixel_cyber_security_register_recommended_plugins' );