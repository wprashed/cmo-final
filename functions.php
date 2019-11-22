<?php
/**
 * CMO functions and definitions
 *
 *
 * @package WordPress
 * @subpackage CMO
 * @since 1.0
 * @version 1.0
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

// Require Files

require_once( get_theme_file_path( "/inc/tgm.php" ) );
require_once( get_theme_file_path( "/inc/cmb.php" ) );
require_once( get_theme_file_path( "/options/opt-config.php" ) );
require_once( get_theme_file_path( "/inc/cmo-css.php" ) );
require_once( get_theme_file_path( "/inc/navwalker.php" ) );

if ( ! isset( $content_width ) ) $content_width = 900;

// Theme Support
function cmo_theme_setup() {
    load_theme_textdomain( "cmo", get_theme_file_path("/languages") );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "title-tag" );
    add_theme_support("custom-header");
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );
    add_theme_support("custom-background");
    register_nav_menu( "mainmenu", esc_html__( "Main Menu", "cmo" ) );
    register_nav_menu( "sidemenu", esc_html__( "Sidebar Menu", "cmo" ) );
    add_image_size( "cmo-home-square", 800, 400, true );
    add_image_size( "cmo-team-portrait", 368, 420, true );
    add_image_size( "cmo-team-portfolio", 333, 253, true );
    add_image_size( "cmo-case-lanscape", 970, 385, true );
    add_image_size( "cmo-case-portrait", 472, 319, true );
    add_image_size( "cmo-blog-grid", 370, 250, true );
}

add_action( "after_setup_theme", "cmo_theme_setup" );

// Assets Enqueue

function cmo_assets() {
    wp_enqueue_style( "bootstrap", get_theme_file_uri( "/assets/css/bootstrap.min.css" ), null, "1.0" );
    wp_enqueue_style( "bootstrap-grid", get_theme_file_uri( "/assets/css/bootstrap-grid.min.css" ), null, "1.0" );
    wp_enqueue_style( "cmo-owl.carousel", get_theme_file_uri( "/assets/css/owl.carousel.min.css" ), null, "1.0" );
    wp_enqueue_style( "cmo-owl.theme", get_theme_file_uri( "/assets/css/owl.theme.default.min.css" ), null, "1.0" );
    wp_enqueue_style( "cmo-animate", get_theme_file_uri( "/assets/css/animate.css" ), null, "1.0" );
    wp_enqueue_style( "cmo-nice-select", get_theme_file_uri( "/assets/css/nice-select.css" ), null, "1.0" );
    wp_enqueue_style( "cmo-magnific-popup", get_theme_file_uri( "/assets/css/magnific-popup.css" ), null, "1.0" );
    wp_enqueue_style( "font-awesome", get_theme_file_uri( "/assets/css/font-awesome.min.css" ), null, "1.0" );
    wp_enqueue_style( "cmo-style", get_theme_file_uri( "/assets/css/style.css" ), null, "1.0" );
    wp_enqueue_style( "cmo-responsive", get_theme_file_uri( "/assets/css/responsive.css" ), null, "1.0" );
    wp_enqueue_style( "cmo-root", get_stylesheet_uri(), null, 1.0 );
    
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
    wp_enqueue_script( "google-map-api", "//maps.googleapis.com/maps/api/js?key=", null, "1.0" );
    wp_enqueue_script( "cmo-counter", get_theme_file_uri( "/assets/js/counter-jquery.js" ), null, "1.0" );
    wp_enqueue_script( "cmo-scroll", get_theme_file_uri( "/assets/js/scroll-jquery.js" ), null, "1.0" );
    wp_enqueue_script( "cmo-waypoints", get_theme_file_uri( "/assets/js/waypoints.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "cmo-counterup", get_theme_file_uri( "/assets/js/jquery.counterup.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "cmo-popup", get_theme_file_uri( "/assets/js/magnific-popup.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "cmo-sidebar", get_theme_file_uri( "/assets/js/sidebar-jquery.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "bootstrap", get_theme_file_uri( "/assets/js/bootstrap.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "cmo-mixitup", get_theme_file_uri( "/assets/js/mixitup.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "nice-select", get_theme_file_uri( "/assets/js/jquery.nice-select.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "cmo-owl.carousel", get_theme_file_uri( "/assets/js/owl.carousel.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "cmo-wow", get_theme_file_uri( "/assets/js/wow.min.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "cmo-isotope", get_theme_file_uri( "/assets/js/isotope.js" ), array( "jquery" ), "1.0", true );
    wp_enqueue_script( "cmo-custom", get_theme_file_uri( "/assets/js/custom.js" ), array( "jquery" ), "1.0", true );
   
    
}

add_action( "wp_enqueue_scripts", "cmo_assets" );


function cmo_fonts_url(){

    $fonts_url = '';
    $rubik = _x( 'on','Rubik: on or off', 'cmo' );
    $poppins = _x( 'on','Poppins: on or off', 'cmo' );


    if ( 'off' !== $poppins || 'off' !== $pubik ) {
        $font_families = array();

        if ( 'off' !== $poppins ) {
            $font_families[] = 'Poppins:400,500,600,700,800,900';
        }
        if ( 'off' !== $rubik ) {
            $font_families[] = 'Rubik:300,300i,400,400i,500,500i,700,700i,900,900i';
        }

        $query_args = array(
            'family' => urlencode( implode( '|', $font_families ) ),
            'subset' => urlencode( 'latin,latin-ext,cyrillic-ext,cyrillic,vietnamese,greek,greek-ext' ),
        );
        $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
    }
    return esc_url_raw( $fonts_url );
}

//Adding Google fonts to the editor

function cmo_editor_styles() {
    $rubik = ( array( 'editor-style.css', '//fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i'));
    $poppins =( array( 'editor-style.css', '//fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900'));
    add_editor_style( $rubik, $poppins);

}
add_action( 'after_setup_theme', 'cmo_editor_styles' );

function cmo_custom_header_fonts() {
wp_enqueue_style( 'rubik-fonts','//fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i', array(), null );
wp_enqueue_style( 'poppins-fonts','//fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900', array(), null );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'cmo_custom_header_fonts' );


// Widget

function cmo_widgets() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar Widget', 'cmo' ),
        'id'            => 'sidebar',
        'description'   => esc_html__( 'Widgets in this area will be shown right sidebar.', 'cmo' ),
        'before_widget' => '<div id="%1$s" class="catagories %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Sinlge Service Page Sidebar Widget', 'cmo' ),
        'id'            => 'service-sidebar',
        'description'   => esc_html__( 'Widgets in this area will be shown right sidebar.', 'cmo' ),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget One', 'cmo' ),
        'id'            => 'footer-one',
        'description'   => esc_html__( 'Widgets in this area will be footer.', 'cmo' ),
        'before_widget' => '<div id="%1$s" class="nav-link %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Two', 'cmo' ),
        'id'            => 'footer-two',
        'description'   => esc_html__( 'Widgets in this area will be footer.', 'cmo' ),
        'before_widget' => '<div id="%1$s" class="nav-link %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Three', 'cmo' ),
        'id'            => 'footer-three',
        'description'   => esc_html__( 'Widgets in this area will be footer.', 'cmo' ),
        'before_widget' => '<div id="%1$s" class="nav-link %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer Widget Four', 'cmo' ),
        'id'            => 'footer-four',
        'description'   => esc_html__( 'Widgets in this area will be footer.', 'cmo' ),
        'before_widget' => '<div id="%1$s" class="nav-link %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ) );
}

add_action( "widgets_init", "cmo_widgets" );


// Pagination

function cmo_pagination() {
    global $wp_query;
    $links = paginate_links( array(
        'current'  => max( 1, get_query_var( 'paged' ) ),
        'total'    => $wp_query->max_num_pages,
        'type'     => 'list',
        'mid_size' => apply_filters( "cmo_pagination_mid_size", 3 )
    ) );
    $links = str_replace( "page-numbers", "pgn__num", $links );
    $links = str_replace( "<ul class='pgn__num'>", "<ul>", $links );
    $links = str_replace( "next pgn__num", "page-numbers", $links );
    $links = str_replace( "prev pgn__num", "page-numbers", $links );
    echo wp_kses_post($links);
}

/**
 * Configure one click demo
 */
require get_template_directory() . '/inc/demo_config.php';


/**
 * Custom except length
 */

function cmo_custom_excerpt_length( $length ) {
    return 16;
}
add_filter( 'excerpt_length', 'cmo_custom_excerpt_length', 999 );