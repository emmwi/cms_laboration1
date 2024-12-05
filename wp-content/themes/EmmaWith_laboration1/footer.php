</main>
<footer id="footer">
  <div class="container">
    <div class="row top">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <?php dynamic_sidebar('about-text-footer'); ?>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
        <?php dynamic_sidebar('contact-text-footer'); ?>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
        <?php dynamic_sidebar('sociala-media-link-footer'); ?>
      </div>
    </div>
    <div class="row bottom">
      <div class="col-xs-12">
        <p>Copyright &copy; Grupp X, <?php echo date('Y') ?></p>
      </div>
    </div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>
