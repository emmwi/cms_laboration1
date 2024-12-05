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
            <img src="<?php the_post_thumbnail_url(); ?>" />
            <h1><?php the_title(); ?></h1>
            <ul class="meta">
              <li>
                <i class="fa fa-calendar"></i> <?php the_date() ?>
              </li>
              <li>
                <i class="fa fa-user"></i> <?php echo get_the_author_posts_link(); ?></a>
              </li>
              <li>
                <i class="fa fa-tag"></i> <?php the_category(' , ') ?>
              </li>
            </ul>
            <p>
              <?php the_excerpt();
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
