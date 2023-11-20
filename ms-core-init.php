<?php
/**
 * 
 * Este arquivo iniciliaza os componentes do plugin
 * 
 */

 if( !defined('WPINC') ) { die(); }

//  Definindo constantes para os diretórios arquivos / CSS / JS

define('CORE_INC', dirname(__FILE__). '/inc/');
define('CORE_CSS', plugins_url('css/', __FILE__));
define('CORE_JS', plugins_url('js/', __FILE__));

// Registrando arquivo CSS (Front-end)
function ms_register_core_css() {
  wp_enqueue_style('ms-core-css', CORE_CSS. 'ms-core.css', null, time(), 'all');
}

add_action('wp_enqueue_scripts', 'ms_register_core_css');

// Registrando arquivo JavaScript (Front-end)
function ms_register_core_js() {
  wp_enqueue_script('ms-core-js', CORE_JS.'ms-core.js', 'jquery', time(), true);
}

add_action('wp_enqueue_scripts', 'ms_register_core_js');

// Registrindo arquivo JavaScript (Back-end)
function ms_register_admin_scripts() {

  if(!did_action('wp_enqueue_media')) {
    wp_enqueue_media();
  }

  wp_enqueue_script('ms-admin-js', CORE_JS.'ms-admin.js', 'jquery', time(), true);
}

add_action('admin_enqueue_scripts', 'ms_register_admin_scripts');

// Registrando Font Awesome (Front-end)
function load_font_awesome_admin() {
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'load_font_awesome_admin');

// Includes 
if( file_exists(CORE_INC.'ms-core-functions.php') ) {
  require_once(CORE_INC.'ms-core-functions.php');
}

if( file_exists(CORE_INC.'ms-shortcodes.php') ) {
  require_once(CORE_INC.'ms-shortcodes.php');
}

if( file_exists(CORE_INC.'ms-admin-functions.php') ) {
  require_once(CORE_INC.'ms-admin-functions.php');
}

