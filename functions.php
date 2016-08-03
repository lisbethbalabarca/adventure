<?php 
	function config_site(){
		register_post_type(
			'tour', array(
				'labels' => array('name' => 'Tours', 'singular_name' => 'tour' ),
				'public' => true,
				'rewrite' => array('slug' => 'tour'),
				'supports' => array('title' , 'editor' , 'author' , 'thumbnail' )
			)
		);
		register_post_type(
			'blog', array(
				'labels' => array('name' => 'Blog', 'singular_name' => 'articulo' ),
				'public' => true,
				'rewrite' => array('slug' => 'blog'),
				'supports' => array('title' , 'editor' , 'author' , 'thumbnail' )
			)
		);
		//funcion para crear tamaño de imagenes
		add_image_size('banner', 1600, 987, true);
		add_image_size('tour', 285, 422, true);
		//registramos los menus
		register_nav_menus(array(
			'Principal' => __('Principal')
		));
		
		//AGREGAR OPCTION PAGES DAEBAKK!!! 
		acf_add_options_page(array(
			'page_title'  => 'Configuracion de pagina',
			'menu_title'  => 'Configuración',
			'menu_slug'  => 'Configuración',
			'redirect'   => false
		));
	}

	add_theme_support('post-thumbnails');
	add_action('init', 'config_site');

	function active_menu($classes) {
		if(in_array('current-menu-item', $classes)) {
			$classes[] = 'active';
		}
		return $classes;
	}
	add_filter('nav_menu_css_class' , 'active_menu');

	function new_excerpt_length($length) {
    	return 10;
	}
	add_filter('excerpt_length', 'new_excerpt_length');

?>