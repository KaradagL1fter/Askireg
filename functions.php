<?php 
function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 80,
		'width'                => 195,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);

	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


function l1fter_menus(){
    $location = array(
        'primary' => "Desktop primary left sidebar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($location);
}
add_action("init","l1fter_menus");
function add_additional_class_on_a($classes, $item, $args)
{
    if (isset($args->add_a_class)) {
        $classes['class'] = $args->add_a_class;
    }
    return $classes;
}

add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);
function load_stylesheets(){
    wp_register_style( "open-iconic-bootstrap.min", get_template_directory_uri(  )."/assets/css/open-iconic-bootstrap.min.css",array(),1,"all");
    wp_enqueue_style( "open-iconic-bootstrap.min");
    // wp_register_style( "boxicons.min", "https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css",array(),1,"all");
    // wp_enqueue_style( "boxicons.min");
    wp_register_style( "animate", get_template_directory_uri(  )."/assets/css/animate.css",array(),1,"all");
    wp_enqueue_style( "animate");
    wp_register_style( "owl.carousel.min", get_template_directory_uri(  )."/assets/css/owl.carousel.min.css",array(),1,"all");
    wp_enqueue_style( "owl.carousel.min");
    wp_register_style( "owl.theme.default.min", get_template_directory_uri(  )."/assets/css/owl.theme.default.min.css",array(),1,"all");
    wp_enqueue_style( "owl.theme.default.min");
    wp_register_style( "magnific-popup", get_template_directory_uri(  )."/assets/css/magnific-popup.css",array(),1,"all");
    wp_enqueue_style( "magnific-popup");
    wp_register_style( "aos", get_template_directory_uri(  )."/assets/css/aos.css",array(),1,"all");
    wp_enqueue_style( "aos");
    wp_register_style( "ionicons.min", get_template_directory_uri(  )."/assets/css/ionicons.min.css",array(),1,"all");
    wp_enqueue_style( "ionicons.min");
    wp_register_style( "bootstrap-datepicker", get_template_directory_uri(  )."/assets/css/bootstrap-datepicker.css",array(),1,"all");
    wp_enqueue_style( "bootstrap-datepicker");
    // wp_register_style( "bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css",array(),1,"all");
    // wp_enqueue_style( "bootstrap");
    wp_register_style( "jquery.timepicker", get_template_directory_uri(  )."/assets/css/jquery.timepicker.css",array(),1,"all");
    wp_enqueue_style( "jquery.timepicker");
    wp_register_style( "flaticon", get_template_directory_uri(  )."/assets/css/flaticon.css",array(),1,"all");
    wp_enqueue_style( "flaticon");
    wp_register_style( "icomoon", get_template_directory_uri(  )."/assets/css/icomoon.css",array(),1,"all");
    wp_enqueue_style( "icomoon");
    wp_register_style( "style", get_template_directory_uri(  )."/assets/css/style.css",array(),1,"all");
    wp_enqueue_style( "style");
};

add_action( "wp_enqueue_scripts", "load_stylesheets" );
function load_scripts(){

    wp_enqueue_script( "jquery.min",get_template_directory_uri(  )."/assets/js/jquery.min.js");
    wp_register_script( "jquery-migrate-3.0.1.min", get_template_directory_uri(  )."/assets/js/jquery-migrate-3.0.1.min.js",array(),1,1,1);
    wp_enqueue_script( "jquery-migrate-3.0.1.min");
    wp_register_script( "popper.min", get_template_directory_uri(  )."/assets/js/popper.min.js",array(),1,1,1);
    wp_enqueue_script( "popper.min");
    wp_register_script( "bootstrap.min", get_template_directory_uri(  )."/assets/js/bootstrap.min.js",array(),1,1,1);
    wp_enqueue_script( "bootstrap.min");

    // wp_register_script( "bootstrap.bundle.min","https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js",array(),1,1,1);
    // wp_enqueue_script( "bootstrap.bundle.min");
    wp_register_script( "l1fter_jquery.easing.1.3", get_template_directory_uri(  )."/assets/js/jquery.easing.1.3.js",array(),1,1,1);
    wp_enqueue_script( "l1fter_jquery.easing.1.3");
    wp_register_script( "l1fter_jquery.waypoints.min", get_template_directory_uri(  )."/assets/js/jquery.waypoints.min.js",array(),1,1,1);
    wp_enqueue_script( "l1fter_jquery.waypoints.min");
    wp_register_script( "l1fter_jquery.magnific-popup.min", get_template_directory_uri(  )."/assets/js/jquery.magnific-popup.min.js",array(),1,1,1);
    wp_enqueue_script( "l1fter_jquery.magnific-popup.min");
    wp_register_script( "l1fter_aos", get_template_directory_uri(  )."/assets/js/aos.js",array(),1,1,1);
    wp_enqueue_script( "l1fter_aos");
    wp_register_script( "l1fter_jquery.stellar.min", get_template_directory_uri(  )."/assets/js/jquery.stellar.min.js",array(),1,1,1);
    wp_enqueue_script( "l1fter_jquery.stellar.min");
    wp_register_script( "l1fter_owl.carousel.min", get_template_directory_uri(  )."/assets/js/owl.carousel.min.js",array(),1,1,1);
    wp_enqueue_script( "l1fter_owl.carousel.min");
    wp_register_script( "l1fter_jquery.animateNumber.min", get_template_directory_uri(  )."/assets/js/jquery.animateNumber.min.js",array(),1,1,1);
    wp_enqueue_script( "l1fter_jquery.animateNumber.min");
    wp_register_script( "l1fter_jquery.mb.YTPlayer.min", get_template_directory_uri(  )."/assets/js/jquery.mb.YTPlayer.min.js",array(),1,1,1);
    wp_enqueue_script( "l1fter_jquery.mb.YTPlayer.min");
    wp_register_script( "l1fter_scrollax.min", get_template_directory_uri(  )."/assets/js/scrollax.min.js",array(),1,1,1);
    wp_enqueue_script( "l1fter_scrollax.min");
    wp_register_script( "l1fter_bootstrap-datepicker", get_template_directory_uri(  )."/assets/js/bootstrap-datepicker.js",array(),1,1,1);
    wp_enqueue_script( "l1fter_bootstrap-datepicker");
    wp_register_script( "l1fter_google", "https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false",array(),1,1,1);
    wp_enqueue_script( "l1fter_google");
    wp_register_script( "l1fter_google-map", get_template_directory_uri(  )."/assets/js/google-map.js",array(),1,1,1);
    wp_enqueue_script( "l1fter_google-map");

    wp_register_script( "l1fter_main", get_template_directory_uri(  )."/assets/js/main.js",array(),1,1,1);
    wp_enqueue_script( "l1fter_main");
    wp_register_script( "l1fter_custom", get_template_directory_uri(  )."/assets/js/custom.js",array(),1,1,1);
    wp_enqueue_script( "l1fter_custom");
};

add_action( "wp_enqueue_scripts", "load_scripts" );
?>

