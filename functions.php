<?php
/**
 * Pixel Cyber Security functions and definitions
 *
 * @package pixel_cyber_security
 * @since 1.0
 */

if ( ! function_exists( 'pixel_cyber_security_support' ) ) :
	function pixel_cyber_security_support() {

		load_theme_textdomain( 'pixel-cyber-security', get_template_directory() . '/languages' );

		add_theme_support( 'custom-background', apply_filters( 'pixel_cyber_security_custom_background', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support('woocommerce');

		// Enqueue editor styles.
		add_editor_style(get_stylesheet_directory_uri() . '/assets/css/editor-style.css');

		define('PIXEL_CYBER_SECURITY_FREE_BUY_NOW',__('https://www.themepixels.net/products/pixel-cyber-security/','pixel-cyber-security'));
		define('PIXEL_CYBER_SECURITY_BUY_NOW',__('https://www.themepixels.net/products/ethical-hacking-wordpress-theme/','pixel-cyber-security'));
		define('PIXEL_CYBER_SECURITY_LIVE_DEMO',__('https://themepixels.net/demo-site/pixel-cyber-security/','pixel-cyber-security'));
		define('PIXEL_CYBER_SECURITY_FREE_DOC',__('https://www.themepixels.net/docs/pixel-cyber-security-free/','pixel-cyber-security'));
		define('PIXEL_CYBER_SECURITY_BUNDLE',__('https://www.themepixels.net/products/wp-theme-bundle/','pixel-cyber-security'));
		define('PIXEL_CYBER_SECURITY_THEME_SUPPORT',__('https://wordpress.org/support/theme/pixel-cyber-security','pixel-cyber-security'));

    	require_once get_theme_file_path( '/inc/customizer.php' );
	}
endif;

add_action( 'after_setup_theme', 'pixel_cyber_security_support' );

if ( ! function_exists( 'pixel_cyber_security_styles' ) ) :
	function pixel_cyber_security_styles() {
		// Register theme stylesheet.
		$pixel_cyber_security_theme_version = wp_get_theme()->get( 'Version' );

		$pixel_cyber_security_version_string = is_string( $pixel_cyber_security_theme_version ) ? $pixel_cyber_security_theme_version : false;
		wp_enqueue_style(
			'pixel-cyber-security-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$pixel_cyber_security_version_string
		);

		wp_style_add_data('pixel-cyber-security', 'rtl', 'replace');

		wp_enqueue_style( 'dashicons' );

		wp_enqueue_style( 'animate-css', esc_url(get_template_directory_uri()).'/assets/css/animate.css' );

		wp_enqueue_style( 'owl.carousel-css', esc_url(get_template_directory_uri()).'/assets/css/owl.carousel.css' );

		wp_enqueue_script( 'jquery-wow', esc_url(get_template_directory_uri()) . '/assets/js/wow.js', array('jquery') );

		wp_enqueue_style( 'owl.carousel-style', get_template_directory_uri().'/assets/css/owl.carousel.css' );
        
        // Theme fonts (Comic Neue)
        wp_enqueue_style( 'pixel-cyber-security-fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), $pixel_cyber_security_version_string );
	    wp_enqueue_script( 'owl.carousel-js', get_template_directory_uri(). '/assets/js/owl.carousel.js', array('jquery') ,'',true);
	    wp_enqueue_script( 'pixel-cyber-security-custom-scripts', get_template_directory_uri() . '/assets/js/custom-script.js', array('jquery'),'' ,true );

		 //font-awesome
		 wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/inc/fontawesome/css/all.css'
		 	, array(), '6.7.0' );
	}
endif;

add_action( 'wp_enqueue_scripts', 'pixel_cyber_security_styles' );


// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';

// Add block styles
require get_template_directory() . '/inc/block-styles.php';

// Block Filters
require get_template_directory() . '/inc/block-filters.php';

// Svg icons
require get_template_directory() . '/inc/icon-function.php';

// TGM
require_once get_template_directory() . '/inc/tgm/tgm.php';

/**
* GET START.
*/
require get_template_directory() . '/themeinfo/pixel_cyber_security_themeinfo_page.php';

// NOTICE FUNCTION
function pixel_cyber_security_activation_notice() {
    if (get_option('pixel_cyber_security_notice_dismissed')) {
        return;
    }

    if (isset($_GET['page']) && $_GET['page'] === 'pixel-cyber-security-themeinfo-page') {
        return;
    }
    ?>
    <div class="updated notice notice-theme-info-class is-dismissible" data-notice="theme_info">
        <div class="pixel-cyber-security-theme-info-notice clearfix">
            <div class="pixel-cyber-security-theme-notice-content">
				<div class="notice-content">
					<div class="inner-notice-contetn">
						<h2 class="pixel-cyber-security-notice-h2">
							<?php
							printf(
								/* translators: 1: Theme name */
								esc_html__('Hello! Thank you for choosing our %1$s!', 'pixel-cyber-security'), '<strong>' . esc_html(wp_get_theme()->get('Name')) . '</strong>'
							);
							?>
						</h2>

						<p class="pixel-cyber-security-notice-p">
							<?php
							printf(
								/* translators: 1: Theme name */
								esc_html__('%1$s has been successfully installed and is ready for use. The links below will help you get started.', 'pixel-cyber-security'), '<strong>' . esc_html(wp_get_theme()->get('Name')) . '</strong>'
							);
							?>
						</p>
					</div>
					<div class="inner-notice-buttons">
						<a class="pixel-cyber-security-btn-theme-info button button-primary" target="_blank" href="<?php echo esc_url(admin_url('themes.php?page=pixel-cyber-security-themeinfo-page')); ?>" id="pixel-cyber-security-themeinfo-button"> <?php esc_html_e('Pixel Cyber Security Theme Information', 'pixel-cyber-security') ?></a>
						
						<a class="pixel-cyber-security-btn-theme-info button button-primary buy-noww" target="_blank" href="<?php echo esc_url(PIXEL_CYBER_SECURITY_BUY_NOW); ?>" id="pixel-cyber-security-bundle-button"> <?php esc_html_e('Buy Now', 'pixel-cyber-security') ?></a>
						<a class="pixel-cyber-security-btn-theme-info button button-primary bundlee" target="_blank" href="<?php echo esc_url(PIXEL_CYBER_SECURITY_BUNDLE); ?>" id="pixel-cyber-security-bundle-button"> <?php esc_html_e('Get All Themes', 'pixel-cyber-security') ?></a>
						<a class="pixel-cyber-security-btn-theme-info button button-primary live-demoo" target="_blank" href="<?php echo esc_url(PIXEL_CYBER_SECURITY_LIVE_DEMO); ?>" id="pixel-cyber-security-bundle-button"> <?php esc_html_e('Live Demo', 'pixel-cyber-security') ?></a>
					</div>
				</div>
				<div class="notice-image">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/bundle-img.png' ); ?>" alt="<?php esc_attr_e( 'Theme Screenshot', 'pixel-cyber-security' ); ?>">
				</div>
            </div>
        </div>
    </div>
    <?php
}

add_action('admin_notices', 'pixel_cyber_security_activation_notice');

add_action('wp_ajax_pixel_cyber_security_dismiss_notice', 'pixel_cyber_security_dismiss_notice');

function pixel_cyber_security_notice_status() {
    delete_option('pixel_cyber_security_notice_dismissed');
}
add_action('after_switch_theme', 'pixel_cyber_security_notice_status');

function pixel_cyber_security_dismiss_notice() {
    update_option('pixel_cyber_security_notice_dismissed', true);
    wp_send_json_success();
}

function pixel_cyber_security_admin_enqueue_scripts(){
	wp_enqueue_style('pixel-cyber-security-admin-style', esc_url( get_template_directory_uri() ) . '/assets/css/pixel-cyber-security-notice.css');
	wp_enqueue_script('pixel-cyber-security-dismiss-notice-script', get_stylesheet_directory_uri() . '/assets/js/pixel-cyber-security-notice.js', array('jquery'), null, true);
}
add_action( 'admin_enqueue_scripts', 'pixel_cyber_security_admin_enqueue_scripts' );