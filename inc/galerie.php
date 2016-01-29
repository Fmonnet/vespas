<?php

add_filter('post_gallery', 'magalerie',10,2);

function magalerie($output, $attr)
{
    global $post;

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);

    $_attachments = get_posts(array('post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image'));

    $attachments = array();
    foreach ($_attachments as $key => $val) {
        $attachments[$val->ID] = $_attachments[$key];
    }


    if (empty($attachments)) return '';

    // Here's your actual output, you may customize it to your need
    $output = '<div class="galerie galerie-'.$columns.'">';

    // Now you loop through each attachment
    foreach ($attachments as $id => $attachment) {
        // Fetch the thumbnail (or full image, it's up to you)
//      $img = wp_get_attachment_image_src($id, 'medium');
//      $img = wp_get_attachment_image_src($id, 'my-custom-image-size');
        $img = wp_get_attachment_image_src($id, 'full');
        $thumb = wp_get_attachment_image_src($id, 'thumbnail');

        $output .= '<a class="galerie-item" href="'.$img[0].'">';
        $output .= '<img src="'.$thumb[0].'">';
        $output .= '</a>';
    }

    $output .= "</div>";

    return $output;
}
