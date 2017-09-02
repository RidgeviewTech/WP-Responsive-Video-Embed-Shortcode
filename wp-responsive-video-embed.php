<?php
/**
 * Plugin Name: WP Responsive Video Embed
 * Description: Code-Free responsive video embed
 * Author: Jason Robie
 * Author URI: https://ridgeviewtechnology.com/
 * Version: 1.0.0
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 */


/* SHORTCODE FOR VIMEO VIDEO EMBEDS */
function vimeo_embed_shortcode( $atts ) {
  // Attributes
  $atts = shortcode_atts(
    array(
      'src' => '',
      'max-width' => '',
      'float' => '',
      'left' => '',
      'right' => '',
      'bottom' => '',
      'top' => '',
    ),
    $atts,
    'video_embed'
  );

  return '<div class="video-wrapper" style="width:' . $atts['max-width'] .'px; float:' . $atts['float'] .'; margin-top:' . $atts['top'] .'px; margin-right:' . $atts['right'] .'px; margin-bottom:' . $atts['bottom'] .'px; margin-left:' . $atts['left'] .'px;">
          <div class="video-embed-code">
          <iframe src="https://player.vimeo.com/video/' . $atts['src'] . '" webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder="0" class="video">
           </iframe></div></div>';

}
add_shortcode( 'vimeo_embed', 'vimeo_embed_shortcode' );
//<iframe src="https://player.vimeo.com/video/217155740" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>


// YOUTUBE
function youtube_embed_shortcode( $atts ) {
  // Attributes
  $atts = shortcode_atts(
    array(
      'src' => '',
      'max-width' => '',
      'float' => '',
      'left' => '',
      'right' => '',
      'bottom' => '',
      'top' => '',
    ),
    $atts,
    'video_embed'
  );

  return '<div class="video-wrapper" style="width:' . $atts['max-width'] .'px; float:' . $atts['float'] .'; margin-top:' . $atts['top'] .'px; margin-right:' . $atts['right'] .'px; margin-bottom:' . $atts['bottom'] .'px; margin-left:' . $atts['left'] .'px;">
          <div class="video-embed-code">
          <iframe src="https://www.youtube.com/embed/' . $atts['src'] . '?rel=0"
           allowfullscreen
           frameborder="0"
           class="video">
           </iframe></div></div>';

}
add_shortcode( 'youtube_embed', 'youtube_embed_shortcode' );