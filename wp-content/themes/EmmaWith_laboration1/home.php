<?php
get_header();
?>

<?php
while (have_posts()) {
  the_post(); ?>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <!-- behöver ändra hur denna h1an sitter -->
          <h1>Blogg </h1>
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
                <i class="fa fa-user"></i> <a href="forfattare.html" title="Inlägg av Anders Andersson" rel="author"><?php the_author() ?></a></a>
              </li>
              <li>
                <i class="fa fa-tag"></i> <a href="kategori.html" rel="category tag"><?php the_category() ?></a>
              </li>
            </ul>

            <p>
              <?php the_excerpt();
              ?></p>
          </article>
        </div>
      </div>
    </div>
  </section>
<?php
}
get_footer();
