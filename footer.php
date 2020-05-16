</main>

<footer class="footer">
  <div class="container">
    <div class="footer__brand-box">
      <a href="<?php echo get_home_url(); ?>" class="footer__logo">
        <span class="footer__brand">
          Lucero
        </span>Rent-A-Car
      </a>
    </div>

    <!-- Display Main Navigation -->
    <?php 
          $args = array(
            'theme_location' => 'main-menu',
            'container_class' => 'footer__links'
          );

          wp_nav_menu( $args );
        ?>

    <div class="footer__social">
      <ul>
        <li><a href="#"><i class="lab la-instagram"></i></a></li>
        <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
        <li><a href="#"><i class="lab la-twitter"></i></a></li>
      </ul>
    </div>

    <div class="footer__copyright">
      <?php
    function currentYear(){
        return date('Y');
    }
    ?>
      © <?php echo currentYear(); ?> All Rights Reserved.
    </div>
  </div>
</footer>
<?php wp_footer(); ?>

</body>

</html>