<?php

add_action('wp_enqueue_scripts', 'enqueue_itriples_styles');

function enqueue_itriples_styles(){
    if (is_page( 'Conferences') ){
    wp_register_style( 'conference-map-style', get_stylesheet_directory_uri().'/assets/css/conference-maps.css');
    wp_enqueue_style( 'conference-map-style');  

    }

	wp_register_style( 'animate-css', get_stylesheet_directory_uri().'/assets/css/animate.css');
	wp_register_style( 'font-awesome', get_stylesheet_directory_uri().'/assets/css/fontawesome-all.min.css');
	wp_register_style( 'hover', get_stylesheet_directory_uri().'/assets/css/hover.css');
	wp_register_style('balthazar-font', 'https://fonts.googleapis.com/css?family=Balthazar');
	wp_register_style('animate-on-scroll-css', get_stylesheet_directory_uri().'/assets/aos/aos.css');
    wp_register_style('lux-bootswatch', get_stylesheet_directory_uri().'/assets/css/lux-bootswatch.css');
    wp_register_style('owl-carousel', get_stylesheet_directory_uri().'/assets/css/owl.carousel.min.css');
    wp_register_style('owl-carousel-theme', get_stylesheet_directory_uri().'/assets/css/owl.theme.default.min.css');


	wp_enqueue_style( 'animate-css');
	wp_enqueue_style( 'font-awesome');
	wp_enqueue_style( 'hover');
	wp_enqueue_style( 'balthazar-font');
	wp_enqueue_style( 'animate-on-scroll-css');
    wp_enqueue_style( 'lux-bootswatch');
    wp_enqueue_style( 'owl-carousel');
    wp_enqueue_style( 'owl-carousel-theme');

}




add_action('wp_enqueue_scripts', 'enqueue_itriples_scripts');

function enqueue_itriples_scripts(){
    if (is_page('Conferences')){
            wp_register_script('amcharts-map', 'https://www.amcharts.com/lib/3/ammap.js', true);
    wp_register_script('amcharts-worldLow', 'https://www.amcharts.com/lib/3/maps/js/worldLow.js', true);
    wp_register_script('amcharts-export', 'https://www.amcharts.com/lib/3/plugins/export/export.min.js', true);
    wp_register_script('amcharts-light', 'https://www.amcharts.com/lib/3/themes/light.js', true);

    wp_enqueue_script('amcharts-map');
    wp_enqueue_script('amcharts-worldLow');
    wp_enqueue_script('amcharts-export');
    wp_enqueue_script('amcharts-light');

    wp_register_script('conference-scripts', get_stylesheet_directory_uri().'/assets/js/itriples/conference-maps.js', array('jquery'),'' ,true);
    wp_enqueue_script ('conference-scripts');


    };

    if (is_singular('conference') || has_tag('front-feature')){
    wp_register_script('conference-clock', get_stylesheet_directory_uri().'/assets/js/conference-clock.js', array('jquery'),'' ,true);
    wp_enqueue_script ('conference-clock');
    }

    if ( is_front_page() ){
    wp_register_script('itriples-carousels', get_stylesheet_directory_uri().'/assets/js/itriples/carousels.js',
    array('jquery'),'' ,true);

    wp_enqueue_script('itriples-carousels');

    wp_register_script('itriples-header-animation', get_stylesheet_directory_uri().'/assets/js/itriples/header-animation.js',
    array('jquery'),'' ,true);

    wp_enqueue_script('itriples-header-animation');

    }

    if (is_category()){
         wp_register_script('category-navigation', get_stylesheet_directory_uri().'/assets/js/itriples/cat-navigation.js',
    array('jquery'),'' ,true);
            wp_enqueue_script('category-navigation');

    }

    if (is_category('measures')){
         wp_register_script('measure-navigation', get_stylesheet_directory_uri().'/assets/js/itriples/measure-nav.js',
    array('jquery'),'' ,true);
            wp_enqueue_script('measure-navigation');


    }

    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '', true );
	wp_register_script('itriples-global', get_stylesheet_directory_uri().'/assets/js/itriples-global.js',
	array('jquery'),'' ,true);

	wp_register_script('owl-carousel', get_stylesheet_directory_uri().'/assets/js/owl.carousel.min.js',
	array('jquery'),'' ,true);

	wp_register_script('animate-on-scroll-js', get_stylesheet_directory_uri().'/assets/aos/aos.js',array('jquery'),'' ,true);

    wp_register_script('countrypicker', get_stylesheet_directory_uri().'/assets/js/countrypicker.min.js',array('jquery'),'' ,true);
    
    wp_register_script('isss-membership', get_stylesheet_directory_uri().'/assets/js/itriples/membership.js',array('jquery'),'' ,true);
    

    wp_enqueue_script('itriples-global');
    wp_enqueue_script('owl-carousel');
    wp_enqueue_script('animate-on-scroll-js');
    wp_enqueue_script('countrypicker');
    wp_enqueue_script('isss-membership');
}

