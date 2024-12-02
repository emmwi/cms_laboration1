<?php
get_header();
while (have_posts()) {
  the_post(); ?>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1> <?php the_title(); ?></h1>
          <?php
          the_content(); ?>
        </div>
        <aside id="secondary" class="col-xs-12 col-md-3">
          <?php dynamic_sidebar('aside-page'); ?>
        </aside>
        <!-- fixa aside med egen wordpress-meny -->
        <aside id="secondary" class="col-xs-12 col-md-3">
          <ul id="menu-sidomeny" class="side-menu">
            <li class="current-menu-item"><a href="undersida.html" aria-current="page">Undersida</a></li>
            <li><a href="undersida-2.html">Undersida 2</a></li>
            <li><a href="undersida-3.html">Undersida 3</a></li>
            <li><a href="undersida-4.html">Undersida 4</a></li>
          </ul>
        </aside>
      </div>
    </div>
  </section>
<?php
}
get_footer();
