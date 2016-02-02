<?php

add_action('init','partenaires_init');

/**
 * Init custom post type Partenaire
 **/
function partenaires_init()
{
    // init custom post type
    register_post_type ('partenaire',array(
        'public'=>true,
        'publicly_queryable'=>false,
        'label'=>'Partenaires',
        'description'=>'Custom Post Type',
        'capability_type'=>'post',
        'supports'=>array('title','thumbnail','editor','page-attributes', 'custom-fields'),
        'menu_icon'=>'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0ZWQgYnkgSWNvTW9vbi5pbyAtLT4KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4KPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHdpZHRoPSIzMiIgaGVpZ2h0PSIzMiIgdmlld0JveD0iMCAwIDMyIDMyIj4KPGcgaWQ9Imljb21vb24taWdub3JlIj4KCTxsaW5lIHN0cm9rZS13aWR0aD0iMSIgeDE9IiIgeTE9IiIgeDI9IiIgeTI9IiIgc3Ryb2tlPSIjNDQ5RkRCIiBvcGFjaXR5PSIiPjwvbGluZT4KPC9nPgoJPHBhdGggZD0iTTMyIDEwbC0xNi04LTE2IDggMTYgOCAxNi04ek0xNiA0LjY1NWwxMC42ODkgNS4zNDUtMTAuNjg5IDUuMzQ1LTEwLjY4OS01LjM0NSAxMC42ODktNS4zNDV6TTI4Ljc5NSAxNC4zOThsMy4yMDUgMS42MDItMTYgOC0xNi04IDMuMjA1LTEuNjAyIDEyLjc5NSA2LjM5OHpNMjguNzk1IDIwLjM5OGwzLjIwNSAxLjYwMi0xNiA4LTE2LTggMy4yMDUtMS42MDIgMTIuNzk1IDYuMzk4eiIgZmlsbD0iIzAwMDAwMCI+PC9wYXRoPgo8L3N2Zz4K'
    ));

    //ajout d'une taille de miniature dédiée aux partenaires
    add_image_size('partenaire',250,250,true);
}
?>