<?php
/**
 * Este arquivo contém os shortcodes do plugin
 */

 if( !defined('WPINC') ) { die(); }
 
 function ms_my_social_networks() {
  
  $show_ig = get_option('ms_show_ig');
  $show_in = get_option('ms_show_in');
  $url_ig = get_option('ms_url_ig');
  $url_in = get_option('ms_url_in');
  $show_gh = get_option('ms_show_gh');
  $url_gh = get_option('ms_url_gh');
  $show_wa = get_option('ms_show_wa');
  $url_wa = get_option('ms_url_wa');

  $output = '<div class="social-icons">';

  if ( $show_wa != '') {
    
    $output .= '
      <a href="https://wa.me/55'.$url_wa.'" target="_blank" class="btn-midia">
        <span class="dashicons dashicons-whatsapp"></span>
      </a>
    ';
  }

  if ( $show_ig != '') {
    
    $output .= '
      <a href="'.$url_ig.'" target="_blank" class="btn-midia">
        <span class="dashicons dashicons-instagram"></span>
      </a>
    ';
  } 
  
  if ( $show_in != '') {
    $output .= '
      <a href="'.$url_in.'" target="_blank" class="btn-midia">
        <span class="dashicons dashicons-linkedin"></span>
      </a>
    ';
  }

  if ( $show_gh != '') {
    $output .= '
      <a href="'.$url_gh.'" target="_blank" class="btn-midia">
        <i class="fab fa-github"></i>
      </a>
    ';
  }

  $output .= '</div>';
  
  return $output;

 }

/**
 * Registrando shortcodes
 */

 function ms_register_shortcodes() {
    add_shortcode( 'redes_sociais', 'ms_my_social_networks' );
 }

 add_action( 'init', 'ms_register_shortcodes' );