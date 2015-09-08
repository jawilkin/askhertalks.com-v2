<?php

	function theme_styles() {

		//wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
		wp_enqueue_style( 'fontawesome_css', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
		wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

	}
	add_action( 'wp_enqueue_scripts', 'theme_styles' );
	
	function theme_js() {

		global $wp_scripts;

		wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false );
		wp_register_script( 'respond_js', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );
		wp_register_script( 'ie10_viewport_bug_workaround', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', array('jquery'), '', true );

		$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );	
		$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );
		$wp_scripts->add_data( 'ie10_viewport_bug_workaround', 'conditional', 'IE 10' );

		wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'theme_js', get_template_directory_uri() . '/js/theme.js', array('jquery', 'bootstrap_js'), '', true );

	}
	add_action( 'wp_enqueue_scripts', 'theme_js' );

	//Use the filter below to turn off the WP admin bar that appears when users are logged in.
	//add_filter( 'show_admin_bar', '__return_false' );

	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' );

	//WordPress automatically generates the title tag for each page and post
	function spi_setup() {
 		add_theme_support( 'title-tag' );
	}
	add_action( 'after_setup_theme', 'spi_setup' );


	function register_theme_menus() {
		register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu' )
			)
		);
	}
	add_action( 'init', 'register_theme_menus' );

	function create_widget($name, $id, $description) {

		register_sidebar(array(
			'name'			=> __( $name ),
			'id'			=> $id,
			'description'	=> __( $description ),
			'before_widget'	=> '<div class="widget">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2>',
			'after_title'	=> '</h2>'
		));

	}

	create_widget( 'Front Page One', 'front-one', 'Displays first on the sidebar of the homepage');
	create_widget( 'Front Page Two', 'front-two', 'Displays second on the sidebar of the homepage');
	create_widget( 'Front Page Three', 'front-three', 'Displays third on the sidebar of the homepage');

	create_widget( 'Page Sidebar', 'page', 'Displays on the side of pages with a sidebar');

?>