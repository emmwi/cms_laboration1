<!DOCTYPE html>
<html>

<head>
  <title>Labb 1</title>
  <?php wp_head(); ?>
</head>

<body>
  <?php body_class(); ?>>
  <?php wp_body_open() ?>
  <div id="wrap">

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-xs-8 col-sm-6">
            <a class="logo" href="index.html">Labb 1</a>
          </div>
          <div class="col-sm-6 hidden-xs">
            <form class="searchform">
              <div>
                <label class="screen-reader-text">Sök efter:</label>
                <input type="text" />
                <input type="submit" value="Sök" />
              </div>
            </form>
          </div>
          <div class="col-xs-4 text-right visible-xs">
            <div class="mobile-menu-wrap">
              <i class="fa fa-search"></i>
              <i class="fa fa-bars menu-icon"></i>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="mobile-search">
      <form class="searchform">
        <div>
          <label class="screen-reader-text">Sök efter:</label>
          <input type="text" />
          <input type="submit" value="Sök" />
        </div>
      </form>
    </div>

    <nav id="nav">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">


            <ul id="menu-huvudmeny" class="menu">
              <li class="current-menu-item"><a href="index.html" aria-current="page">Hem</a></li>
              <li><a href="blogg.html">Blogg</a></li>
              <li><a href="undersida.html">Undersida</a></li>
              <li><a href="undersida-2.html">Undersida 2</a></li>
              <li><a href="undersida-3.html">Undersida 3</a></li>
              <li><a href="undersida-4.html">Undersida 4</a></li>
              <li><a href="kontakt.html">Kontakt</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <main>
      <section>
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="hero">
                <img src="img/city.jpg" />
                <div class="text">
                  <p>
                  <div>
                    <h1>Hej och välkommen!</h1>
                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</div>
                  </div>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
