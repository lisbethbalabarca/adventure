<?php 
	function config_site(){
		register_post_type(
			'tour', array(
				'labels' => array('name' => 'Tours', 'singular_name' => 'tour' ),
				'public' => true,
				'rewrite' => array('slug' => 'noticia'),
				'supports' => array('title' , 'editor' , 'author' , 'thumbnail' )
			)
		);
		//funcion para crear tamaño de imagenes
		add_image_size('banner', 1600, 987, true);
		//registramos los menus
		register_nav_menus(array(
			'Principal' => __('Principal')
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
    	return 200;
	}
	add_filter('excerpt_length', 'new_excerpt_length');
?>