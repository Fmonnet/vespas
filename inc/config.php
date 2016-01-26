<?php 

	// créer des emplacements de menus
	register_nav_menus( array(
		'principal' => 'Menu principal',
		'social'  => 'Réseaux sociaux',
		'contact'  => 'Menu de contact',
	) );


	// active les miniatures pour les articles
	add_theme_support( 'post-thumbnails' ); 

 ?>