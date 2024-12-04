search php
<section>
  <div class="container">
    <div class="row">
      <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
        <h1>Sökresultat för: <?php the_search_query(); ?></h1>
        <div class="searchform-wrap">
          <?php get_search_form(); ?>
        </div>
        <article>
          <img src="img/washington.jpg" />
          <h2 class="title">
            <a href="inlagg.html">Det tredje inlägget</a>
          </h2>
          <ul class="meta">
            <li>
              <i class="fa fa-calendar"></i> 18 november 2024
            </li>
            <li>
              <i class="fa fa-user"></i> <a href="forfattare.html" title="Inlägg av Anders Andersson" rel="author">Anders Andersson</a></a>
            </li>
            <li>
              <i class="fa fa-tag"></i> <a href="kategori.html" rel="category tag">Kategori 1</a>, <a href="kategori.html" rel="category tag">Kategori 2</a>
            </li>
          </ul>
          <p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex. Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis. In sed mi mi. Praesent condimentum sollicitudin nibh. Vivamus vulputate purus quis volutpat fringilla. Ut tortor libero, semper eget dolor vel, hendrerit tempus dui. Suspendisse dictum efficitur blandit. In porta scelerisque nulla ac placerat.</p>
          </p>
        </article>

        <article>
          <img src="img/paris.jpg" />
          <h2 class="title">
            <a href="inlagg.html">Mitt andra inlägg</a>
          </h2>
          <ul class="meta">
            <li>
              <i class="fa fa-calendar"></i> 2 oktober 2024
            </li>
            <li>
              <i class="fa fa-user"></i> <a href="forfattare.html" title="Inlägg av Anders Andersson" rel="author">Anders Andersson</a></a>
            </li>
            <li>
              <i class="fa fa-tag"></i> <a href="kategori.html" rel="category tag">Kategori 1</a>, <a href="kategori.html" rel="category tag">Kategori 2</a>
            </li>
          </ul>
          <p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex. Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis. In sed mi mi. Praesent condimentum sollicitudin nibh. Vivamus vulputate purus quis volutpat fringilla. Ut tortor libero, semper eget dolor vel, hendrerit tempus dui. Suspendisse dictum efficitur blandit. In porta scelerisque nulla ac placerat.</p>
          </p>
        </article>
      </div>
    </div>
  </div>
</section>
