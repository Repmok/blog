<?php

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

register_sidebar(array(
	'name' => __('Right sidebar'),
	'id' => 'first-right-sidebar',
	'description' => 'The top bar',
	'before_widget' => '<div class="side">',
	'after_widget' => '</div>'
));

/* Disable the Admin Bar. */
//remove_action( 'init', 'wp_admin_bar_init' );

?>