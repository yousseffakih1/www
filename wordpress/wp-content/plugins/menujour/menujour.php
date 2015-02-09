<?php
/*
Plugin Name: Clubcities

*/


// Our custom post type function
function create_posttype() {

	register_post_type( 'menus',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Menus' ),
				 'add_new'  => false,
				'singular_name' => __( 'Menus' )
			),
			'capabilities' => array(
                'create_posts' => false,
                'delete_published_posts' => false,				// Removes support for the "Add New" function
            ),  
			 'map_meta_cap' => true,
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'Menus'),
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


function shortcodemenu($attr){

$args = array( 'post_type' => 'menus', 'p' => $attr['id'] );

$the_query = new WP_Query( $args );

$menu='<div class="menu_content">';
$menu.='<h4>'.$the_query->posts[0]->post_title.'</h4>';
$menu.=$the_query->posts[0]->post_content;
$menu.="</div>";

return $menu;

	
}

add_shortcode( 'menu', 'shortcodemenu' );
?>