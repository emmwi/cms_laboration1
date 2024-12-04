<!DOCTYPE html>
<html>

<head>
  <?php wp_head(); ?>
</head>

<body>

  <?php body_class();
  wp_body_open() ?>
  <div id="wrap">
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-xs-8 col-sm-6">
            <a class="logo" href="<?php echo home_url(); ?>"><?php echo get_bloginfo(['name']); ?></a>
          </div>
          <div class="col-sm-6 hidden-xs">
            <?php get_search_form(); ?>
          </div>
          <div class="col-xs-4 text-right visible-xs">
            <div class="mobile-menu-wrap">
              <i class="fa fa-search"></i>
              <i class="fa fa-bars menu-icon"></i>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="mobile-search">
      <form class="searchform">
        <div>
          <label class="screen-reader-text">Sök efter:</label>
          <input type="text" />
          <input type="submit" value="Sök" />
        </div>
      </form>
    </div>
    <nav id="nav">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <?php
            wp_nav_menu(
              [
                'menu' => 6,
                'container' => ' ',
                'menu_class' => 'menu',
                'menu_id' => 'menu-huvudmeny',
              ]
            ) ?>
          </div>
        </div>
      </div>
    </nav>

    <main>
