<?php

add_action('acf/init', 'enff_register_acf_options_pages');
function enff_register_acf_options_pages() {

  if (function_exists('acf_add_options_page')) {

    // Main options page
    acf_add_options_page(array(
      'page_title'  => __('Website Settings', 'enff'),
      'menu_title'  => __('Website Settings', 'enff'),
      'menu_slug'   => 'enff-settings',
      'capability'  => 'edit_posts',
      'redirect'    => true
    ));
  }
}
