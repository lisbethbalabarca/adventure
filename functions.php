<?php 
// tamaño de img
	add_theme_support('post-thumbnails');
	add_image_size('banner', 770,440,true);
	// resgister menus
	register_nav_menus(array(
		'Principal' => __('Principal');
?>