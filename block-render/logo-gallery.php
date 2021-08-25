<?php
// Registration

function oppidan_register_logo_gallery_block() {
  if ( ! function_exists( 'register_block_type' ) ) {
    return;
  }

  $register_args = array(
    'attributes' => array(
    ),
    'render_callback' => 'logo_gallery_block_data_block_render',
  );

  register_block_type( 'oppidan/logo-gallery', $register_args );
}
add_action( 'init', 'oppidan_register_logo_gallery_block' );

// Rendering

function logo_gallery_block_data_block_render( $attributes, $content ) {
  $markup = '';
  $markup .= '<div class="logo-gallery">';
    $markup .= '<div class="logo-gallery-flex">';
      $markup .= $content;
    $markup .= '</div>';
  $markup .= '</div>';

  return $markup;
}