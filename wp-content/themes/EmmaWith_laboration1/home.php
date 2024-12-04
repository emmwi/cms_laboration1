<?php
get_header();
?>
<section>
  <div class="container">
    <div class="row">
      <div id="primary" class="col-xs-12 col-md-9">
        <h1>Blogg </h1>
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
              <?php the_excerpt();
              ?></p>
          </article>
        <?php
        }
        echo get_the_posts_pagination([
          'mid-size' => 2,
          'prev-text' => 'Föregående',
          'next-text' => 'Nästa',
          'screen_reader_text' => __('Sidonumrering för inlägg'),
        ]);
        ?>

      </div>

      <aside id="secondary" class="col-xs-12 col-md-3">

        <div id="sidebar">
          <ul>
            <li id="search-2" class="widget widget_search">
              <?php
              dynamic_sidebar('search'); ?>
            </li>
          </ul>
          <ul role="navigation">
            <li id="pages-2" class="widget widget_pages">
              <?php dynamic_sidebar('nav-pages'); ?>
            </li>
            <li id="archives-2" class="widget widget_archive">
              <?php dynamic_sidebar('nav-arkiv'); ?>
            </li>
            <li id="categories-2" class="widget widget_categories">
            <li class="cat-item cat-item-3"><?php dynamic_sidebar('nav-category'); ?>
            </li>
          </ul>
        </div>
      </aside>
    </div>
  </div>
</section>
<?php
get_footer();
?>
