<?php
//Tar bort bös i head som vi gärna slipper när vi inspekterar sidkälla
function labb1_gratis_cleanup_head()
{
  remove_action('wp_head', 'wp_oembed_add_host_js');
  remove_filter('oembed_dataparse', 'wp_filter_pre_oembed_result', 10);
  remove_action('rest_api_init', 'wp_oembed_register_route');
  remove_filter('embed_oembed_discover', '__return_false');
  remove_action('wp_head', 'wp_oembed_add_discovery_links');
  remove_action('wp_head', 'wp_oembed_add_js_api');
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
  wp_dequeue_style('wc-block-style');
  wp_dequeue_style('global-styles');
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  wp_dequeue_style('classic-theme-styles');
  remove_action('wp_head', 'rest_output_link_wp_head');
}
add_action('wp_enqueue_scripts', 'labb1_gratis_cleanup_head', 100);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rel_canonical');

add_action('after_setup_theme', 'disable_block_widgets');
function disable_block_widgets()
{
  remove_theme_support('widgets-block-editor');
}

//Slut på gratis
function my_theme_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  add_theme_support('widgets');
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'my_theme_setup');


function wp_nav_menu_no_div($args)
{
  //sätter tar bort container
  $args['container'] = false;

  return $args;
}
add_filter('wp_nav_menu_args', 'wp_nav_menu_no_div');

function theme_widget_init()
{
  register_sidebar([
    'name' => 'search-blog-side',
    'id' => 'search',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 >',
    'after_title' => '</h3>',
  ]); //registrerar widget
  register_sidebar([
    'name' => 'pages-blog-side',
    'id' => 'nav-pages',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 >',
    'after_title' => '</h3>',
  ]); //registrerar widget
  register_sidebar([
    'name' => 'arkiv-blog-side',
    'id' => 'nav-arkiv',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 >',
    'after_title' => '</h3>',
  ]); //registrerar widget
  register_sidebar([
    'name' => 'category-blog-side',
    'id' => 'nav-category',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h3 >',
    'after_title' => '</h3>',
  ]); //registrerar widget

  register_sidebar([
    'name' => 'footer-om-oss-text',
    'id' => 'about-text-footer',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ]); //registrerar widget
  register_sidebar([
    'name' => 'footer-kontakt-text',
    'id' => 'contact-text-footer',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ]); //registrerar widget

  register_sidebar([
    'name' => 'footer-sociala-länkar',
    'id' => 'sociala-media-link-footer',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ]); //registrerar widget

  register_sidebar([
    'name' => 'aside-undersida',
    'id' => 'aside-page',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ]); //registrerar widget

}
add_action('widgets_init', 'theme_widget_init');

//lägga till styling
function css_inks()
{
  wp_enqueue_style('font-style', get_template_directory_uri() . '/css/font-awesome.css');
  wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css');
  wp_enqueue_style('my_theme_style', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'css_inks');

//lägger till två filter för excerpt hooken
function custom_excerpt_length($length)
{
  return 66;
}
add_filter('excerpt_length', 'custom_excerpt_length');
//över returnerar 66 karaktärer och under tar vi bort vad som kommer ist för ....
function custom_excerpt_more()
{
  return '';
}
add_filter('excerpt_more', 'custom_excerpt_more');


//funkar inte som tänkt får kolla på detta sen
// function my_theme_script()
// {
//   wp_enqueue_script('jquery');
//   wp_enqueue_script('my-js-theme-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true);
// }
// add_action('wp_enqueue_scripts', 'my_theme_script');

// function js_theme_script()
// {
//   wp_enqueue_script(
//     'jquery',
//     includes_url('/js/jquery/jquery.js'),
//     array(),
//     null,
//     false
//   );
//   // wp_enqueue_script('jquery');
//   //funkar inte att hämta från css mappen så använder wordpress egna
//   wp_enqueue_script('my-js-theme-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true);
// }
// add_action('wp_enqueue_scripts', 'js_theme_script');
