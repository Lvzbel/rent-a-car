<?php get_header(); ?>

<section class="post u-section-spacing">

  <div class="container">

    <?php while(have_posts()): the_post(); ?>

    <?php the_post_thumbnail('large'); ?>

    <h1 class="header__secondary"><?php the_title(); ?></h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ipsum ratione voluptatum nostrum
      veritatis soluta.</p>

    <div class="contact__content">
      <?php 
      $args = array(
        'post_type' => 'rentacar_contacts',
        'post_per_page' => 1
      );

      $contact = new WP_Query($args);

      while($contact->have_posts()): $contact->the_post(); ?>

      <div class="contact__phone">
        <h4 class="contact__title">Call us now, to make a reservation!</h4>
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

      <div class="contact__address">
        <h4 class="contact__title">Our Location, minutes from the airport!</h4>
        <p><?php the_field('address') ?></p>
      </div>

      <div class="contact__social">
        <h4 class="contact__title">You can also checkout our social media to find more about promotions and updates!
        </h4>
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

      <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <?php endwhile; ?>

  </div>

</section>

<?php get_footer(); ?>