add_filter( 'wp_nav_menu_items','add_search_box', 10, 2 );

function add_search_box( $items, $args ) {
       if(  ( $args->theme_location == 'primary' ) || ($args->menu_id == '6') ){
$items .= '<li>';
$items .= '<a href="#" id="search-toggle" class="nav-link hvr-underline-from-center"><i class="fa fa-search"></i></a></li>';
  }
return $items;
}


function register_header_widget(){
 if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Top Right Widget Area',
    'id' =>  'top-right-widget-area',
    'before_widget' => '<div class = "top-right-widget">',
    'after_widget' => '</div>',
    'before_title' => '<h class="widget-header">',
    'after_title' => '</h>',
  )
);   
}

add_action('widgets_init', 'register_header_widget');


function itriples_custom_excerpt_length( $length ) {
    if (has_tag( 'front-feature') ){
        return 85;
    } else {
    return 30;
    }
}
add_filter( 'excerpt_length', 'itriples_custom_excerpt_length', 999 );

/* ------------------------------------ */

function alt_excerpt_more( $more ) {
    return '&#46;&#46;&#46;&#46;&#46;&#46;';
}
add_filter( 'excerpt_more', 'alt_excerpt_more' );

/**
 * Load custom WordPress nav walker.*/
 
if ( ! class_exists( 'isss_navwalker' )) {
    require_once dirname( __FILE__ ) . '/inc/isss_navwalker.php';
}

function set_global_js_url(){
    ?>
    <script type="text/javascript">
        var THEME_DIR = "<?php echo get_stylesheet_directory_uri() ;?>";
    </script>
    <?php
}
add_action('wp_footer','set_global_js_url');


function remove_autofocus_class() { 
    ?>
    <script type="text/javascript">
        jQuery( document ).ready(function() {
            jQuery( '.widget_ms_widget_login .ms-login-form form' ).removeClass( 'autofocus' )
        });
    </script>
<?php 
}

add_action( 'wp_footer', 'remove_autofocus_class', 1 );

// DEQUEUE PARENT STYLES
function itriples_dequeue() {
   wp_dequeue_style( 'wp-bootstrap-starter-bootstrap-css' );
}
add_action( 'wp_print_styles', 'itriples_dequeue', 100 );


function change_category_order( $query ) {
    if ( $query->is_category('about-self-injury') && $query->is_main_query() ) {
        $query->set( 'order', 'ASC' );
    }
}
add_action( 'pre_get_posts', 'change_category_order' );


// BUDDYPRESS

function profile_tab_account() {
      global $bp;
 
      bp_core_new_nav_item( array( 
            'name' => 'Membership Details', 
            'slug' => 'membership-details', 
            'screen_function' => 'membership_details_screen', 
            'position' => 40,
            'parent_url'      => bp_loggedin_user_domain() . '/account/',
            'parent_slug'     => $bp->profile->slug,
            'default_subnav_slug' => 'membership-details'
      ) );
}
add_action( 'bp_setup_nav', 'profile_tab_account' );
 
 
function membership_details_screen() {
    
    // Add title and content here - last is to call the members plugin.php template.
  //  add_action( 'bp_template_title', 'account_title' );
    add_action( 'bp_template_content', 'account_content' );
    bp_core_load_template( 'buddypress/members/single/plugins' );
}
function account_title() {
    echo 'My ISSS Account';
}

function account_content() { 
    echo do_shortcode('[ms-membership-account]');
}



function profile_tab_privacy() {
      global $bp;
 
      bp_core_new_nav_item( array( 
            'name' => 'Privacy Tools', 
            'slug' => 'privacy-tools', 
            'screen_function' => 'privacy_tools_screen', 
            'position' => 40,
            'parent_url'      => bp_loggedin_user_domain() . '/account/',
            'parent_slug'     => $bp->profile->slug,
            'default_subnav_slug' => 'privacy-tools'
      ) );
}
add_action( 'bp_setup_nav', 'profile_tab_privacy' );
 
 
function privacy_tools_screen() {
    
    // Add title and content here - last is to call the members plugin.php template.
    add_action( 'bp_template_title', 'privacy_tools_title' );
    add_action( 'bp_template_content', 'privacy_tools_content' );
    bp_core_load_template( 'buddypress/members/single/plugins' );
}
function privacy_tools_title() {
   echo 'Privacy Tools';
}

function privacy_tools_content() { 
    echo do_shortcode('[gdpr_privacy_tools]');
}


include plugin_dir_path( __FILE__ ).'inc/itriples_customposts.php';
include plugin_dir_path( __FILE__ ).'inc/itriples_customtaxonomies.php';