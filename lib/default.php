<?php

  add_image_size( 'gallery-xs', 85  , 35,  true );
  add_image_size( 'gallery-xs-nocrop', 300  , 438,  true );
  add_image_size( 'gallery-sm', 320 , 320, true );
  add_image_size( 'gallery-lg', 1280, 720, true );
  add_image_size( 'gallery-xl', 1280, 1280,false );

  function register_my_menu() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
  add_theme_support( 'post-thumbnails' );

  // Adding Widgets

  register_sidebar( array(
    'id'            => 'primary-widget-area',
    'name'          => 'Primary Widget',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ));

  // Add custom class to menu links

  function add_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="btn btn-nav"', $ulclass);
  }

  add_filter('wp_nav_menu','add_menuclass');

  function get_template_name () {
  foreach ( debug_backtrace() as $called_file ) {
    foreach ( $called_file as $index ) {
      if ( !is_array($index[0]) AND strstr($index[0],'/themes/') AND !strstr($index[0],'footer.php') ) {
        $template_file = $index[0] ;
      }
    }
  }
  $template_contents = file_get_contents($template_file) ;
  preg_match_all("(Template Name:(.*)\n)siU",$template_contents,$template_name);
  $template_name = trim($template_name[1][0]);
  if ( !$template_name ) { $template_name = '(default)' ; }
  $template_file = array_pop(explode('/themes/', basename($template_file)));
  return $template_file . ' > '. $template_name ;
}