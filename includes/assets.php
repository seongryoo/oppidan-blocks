<?php

// Enqueue frontend stylesheets
function oppidan_enqueue_assets() {
  $stylesheets = array(
    'gallery',
    'spacer',
  );

  foreach( $stylesheets as $style ) {
    $style_name = 'oppidan-' . $style;
    $style_path = plugins_url( '/../frontend-assets/css/' . $style . '.css', __FILE__ );
    wp_enqueue_style( $style_name, $style_path );
  }
}
add_action( 'wp_enqueue_scripts', 'oppidan_enqueue_assets' );

// Enqueue admin stylesheets
function oppidan_enqueue_admin_assets() {
  $stylesheets = array(
    'admin',
  );

  foreach( $stylesheets as $style ) {
    $style_name = 'oppidan-' . $style;
    $style_path = plugins_url( '/../admin-assets/css/' . $style . '.css', __FILE__ );
    wp_enqueue_style( $style_name, $style_path );
  }
}
add_action( 'admin_enqueue_scripts', 'oppidan_enqueue_admin_assets' );


// Enqueue block editor scripts
function oppidan_enqueue_block_assets() {
  // Stylesheets for editing experience
  $stylesheets = array(
    'blocks',
  );
  foreach( $stylesheets as $style ) {
    $style_name = 'oppidan-' . $style;
    $style_path = plugins_url( '/../gutenberg-assets/css/' . $style . '.css', __FILE__ );
    wp_enqueue_style( $style_name, $style_path );
  }
  // Block js files
  $scripts = array(
    'logo-gallery',
    'spacer',
  );
  $deps = array(
    'wp-blocks',
    'wp-i18n',
    'wp-editor',
    'wp-date',
  );
  foreach( $scripts as $script ) {
    $script_name = 'oppidan-' . $script;
    $script_path = plugins_url( '/../gutenberg-assets/js/' . $script . '.js', __FILE__ );
    wp_enqueue_script( $script_name, $script_path, $deps );
  }
}
add_action( 'enqueue_block_editor_assets', 'oppidan_enqueue_block_assets' );