<?php
get_header();
?>
<section>
  <div class="container">
    <div class="row">
      <div id="primary" class="col-xs-12 col-md-9">
        <h1><?php the_archive_title(); ?> </h1>
        <?php
        while (have_posts()) {
          the_post(); ?>
          <article>
            <?php the_post_thumbnail(); ?>
            <h2 class=" title">
              <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            </h2>
            <ul class="meta">
              <li>
                <i class="fa fa-calendar"></i> <?php get_the_date() ?>
              </li>
              <li>
                <i class="fa fa-user"></i> <?php echo get_the_author_posts_link(); ?>
              </li>
              <li>
                <i class="fa fa-tag"></i> <?php the_category(' , ') ?></a>
              </li>
            </ul>
            <p>
              <?php the_excerpt();
              ?></p>
          </article>
        <?php
        }
        ?>
      </div>
      <aside id="secondary" class="col-xs-12 col-md-3">
        <div id="sidebar">
          <?php
          get_sidebar('for-blogg')
          ?>
        </div>
      </aside>
    </div>
  </div>
</section>
<?php
get_footer();
?>
