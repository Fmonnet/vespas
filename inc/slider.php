<?php

function creation_slider() {

	$args = array(
		'public' => true,
		'label' => 'Slider',
		'supports' => ['thumbnail', 'title', 'editor']
		);

	register_post_type('slider', $args);
}
add_image_size('slider',1200, 900, true);
add_action('init', 'creation_slider');

function get_slideShow()
{

	//initialise le retour html
	$html='<div class="slider">';


	//récupère en base de données tous les post de type 'slider'
	$query = new WP_Query( ['post_type' => 'slider']);

	//boucle les posts de type slider et génère le html
	while ( $query->have_posts() ) {

		$query->the_post();
		global $post;
		$html .= '<div><img src="';
		$html .= wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'slider')[0];

		$html .= '"></div>';		 
	}

	$html .= '</div>';

	return $html;
}

?>