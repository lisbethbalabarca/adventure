<?php 
	function config_site(){
		register_post_type(
			'tour', array(
				'labels' => array('name' => 'Tours', 'singular_name' => 'tour' ),
				'public' => true,
				'rewrite' => array('slug' => 'tour'),
				'has_archive' => true,
				'supports' => array('title' , 'editor' , 'author' , 'thumbnail', 'comments' )
			)
		);
		register_post_type(
			'blog', array(
				'labels' => array('name' => 'Blog', 'singular_name' => 'articulo' ),
				'public' => true,
				'rewrite' => array('slug' => 'blog'),
				'has_archive' => true,
				'supports' => array('title' , 'editor' , 'author' , 'thumbnail', 'comments' )
			)
		);
		//funcion para crear tamaño de imagenes
		add_image_size('banner', 1600, 987, true);
		add_image_size('tour', 285, 422, true);
		add_image_size('blog', 270, 300, true);
		add_image_size('blog_details', 938, 450, true);
		add_image_size('single', 1170, 456, true);

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

	function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyCdDVULAeX1xZcM1Gf885JpxZCSd0LqGjQ';
	
	return $api;
	}
	add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

	function copyright_oculto() { ?>
 
<script type='text/javascript'>
function addLink() {
    var body_element = document.getElementsByTagName('body')[0];
    var selection;
    selection = window.getSelection();
    var pagelink = "<br /><br /> Artículo publicado en Ayuda WordPress: <?php if(is_single()){ the_title();}?> <a href='"+document.location.href+"'>"+document.location.href+"</a>"; //Cambia en esta línea lo que quieras
    var copy_text = selection + pagelink;
    var new_div = document.createElement('div');
	new_div.style.left='-99999px';
	new_div.style.position='absolute';
 
    body_element.appendChild(new_div );
    new_div.innerHTML = copy_text ;
    selection.selectAllChildren(new_div );
    window.setTimeout(function() {
        body_element.removeChild(new_div );
    },0);
}
 
document.oncopy = addLink;
</script>
 
<?php
}
 
add_action( 'wp_head', 'copyright_oculto');
?>