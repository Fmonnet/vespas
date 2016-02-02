<?php

// créer des emplacements de menus
register_nav_menus(array(
    'principal' => 'Menu principal',
    'social' => 'Réseaux sociaux',
    'contact' => 'Menu de contact',
));


// active les miniatures pour les articles
add_theme_support('post-thumbnails');

// ajoute une taille d'image "joueur_mini" dans wordpress
// le dernier paramètres "true" fera un crop de l'image si elle n'est pas au bon ratio
add_image_size('joueur_mini', 640, 480, true);

?>