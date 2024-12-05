<?php
get_header();
while (have_posts()) {
  the_post(); ?>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
          <h1> <?php the_title(); ?></h1>
          <?php
          the_content(); ?>
        </div>
        <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
          <?php get_sidebar('for-undersida') ?>
        </aside>
      </div>
    </div>
  </section>

<?php
}
get_footer();
