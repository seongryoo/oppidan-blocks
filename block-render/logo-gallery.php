<?php
// Registration

function oppidan_register_logo_gallery_block() {
  if ( ! function_exists( 'register_block_type' ) ) {
    return;
  }

  $register_args = array(
    'attributes' => array(
      'desc' => array(
        'type' => 'string',
      ),
      'level' => array(
        'type' => 'string',
      ),
      'loc' => array(
        'type' => 'string',
      ),
      'expr' => array(
        'type' => 'string',
      ),
      'will_expire' => array(
        'type' => 'boolean',
        'default' => false,
      ),
    ),
    'render_callback' => 'logo_gallery_block_data_block_render',
  );

  register_block_type( 'oppidan/logo-gallery-block', $register_args );
}
add_action( 'init', 'oppidan_register_logo_gallery_block' );

// Rendering

function logo_gallery_block_data_block_render( $attributes ) {
  $markup = '';
  return $markup;
}