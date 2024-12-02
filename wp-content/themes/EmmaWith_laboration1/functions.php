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
//sätta upp funktioner, att kunna använda biler och menyer att lägga till
function my_theme_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
}
add_action('after_setup_theme', 'my_theme_setup');

//lägga till styling
function css_inks()
{
  wp_enqueue_style('font-style', get_template_directory_uri() . '/css/font-awesome.css');
  wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css');
  wp_enqueue_style('my_theme_style', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'css_inks');


//funkar inte som tänkt får kolla på detta sen

function add_jquery_script()
{
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), null, false);
}
add_action('wp_enqueue_scripts', 'add_jquery_script');


function add_custom_js_script()
{
  wp_enqueue_script('js-script',   get_template_directory_uri() . '/js/script.js', array(), true);
}
add_action('wp_enqueue_scripts', 'add_custom_js_script');
