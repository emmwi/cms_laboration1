<?php get_header();

while (have_posts()) {
  the_post();
?>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1><?php
              the_archive_title(); ?></h1>
          <article>
            <img src="<?php the_post_thumbnail_url(); ?>">
            <h1><?php the_title(); ?></h1>
            <ul class="meta">
              <li>
                <i class="fa fa-calendar"></i> <?php the_date() ?>
              </li>
              <li>
                <i class="fa fa-user"></i> <a href="forfattare.html" title="Inlägg av Anders Andersson" rel="author"><?php the_author() ?></a>
              </li>
              <li>
                <i class="fa fa-tag"></i> <?php the_category(' , ') ?></a>
              </li>
            </ul>
            <p>
              <?php the_content();
              ?></p>
          </article>
        </div>
        <aside id="secondary" class="col-xs-12 col-md-3">
          <div id="sidebar">
          <?php
        }
        get_sidebar('for-blogg');
          ?>
          </div>
        </aside>
      </div>
    </div>
  </section>

  <?php
  get_footer();
