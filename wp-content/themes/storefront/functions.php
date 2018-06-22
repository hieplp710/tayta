<?php
/**
 * Storefront engine room
 *
 * @package storefront
 */

/**
 * Assign the Storefront version to a var
 */
$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version' => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';

if ( class_exists( 'Jetpack' ) ) {
	$storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce = require 'inc/woocommerce/class-storefront-woocommerce.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';

	require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0.0', '>=' ) ) {
		require 'inc/nux/class-storefront-nux-starter-content.php';
	}
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */

function wpb_widgets_init() {
	register_sidebar( array(
		'name' => 'Header Widget',
		'id' => 'header-widget',
		'before_widget' => '<div class="hw-widget">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="hw-title">',
		'after_title' => '</h2>',
		));
    register_sidebar(
        array(
            'name' => 'Header Below Widget',
            'id' => 'header-bl-widget',
            'before_widget' => '<div class="hw-bl-widget">',
            'after_widget' => '</div>',
            'before_title' => '<div class="hw-bl-title">',
            'after_title' => '</div>',
        ));

    register_sidebar(
        array(
            'name' => 'Full width Header Below Widget',
            'id' => 'fw-header-bl-widget',
            'before_widget' => '<div class="fw-hw-bl-widget">',
            'after_widget' => '</div>',
            'before_title' => '<div class="fw-hw-bl-title">',
            'after_title' => '</div>',
        ));
}
add_action( 'widgets_init', 'wpb_widgets_init' );
//<div class="video-intro">
//[fvplayer src="http://tayta.loc/wp-content/uploads/2018/05/12-điều-cần-biết-về-Honda-Future-125-FI-2018.mp4" width="1280" height="720"]
//</div>
function auto_login_new_user( $user_id ) {
    wp_set_current_user($user_id);
    wp_set_auth_cookie($user_id);
    // You can change home_url() to the specific URL,such as
    //wp_redirect( 'http://www.wpcoke.com' );
    wp_redirect( home_url() );
    exit;
}
add_action( 'user_register', 'auto_login_new_user' );


add_action( 'woocommerce_product_query', '_hide_products_category_shop' );

function _hide_products_category_shop( $q ) {

    $tax_query = (array) $q->get( 'tax_query' );

    $tax_query[] = array(
        'taxonomy' => 'product_cat',
        'field' => 'slug',
        'terms' => array( 'sach-popup-ve-danh-lam-thang-canh', 'bo-suu-tam-kien-truc', 'bo-suu-tap-kien-chua-vn', 'sa-ban-kinh-thanh-hue' ), // Category slug here
        'operator' => 'NOT IN'
    );


    $q->set( 'tax_query', $tax_query );

}