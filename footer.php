    <footer class="primary" role="contentinfo">
      <div class="container">
        <nav class="secondary">
          <?php wp_nav_menu(array(
            'theme_location' => 'footer'
          )); ?>
        </nav>
        <p>Copyright &copy; Terry Coxall <?php echo date('Y'); ?></p>
      </div>
    </footer>

  </div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=163077850386761";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php wp_footer(); ?>
</body>
</html>
