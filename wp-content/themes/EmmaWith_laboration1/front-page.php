<?php
get_header();
while (have_posts()) {
  the_post();
?>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="hero">
            <img src="<?php the_post_thumbnail_url() ?>" />
            <div class="text">
              <p>
                <?php the_content();
                ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
}
get_footer();
