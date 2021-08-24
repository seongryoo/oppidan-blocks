<?php

/**
 * Plugin Name: Oppidan Blocks
 * Description: Plugin for Urban Heat ATL website blocks.
 */

define( 'PLUGIN_FILE_URL', __FILE__ );

// Assets file loads in js and css needed to render blocks in WP editor
include( plugin_dir_path( __FILE__ ) . 'includes/assets.php' );

// Categories file registers block category to be used for gutenberg block
include( plugin_dir_path( __FILE__ ) . 'includes/block-categories.php' );

// Blocks file loads in php files needed for any custom block-based rendering
include( plugin_dir_path( __FILE__ ) . 'includes/block-render.php' );


// Very useful helper method
function scream( $msg ) {
  echo '<script>console.log("' . $msg . '");</script>';
}