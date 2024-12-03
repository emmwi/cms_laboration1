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
            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
            <div class="text">
              <p>
              <div>
                <?php echo  the_content();
                ?>
              </div>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php

}
get_footer();
