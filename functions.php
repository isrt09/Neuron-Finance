<?php 

function neuron_theme_assets(){
	// CSS Scripts
	wp_enqueue_style('animate',      get_template_directory_uri().'/assets/css/animate.min.css', array(),'1.0','all');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/fonts/font-awesome/css/font-awesome.min.css',array(),'1.0','all');
	wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css',array(),'1.0','all');
	wp_enqueue_style('bootsnav',     get_template_directory_uri().'/assets/css/bootsnav.css',array(),'1.0','all');
	wp_enqueue_style('bootstrap',    get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css',array(),'1.0','all');
	wp_enqueue_style('neuron-style', get_stylesheet_uri());

	// JS Scripts
	wp_enqueue_script('bootstrap',   get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js',array('jquery'),'1.0',true);
	wp_enqueue_script('bootsnav',    get_template_directory_uri().'/assets/js/bootsnav.js',array('jquery'),'1.0',true);
	wp_enqueue_script('carousel',    get_template_directory_uri().'/assets/js/owl.carousel.min.js',array('jquery'),'1.0',true);
	wp_enqueue_script('wow',         get_template_directory_uri().'/assets/js/wow.min.js',array('jquery'),'1.0',true);
	wp_enqueue_script('ajaxchimp',   get_template_directory_uri().'/assets/js/ajaxchimp.js',array('jquery'),'1.0',true);
	wp_enqueue_script('ajax-conf',   get_template_directory_uri().'/assets/js/ajaxchimp-config.js',array('jquery'),'1.0',true);
	wp_enqueue_script('neuron-js',   get_template_directory_uri().'/assets/js/script.js',array('jquery'),'1.0',true);
}
add_action('wp_enqueue_scripts','neuron_theme_assets');

function neuron_theme_supports(){

	//Text Domain Load
	load_theme_textdomain('neuron',  get_template_directory_uri().'/languages');
	// Theme Supports	    
    add_theme_support('html5',array(
    	'search-form',
    	'comment-form',
    	'comment-list',
    	'gallery',
    	'caption'
    ));    
    // Post Thumbnail  
    add_theme_support('post-thumbnails'); 
    // Adding Title
    add_theme_support('title-tag');
    // For Widgets
    add_theme_support('widgets');
    //Enable for Logo
    add_theme_support('custom-logo',array(
    	'height' 	  => 250,
    	'width'  	  => 250,
    	'flex-width'  => true,
    	'flex-height' => true
    ));  
    // Register for Menu
    register_nav_menus(array(
    	'primary' =>esc_html__('Primary','neuron')
    ));	    

}
add_action('after_setup_theme','neuron_theme_supports');

function neuron_custom_post(){
	register_post_type('slide',array(
		'public'   => true,
		'show_ui'  => true,
		'supports' => array('title','editor','thumbnail','custom-fields','page-attributes'),
		'labels'   => array(
			'name' 			=> __('Slides','neuron'),
			'singular_name' => __('Slide','neuron'),
		)
	));

	register_post_type('feature',array(
		'public'   => true,
		'show_ui'  => true,
		'supports' => array('title','editor','thumbnail','page-attributes'),
		'labels'   => array(
			'name' 			=> __('Features','neuron'),
			'singular_name' => __('Feature','neuron'),
		)
	));

	register_post_type('service',array(
		'public'   => true,
		'show_ui'  => true,
		'supports' => array('title','editor','thumbnail','page-attributes'),
		'labels'   => array(
			'name' 			=> __('Services','neuron'),
			'singular_name' => __('Service','neuron'),
		)
	));
	 register_post_type('work',array(
		'public'   => true,	
		'show_ui'  => true,	
		'supports' => array('title','editor','thumbnail','custom-fields','page-attributes'),
		'labels'   => array(
			'name' 			=> __('Works','neuron'),
			'singular_name' => __('Work','neuron'),
		)
	));
}
add_action('init','neuron_custom_post');

// Register Widgets

function neuron_widgets_init(){
	register_sidebar(array(
        'name'          =>  esc_html__('Footer One','neuron'),
        'id' 			=> 'footer-1', 
        'description' 	=> esc_html__('Add Widgets Footer One','neuron'),
        'before_widget' => '<div id=%1$s class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ));

	register_sidebar(array(
        'name'          =>  esc_html__('Footer Two','neuron'),
        'id' 			=> 'footer-2', 
        'description' 	=> esc_html__('Add Widgets Footer Two','neuron'),
        'before_widget' => '<div class="footer-widget usefull-link">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));   

}
add_action('widgets_init','neuron_widgets_init');

function neuron_shortcode(){
	
}
add_shortcode('','neuron_shortcode');

// Setup Codestar Framework
require get_template_directory() . '/inc/cs-framework/cs-framework.php';