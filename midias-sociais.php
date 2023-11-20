<?php
/**
 * Plugin Name: Mídias Socias
 * Plugin URI: https://www.minhasmidias.com.br
 * Description: Um plugin para compartilhar suas Mídias Sociais
 * Version: 1.0
 * Author: Geraldo Alves
 * Author URI: https://www.geraldoalves.dev 
 */

 if( !defined('WPINC') ) { die(); };

 if( file_exists(plugin_dir_path(__FILE__).'ms-core-init.php') ) {
    require_once( plugin_dir_path(__FILE__). 'ms-core-init.php' );
 }
 