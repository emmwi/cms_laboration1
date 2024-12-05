<?php
get_header();
while (have_posts()) {
  the_post(); ?>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6">
          <h1> <?php the_title(); ?></h1>
          <?php
          the_content(); ?>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-6">
          <img src="<?php the_post_thumbnail_url(); ?>">

        </div>
      </div>
    </div>
  </section>
<?php
} ?>


<?php
get_footer();
