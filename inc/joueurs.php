<?php 

//custom post type : joueurs
function creation_joueurs()
{

    $args = array(
        'public' => true,
        'label'  => 'Joueurs',
        'supports' => ['thumbnail','title','editor','custom-fields']
    );

    register_post_type('joueur', $args );
}

add_action( 'init', 'creation_joueurs' );

?>