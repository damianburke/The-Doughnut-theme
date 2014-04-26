<?php 
//Add support for WordPress 3.0's custom menus
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Main Navigation' ));
}
add_action( 'init', 'register_my_menu' ); 
//Add Thumbnail Support
add_theme_support('post-thumbnails');
//Enable post and comments RSS feed links to head
add_theme_support( 'automatic-feed-links' );
//Add Woocommerce Support
add_theme_support( 'woocommerce' );
//Add support for WordPress 3.4+ custom background
global $wp_version;
if ( version_compare( $wp_version, '3.4', '>=' ) ) 
	add_theme_support( 'custom-background' ); 
else
	add_custom_background();
//Remove generated elements in wp_head
remove_action('wp_head', 'wp_generator');
remove_action( 'wp_head', 'wlwmanifest_link' ) ; 
remove_action( 'wp_head', 'rsd_link' ) ;
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
 //Show Doughnut logo on admin login
add_action( 'login_head', 'ilc_custom_login');
function ilc_custom_login() {
	echo '<style type="text/css">
	h1 a { background-image:url('. get_stylesheet_directory_uri() . '/images/doughnut-logo-300.png' . ') !important; margin-bottom: 10px; }
	padding: 20px;}
	</style>
	<script type="text/javascript">window.onload = function(){document.getElementById("login").getElementsByTagName("a")[0].href = "'. home_url() . '";document.getElementById("login").getElementsByTagName("a")[0].title = "Go to site";}</script>';
}
// Remove woocommerce scripts on unnecessary pages 
function woocommerce_de_script() { if (function_exists( 'is_woocommerce' )) { if (!is_woocommerce() && !is_cart() && !is_checkout() && !is_account_page() ) { 
// if we're not on a Woocommerce page, dequeue all of these scripts
wp_dequeue_script('wc-add-to-cart'); wp_dequeue_script('jquery-blockui'); wp_dequeue_script('jquery-placeholder'); wp_dequeue_script('woocommerce'); wp_dequeue_script('jquery-cookie'); wp_dequeue_script('wc-cart-fragments'); } } } add_action( 'wp_print_scripts', 'woocommerce_de_script', 100 );

add_action( 'wp_enqueue_scripts', 'remove_woocommerce_generator', 99 ); function remove_woocommerce_generator() { if (function_exists( 'is_woocommerce' )) { if (!is_woocommerce()) { 
// if we're not on a woo page, remove the generator tag
remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) ); } } }

// remove woocommerce styles, then add woo styles back in on woo-related pages
add_filter( 'woocommerce_enqueue_styles', '__return_false' );
// completely removes all woo styles
function child_manage_woocommerce_css(){ if (function_exists( 'is_woocommerce' )) { if (is_woocommerce()) { 
// this adds the styles back on woocommerce pages. If you're using a custom script, you could remove these and enter in the path to your own CSS file (if different from your basic style.css file)
wp_register_style( 'woocommerce-layout', plugins_url().'/woocommerce/assets/css/woocommerce-layout.css' ); wp_register_style( 'woocommerce-smallscreen', plugins_url().'/woocommerce/assets/css/woocommerce-smallscreen.css' ); wp_register_style( 'woocommerce-general', plugins_url().'/woocommerce/assets/css/woocommerce.css' ); if ( class_exists( 'woocommerce' ) ) { wp_enqueue_style( 'woocommerce-layout' ); wp_enqueue_style( 'woocommerce-smallscreen' ); wp_enqueue_style( 'woocommerce-general' ); } } } } add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_css' );
//remove jquery and jquery-migrate from Wordprtess head and add it to /body 
function optimize_jquery() {
if (!is_admin()) {
wp_deregister_script('jquery');
wp_deregister_script('jquery-migrate.min');
wp_deregister_script('comment-reply.min');
$protocol='http:';
if($_SERVER['HTTPS']=='on') {
$protocol='https:';
}
wp_register_script('jquery', $protocol.'//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js', false, '3.6', true);

wp_enqueue_script('jquery');
}
}
add_action('template_redirect', 'optimize_jquery');
?>