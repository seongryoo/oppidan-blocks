<?php
// Registration

function oppidan_register_spacer_block() {
  if ( ! function_exists( 'register_block_type' ) ) {
    return;
  }

  $register_args = array(
    'attributes' => array(
    ),
    'render_callback' => 'spacer_block_data_block_render',
  );

  register_block_type( 'oppidan/spacer', $register_args );
}
add_action( 'init', 'oppidan_register_spacer_block' );

// Rendering

function spacer_block_data_block_render( $attributes ) {
  $markup = '';
  $markup .= '<div class="spacer">';
  $markup .= '</div>';

  return $markup;
}