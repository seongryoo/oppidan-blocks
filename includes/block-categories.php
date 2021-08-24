<?php

// Creating block categories

function oppidan_block_categories( $categories, $post ) {
  $oppidan_cat = array(
    'slug'                    => 'oppidan-blocks',
    'title'                   => __( 'Urban Heat ATL', 'oppidan-blocks' ),
    'icon'                    => 'dashicons-welcome-learn-more',
  );
  return array_merge(
    $categories,
    array(
      $oppidan_cat,
    )
  );
}

add_filter( 'block_categories_all', 'oppidan_block_categories', 10, 2 );