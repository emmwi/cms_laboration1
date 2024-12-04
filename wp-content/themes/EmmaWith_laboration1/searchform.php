<form class="searchform" method="get" action="<?php echo esc_url(home_url('/')); ?>">
  <div>
    <label class="screen-reader-text">Sök efter:</label>
    <input type="text" name="s" value="<?php the_search_query(); ?>" />
    <input type="submit" value="Sök" />
  </div>
</form>
