snigel
<?php
get_header();

while (have_posts()) {
  the_post();
  get_the_post_thumbnail();
  the_title();
  the_content();
}
