<?php
get_header();
?>
<section>
  <div class="container">
    <div class="row">
      <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
        <h1>Sökresultat för: <?php the_search_query(); ?></h1>
        <div class="searchform-wrap">
          <?php get_search_form(); ?>
        </div>
        <?php
        if (have_posts()) {
          while (have_posts()) {
            the_post();
        ?>
            <article>
              <img src="<?php the_post_thumbnail_url() ?>" />
              <h2 class=" title">
                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
              </h2>
              <ul class="meta">
                <li>
                  <i class="fa fa-calendar"></i> <?php echo get_the_date() ?>
                </li>
                <li>
                  <i class="fa fa-user"></i> <?php echo get_the_author_posts_link(); ?></a>
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
        } else {
          echo "<p> Det finns inget innehåll som matchar din sökning </p>";
        } ?>
      </div>
    </div>
  </div>
</section>
<?php

get_footer();
