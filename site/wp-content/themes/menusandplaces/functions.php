<?php
//Menu
register_nav_menus( array(
	'menu' => 'Menu superior',
	'menu_footer' => 'Menu footer',
	));

//Agregar thumbs para los post
add_theme_support('post-thumbnails');
add_image_size('list_articles_thumbs', 263,202, true);

//Sidebar
register_sidebar( array(
	'name' => 'Sidebar',
	'before_widget' => '<section class="widget">',
	'after_widget' => '</section>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
	));

?>