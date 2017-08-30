<?php
	require_once('lib/nav-walker.php');

	add_theme_support('custom-logo');
	add_theme_support('post-thumbnails');

	function bootstrap_nav(){
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'false',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			'walker'            => new wp_bootstrap_navwalker())
		);
	}

	register_nav_menu( 'primary', __( 'Primary navigation', 'primary' ) );

	function cc_mime_types($mimes) {
	  $mimes['svg'] = 'image/svg+xml';
	  return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');