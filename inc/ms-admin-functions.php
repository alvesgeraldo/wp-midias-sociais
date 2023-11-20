<?php
/**
 * Este arquivo centraliza o contedo da página de Configurações do Plugin
 */

 if( !defined('WPINC') ) { die(); }

 function ms_admin_menu_page() {

    add_menu_page(
      'Mídias Sociais - Configurações',
      'Mídias Socias',
      'manage_options',
      'midias-sociais',
      'ms_admin_page_content',
      'dashicons-share'
    );
 }

 add_action('admin_menu', 'ms_admin_menu_page');

 function ms_admin_page_content() {

    if( file_exists(plugin_dir_path(__FILE__).'pages/page-admin-content.php')) {
      include plugin_dir_path(__FILE__).'pages/page-admin-content.php';
    }

 }

 add_action('admin_init', 'ms_register_setting');

 function ms_register_setting(){

    // Register text URL IG
    register_setting(
      'ms_settings',
      'ms_url_ig',
      'sanitize_text_field'
    );

    // Register check IG
    register_setting(
      'ms_settings',
      'ms_show_ig',
      'sanitize_text_field'
    );

    // Register text URL LinkedIn
    register_setting(
      'ms_settings',
      'ms_url_in',
      'sanitize_text_field'
    );

    // Register check LinkedIn
    register_setting(
      'ms_settings',
      'ms_show_in',
      'sanitize_text_field'
    );

    // Register text URL GitHub
    register_setting(
      'ms_settings',
      'ms_url_gh',
      'sanitize_text_field'
    );

    // Register check GitHub
    register_setting(
      'ms_settings',
      'ms_show_gh',
      'sanitize_text_field'
    );

    // Register text URL Whatsapp
    register_setting(
      'ms_settings',
      'ms_url_wa',
      'sanitize_text_field'
    );

    // Register check Whatsapp
    register_setting(
      'ms_settings',
      'ms_show_wa',
      'sanitize_text_field'
    );

    // Seção Minhas Redes Sociais
    add_settings_section(
      'ms_settings_section_id',
      'Minhas Redes Sociais',
      '',
      'midias-sociais'
    );

    // Input checkbox Show IG
    add_settings_field(
      'ms_show_ig',
      'Instagram',
      'ms_checkbox_field_ig_html',
      'midias-sociais',
      'ms_settings_section_id',
      array(
        'label_for' => 'ms_show_ig',
        'class' => 'ms_show_ig_class'
      )
    );

    // Input text URL IG
    add_settings_field(
      'ms_url_ig',
      '',
      'ms_text_field_ig_html',
      'midias-sociais',
      'ms_settings_section_id',
      array(
        'label_for' => 'ms_url_ig',
        'class' => 'ms_my_ig_class'
      )
    );

    // Input checkbox Show IN
    add_settings_field(
      'ms_show_in',
      'LinkedIn',
      'ms_checkbox_field_in_html',
      'midias-sociais',
      'ms_settings_section_id',
      array(
        'label_for' => 'ms_show_in',
        'class' => 'ms_show_in_class'
      )
    );

    // Input text URL IN
    add_settings_field(
      'ms_url_in',
      '',
      'ms_text_field_in_html',
      'midias-sociais',
      'ms_settings_section_id',
      array(
        'label_for' => 'ms_url_in',
        'class' => 'ms_my_in_class'
      )
    );

    // Input checkbox Show GitHub
    add_settings_field(
      'ms_show_gh',
      'GitHub',
      'ms_checkbox_field_gh_html',
      'midias-sociais',
      'ms_settings_section_id',
      array(
        'label_for' => 'ms_show_gh',
        'class' => 'ms_show_gh_class'
      )
    );

    // Input text URL GitHub
    add_settings_field(
      'ms_url_gh',
      '',
      'ms_text_field_gh_html',
      'midias-sociais',
      'ms_settings_section_id',
      array(
        'label_for' => 'ms_url_gh',
        'class' => 'ms_my_gh_class'
      )
    );

    // Input checkbox Show Whatsapp
    add_settings_field(
      'ms_show_wa',
      'Whatsapp',
      'ms_checkbox_field_wa_html',
      'midias-sociais',
      'ms_settings_section_id',
      array(
        'label_for' => 'ms_show_wa',
        'class' => 'ms_show_gh_class'
      )
    );

    // Input text URL Whatsapp
    add_settings_field(
      'ms_url_wa',
      '',
      'ms_text_field_wa_html',
      'midias-sociais',
      'ms_settings_section_id',
      array(
        'label_for' => 'ms_url_wa',
        'class' => 'ms_my_gh_class'
      )
    );

 }

//  Input checkbox Show IG
function ms_checkbox_field_ig_html() {

  $show_ig = get_option('ms_show_ig');
  $checked = checked( $show_ig, 'on', false );
  
  ms_create_field_checkbox('ms_show_ig', $checked);
  
}

//  Input text URL IG
 function ms_text_field_ig_html() {

    $show_ig = get_option('ms_show_ig');
    $text = get_option('ms_url_ig');

    ms_create_field_text('container_my_ig', $show_ig, 'ms_url_ig', 'Digite a URL: ', $text);

 }

//  Input checkbox Show IN
function ms_checkbox_field_in_html() {

  $show_in = get_option('ms_show_in');
  $checked = checked( $show_in, 'on', false );

  ms_create_field_checkbox('ms_show_in', $checked);
  
}

//  Input text URL IN
 function ms_text_field_in_html() {

    $show_in = get_option('ms_show_in');
    $text = get_option('ms_url_in');

    ms_create_field_text('container_my_in', $show_in, 'ms_url_in', 'Digite a URL: ', $text);
    
 }

//  Input checkbox Show GitHub
function ms_checkbox_field_gh_html() {

  $show_gh = get_option('ms_show_gh');
  $checked = checked( $show_gh, 'on', false );

  ms_create_field_checkbox('ms_show_gh', $checked);
}

//  Input text URL GitHub
 function ms_text_field_gh_html() {

    $show_gh = get_option('ms_show_gh');
    $text = get_option('ms_url_gh');

    ms_create_field_text('container_my_gh', $show_gh, 'ms_url_gh', 'Digite a URL: ', $text);
 }

//  Input checkbox Show GitHub
function ms_checkbox_field_wa_html() {

  $show_wa = get_option('ms_show_wa');
  $checked = checked( $show_wa, 'on', false );

  ms_create_field_checkbox('ms_show_wa', $checked);
}

//  Input text URL GitHub
 function ms_text_field_wa_html() {

    $show_wa = get_option('ms_show_wa');
    $text = get_option('ms_url_wa');

    ms_create_field_text('container_my_wa', $show_wa, 'ms_url_wa', 'Digite o número com DDD: ', $text);
 }

//  Funções para criação do campos checkbox e text de cada opção

 function ms_create_field_checkbox($id_name, $checked) {
   printf("<label><input type='checkbox' id='$id_name' name='$id_name' $checked /> Habilitar </label>");
 }

 function ms_create_field_text($id_div, $show, $id_name, $label, $content_text) {

  echo '<div id="'. $id_div .'" style="'. ($show == 'on' ? '' : 'display: none;') .'">';
    printf('<label>'. $label .'<input type="text" id="'. $id_name .'" name="'. $id_name .'" value="%s" /></label>', esc_attr( $content_text ));
  echo '</div>';

 }

 