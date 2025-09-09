<?php

function enff_theme_support()
{
    //adds dynamicz to the title
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'enff_theme_support');


function enff_menus()
{

    $locations = array(
        'primary' => "Top",
        'footer' => "Footer"
    );

    register_nav_menus($locations);
}

add_action('init', 'enff_menus');

function enff_register_styles()
{

    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('enff-style', get_template_directory_uri() . "/style.css", array(), rand(111, 9999), 'all', filemtime(get_stylesheet_directory() . '/style.css'));
}
add_action('wp_enqueue_scripts', 'enff_register_styles');

function enff_register_scripts()
{
    wp_enqueue_script('cool_stuff_jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array(), '3.6.4', true);
    wp_enqueue_script('cool_stuff_vue', 'https://unpkg.com/vue@3/dist/vue.global.js', array(), true);
    wp_enqueue_script('cool_stuff', get_template_directory_uri() . '/assets/js/script.js', array(), time(), '1.0', true);
    wp_enqueue_script('cool_stuff-vueapp', get_template_directory_uri() . '/assets/js/app-vue.js', array(), time(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enff_register_scripts');

function enff_widget_areas()
{
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="news-list homepage-news-list">',
            'after_widget' => '</ul>',
            'name' => 'Homepage News',
            'id' => 'homepage-news',
            'description' => "Homepage news widget"
        )
    );
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="news-list">',
            'after_widget' => '</ul>',
            'name' => 'News',
            'id' => 'news',
            'description' => "news widget"
        )
    );
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="header-image">',
            'after_widget' => '</div>',
            'name' => 'Header Image',
            'id' => 'image',
            'description' => "image widget"
        )
    );
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="top-3">',
            'after_widget' => '</div>',
            'name' => 'Top Three Announcements',
            'id' => 'announcements',
            'description' => "Top 3 Announcements"
        )
    );
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="latest-edition">',
            'after_widget' => '</div>',
            'name' => 'Latest Edition of ENFF Program',
            'id' => 'latest-edition',
            'description' => "Latest Edition of ENFF Program"
        )
    );
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="trailer">',
            'after_widget' => '</div>',
            'name' => 'Trailer Edition',
            'id' => 'trailer',
            'description' => "Edition Trailer"
        )
    );
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="movie-spotlight">',
            'after_widget' => '</div>',
            'name' => 'Movie Spotlight',
            'id' => 'movie-spotlight',
            'description' => "Movie Spotlight"
        )
    );
    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<div class="newsletter">',
            'after_widget' => '</div>',
            'name' => 'Newsletter',
            'id' => 'newsletter',
            'description' => "Newsletter"
        )
    );
}

//remove comments
    add_action('admin_init', function () {
        // Redirect any user trying to access comments page
        global $pagenow;
        
        if ($pagenow === 'edit-comments.php') {
            wp_safe_redirect(admin_url());
            exit;
        }
    
        // Remove comments metabox from dashboard
        remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
    
        // Disable support for comments and trackbacks in post types
        foreach (get_post_types() as $post_type) {
            if (post_type_supports($post_type, 'comments')) {
                remove_post_type_support($post_type, 'comments');
                remove_post_type_support($post_type, 'trackbacks');
            }
        }
    });
    
    // Close comments on the front-end
    add_filter('comments_open', '__return_false', 20, 2);
    add_filter('pings_open', '__return_false', 20, 2);
    
    // Hide existing comments
    add_filter('comments_array', '__return_empty_array', 10, 2);
    
    // Remove comments page in menu
    add_action('admin_menu', function () {
        remove_menu_page('edit-comments.php');
    });
    
    // Remove comments links from admin bar
    add_action('init', function () {
        if (is_admin_bar_showing()) {
            remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
        }
    });

    add_action('widgets_init', 'enff_widget_areas');

// CUSTOM post types for Archive
function create_post_type() {    
    register_post_type( 'archive',
        array(
            'labels'                => array(
                'name'              => __( 'Archive' ),
                'singular_name'     => __( 'Archive' )
                ),
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'supports'              => array( 'title', 'editor', 'thumbnail' ),
            'rewrite'               => array( 'slug' => 'archive', 'with_front' => false ),
            'has_archive'           => true,
            'taxonomies'  => array( 'category' ),
            'show_in_rest' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
        )
    );
}

add_action( 'init', 'create_post_type' );


//  -------------------------
//  Include additional functions for 2025 update



    function includeFilesInDirectory($dir, $excludeFiles = array('.DS_Store'), $excludeStrings = array('__')) {
      // Check if directory exists and is readable
      if (!is_dir($dir) || !is_readable($dir)) {
        return false;
      }
    
      // Initialize array to store files
      $files = array();
    
      // Open directory and loop through files and directories
      $handle = opendir($dir);
      $filenames = array();
      $dirnames = array();
      while (false !== ($filename = readdir($handle))) {
        if ($filename == '.' || $filename == '..') {
          continue;
        }
    
        $filepath = $dir . DIRECTORY_SEPARATOR . $filename;
        
        // Check if file or directory should be excluded based on string match
        $exclude = false;
        foreach ($excludeStrings as $excludeString) {
          if (strpos($filepath, $excludeString) !== false) {
            $exclude = true;
            break;
          }
        }
        if ($exclude) {
          continue;
        }
    
        // If file is a directory, recurse into it
        if (is_dir($filepath)) {
          $dirnames[] = $filename;
        } else {
          if (!in_array($filename, $excludeFiles)) {
            $filenames[] = $filename;
          }
        }
      }
    
      // Close directory handle
      closedir($handle);
    
      // Sort directory names alphabetically
      sort($dirnames);
    
      // Sort filenames alphabetically within each subdirectory
      foreach ($dirnames as $dirname) {
        $dirpath = $dir . DIRECTORY_SEPARATOR . $dirname;
        $subfiles = includeFilesInDirectory($dirpath, $excludeFiles);
        $files = array_merge($files, $subfiles);
      }
    
      // Sort filenames alphabetically
      sort($filenames);
    
      // Add directory path to each filename
      foreach ($filenames as $filename) {
        $filepath = $dir . DIRECTORY_SEPARATOR . $filename;
        $files[] = $filepath;
      }
    
      // Return array of files
      return $files;
    }
    
    $includes = get_template_directory() . '/includes';
    $files = includeFilesInDirectory($includes);
    
    // print_r($files);
          
    foreach ($files as $file) {
      if (is_file($file)) {
        include($file);
      }
    }
?>
