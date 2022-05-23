<?php
// PERSONALIZAR MENU DE ADMIN
function custom_menu_order($menu_ord) {
	if (!$menu_ord) return true;
	return array(
		'index.php',
		'edit.php?post_type=page',
		'edit.php?post_type=custom_services',
		'edit.php',
	);
}
add_filter('custom_menu_order', 'custom_menu_order');
add_filter('menu_order', 'custom_menu_order');

// SECCIÓN GALERÍA, TIENDAS Y INFORMACIÓN TÉCNICA
function create_post_type() {

  	register_post_type('custom_services', array(
      	'labels' => array(
        	'name' => __( 'Nuestros Servicios' ),
        	'singular_name' => __( 'Nuestros Servicios' )
      	),
      	'public' => true,
      	'has_archive' => true,
	    )
  	);
}

add_action('init', 'create_post_type');

// NUEVOS MENUS WORDPRESS
function register_my_menus() {
register_nav_menus(
    array(
        'menu-main' => __( 'Menu principal' ),
        'menu-footer' => __( 'Menu footer' ),
    ));
}
add_action( 'init', 'register_my_menus' );
?>