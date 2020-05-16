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

    <?php 
      $args = array(
        'post_type' => 'rentacar_contacts',
        'post_per_page' => 1
      );

      $contact = new WP_Query($args);

      while($contact->have_posts()): $contact->the_post(); ?>

    <div class="footer__social">
      <ul>
        <li><a target="_blank" rel="noopener" href="<?php the_field('instagram') ?>"><i
              class="lab la-instagram"></i><span class="u-sr-only">instagram</span></a>
        </li>
        <li><a target="_blank" rel="noopener" href="<?php the_field('facebook') ?>"><i
              class="lab la-facebook-f"></i><span class="u-sr-only">facebook</span></a>
        </li>
        <li><a target="_blank" rel="noopener" href="<?php the_field('twitter') ?>"><i class="lab la-twitter"></i><span
              class="u-sr-only">twitter</span></a></li>
      </ul>
    </div>

    <div class="footer__phone">
      <ul>
        <?php  while ( have_rows('whatsapp') ) : the_row();

        $number = get_sub_field('whatsapp_number');
        ?>
        <li><a target="_blank" rel="noopener"
            href="https://api.whatsapp.com/send?phone=+<?php echo sanitizePhoneNumber($number) ?>"><i
              class="lab la-whatsapp"></i><?= $number; ?></a></li>
        <?php endwhile; ?>
      </ul>
    </div>
    <?php endwhile; wp_reset_postdata(); ?>
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