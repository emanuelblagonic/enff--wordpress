<?php
function enff2025_enqueue_addon_styles() {
  $file_path = get_template_directory() . '/assets/styles/addon.css';
  $file_url  = get_template_directory_uri() . '/assets/styles/addon.css';
  $version   = file_exists( $file_path ) ? filemtime( $file_path ) : null;

  wp_enqueue_style(
    'enff2025-addon',
    $file_url,
    array(),
    $version,
    'all'
  );
}
add_action( 'wp_enqueue_scripts', 'enff2025_enqueue_addon_styles' );
