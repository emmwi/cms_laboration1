snigel
<?php
get_header(); ?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <?php
          while (have_posts()) {
            the_post(); ?>


            <article>
              <?php the_post_thumbnail(); ?>
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

      <?php
          }
          get_sidebar('blogg'); ?>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
