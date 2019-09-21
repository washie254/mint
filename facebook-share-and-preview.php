<?php
/*
Plugin Name: Facebook Share and Preview
Version: 1.0
Plugin URI: http://www.studio404.it/
Description: Adds a Share link to every post and set an image and a description for Facebook.
Author: Claudio Simeone
Author URI: http://www.studio404.it/
*/
add_theme_support('post-thumbnails');
add_image_size('fb-preview', 90, 90, true);

// Get featured image
function ST4_get_FB_image($post_ID) {
    $post_thumbnail_id = get_post_thumbnail_id( $post_ID );
    if ($post_thumbnail_id) {
        $post_thumbnail_img = wp_get_attachment_image_src( $post_thumbnail_id, 'fb-preview');
        return $post_thumbnail_img[0];
    }
}
 
// Get post excerpt
function ST4_get_FB_description($post) {
    if ($post->post_excerpt) {
        return $post->post_excerpt;
    }
    else {
        // Post excerpt is not set, so we take first 55 words from post content
        $excerpt_length = 55;
        // Clean post content
        $text = str_replace("\r\n"," ", strip_tags(strip_shortcodes($post->post_content)));
        $words = explode(' ', $text, $excerpt_length + 1);
        if (count($words) > $excerpt_length) {
            array_pop($words);
            $excerpt = implode(' ', $words);
            return $excerpt;
        }
    }
}






?>