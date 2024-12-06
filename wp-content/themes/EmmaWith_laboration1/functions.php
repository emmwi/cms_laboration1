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
function labb1_after_setup_theme()
{
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  add_theme_support('widgets');
  add_theme_support('title-tag');

  //registerar två av mina navbars
  register_nav_menus([
    'primary'   => __('NavBar', 'labb1'),
    'secondary' => __('Undersidor', 'labb1'),
  ]);
}
// ok att använda menus ist för menu?
// register_nav_menu('primary', __('NavBar', 'labb1'));
// register_nav_menu('secondary', __('Undersidor', 'labb1'));

add_action('after_setup_theme', 'labb1_after_setup_theme');

function labb1_widgets_init()
{
  register_sidebar([
    'name' => 'Sök funktion blogg aside',
    'id' => 'search',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
  ]); //registrerar widget

  register_sidebar([
    'name' => 'Länkar i blogg aside',
    'id' => 'nav-link',
    'before_widget' => "<li class='widget'>",
    'after_widget' => '</li>',
    'before_title' => '<h2 >',
    'after_title' => '</h2>',
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
    'name' => 'undersida aside',
    'id' => 'undersida',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ]); //registrerar widget
}
add_action('widgets_init', 'labb1_widgets_init');


//egen funktion
function wp_nav_menu_no_div($args)
{
  // ian har godkänt denna för Emma 4/12
  $args['container'] = false;

  return $args;
}
add_filter('wp_nav_menu_args', 'wp_nav_menu_no_div');


//funktion som tar bort id och class från menyerna
function labb_1_nav_menu_css_class($classes, $item, $args)
{
  //tar bort klasser och id om menyn har theme_location 'secondary'
  if ($args->theme_location == 'secondary') {
    $classes = [];
    $item->ID = '';
  }
  //tar bort klasser och id om menyn har theme_locatin 'primary'
  if ($args->theme_location == 'primary') {
    $classes = [];
    $item->ID = ''; //försöka fixa denna eller kolla om de är ok att id menu_item finns på navbaren
  }
  //ska lägga till classen 'current-menu-item' om item har urlen som permalinken ger
  if (is_page() && $item->url === get_permalink()) {
    $classes[] = 'current-menu-item';
  }
  //lägger till current_menu_item för post-sidan också
  if (is_home() && $item->url === get_permalink(get_option('page_for_posts'))) {
    $classes[] = 'current-menu-item';
  }
  return $classes;
}

add_filter('nav_menu_css_class', 'labb_1_nav_menu_css_class', 10, 3);


//lägga till styling
function css_inks()
{
  wp_enqueue_style('font-style', get_template_directory_uri() . '/css/font-awesome.css');
  wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css');
  wp_enqueue_style('my_theme_style', get_template_directory_uri() . '/css/style.css');
}

add_action('wp_enqueue_scripts', 'css_inks');

//lägger till två filter för excerpt hooken
function labb1_excerpt_length($length)
{
  return 66;
}
add_filter('excerpt_length', 'labb1_excerpt_length');
//över returnerar 66 karaktärer och under tar vi bort vad som kommer ist för ....
function labb1_excerpt_more()
{
  return '';
}
add_filter('excerpt_more', 'labb1_excerpt_more');


function labb1_wp_enqueue_scripts()
{
  wp_enqueue_script(
    'labb1_jquery',
    get_template_directory_uri()  . '/js/jquery.js',
    array(),
    '',
    false
  );

  wp_enqueue_script('ew-js-theme-script', get_template_directory_uri() . '/js/script.js', array('labb1_jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'labb1_wp_enqueue_scripts');


function labb1_navigation_markup_template($template, $class)
{
  $template =
    '<nav class="navigation %1$s" aria-label="%4$s">
    <h2 class="screen-reader-text">%2$s</h2>
  %3$s
  </nav>';
  return $template;
}
add_filter('navigation_markup_template', 'labb1_navigation_markup_template', 10, 2);
