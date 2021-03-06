<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<!-- CALL TO ACTION -->
<section class="cta">

  <h1 class="cta__header"><span class="cta__brandname"><?php the_field('cta_title') ?></span> Rent-A-Car
    <span class="cta__lead"><?php the_field('cta_lead') ?></span>
  </h1>
  <div class="cta__btn-container">
    <a class="btn btn--primary cta__btn" href="<?php echo site_url('/autos') ?>"><?php the_field('cta_button') ?></a>
    <!-- Phone -->
    <?php 
      $args = array(
        'post_type' => 'rentacar_contacts',
        'post_per_page' => 1
      );

      $contact = new WP_Query($args);

      while($contact->have_posts()): $contact->the_post(); ?>
    <ul class="cta__numbers">
      <?php  while ( have_rows('whatsapp') ) : the_row();

        $number = get_sub_field('whatsapp_number');
        ?>
      <li class="cta__number"><a target="_blank" rel="noopener"
          href="https://api.whatsapp.com/send?phone=+<?php echo sanitizePhoneNumber($number) ?>"><i
            class="lab la-whatsapp"></i><?= $number; ?></a></li>
      <?php endwhile; ?>
    </ul>
    <?php endwhile; wp_reset_postdata(); ?>
    <!-- Phone -->
  </div>

</section>

<!-- COMPANY SERVICES -->
<section class="services u-section-spacing">
  <div class="container">
    <div class="services__row">

      <?php while ( have_rows('services') ) : the_row(); ?>
      <div class="services__service">
        <div class="services__icon-box"
          style="background-image: url('<?php echo get_template_directory_uri() . '/src/images/stripes_background.png' ?>')">
          <i class="<?php the_sub_field('icon') ?> services__icon"></i></div>
        <h3 class="services__title">
          <?php the_sub_field('title') ?>
        </h3>
        <p class="services__lead"><?php the_sub_field('text') ?></p>
      </div>
      <?php endwhile; ?>

    </div>
  </div>
</section>

<!-- AUTO SHOWCASE -->
<section class="showcase u-section-spacing">
  <div class="container">
    <h2 class="header__secondary">
      Our Featured Vehicles
    </h2>
    <div class="showcase__slider">
      <!-- Query Featured Vehicles -->
      <?php 
        $args = array(
          'post_type' => 'rentacar_autos'
        );

        $featured_vehicles = new WP_Query($args);

        while($featured_vehicles->have_posts()): $featured_vehicles->the_post();

      if(get_field('featured')) {
        get_template_part('components/auto-preview');
      };
      endwhile;
      ?>
    </div>
  </div>
</section>

<!-- BLOG -->

<section class="blog u-section-spacing">
  <div class="container">
    <h2 class="header__secondary">
      Read about destinations in our blog
    </h2>
    <div class="blog__row">
      <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 6
        );

        $blog = new WP_Query($args);
        while($blog->have_posts()): $blog->the_post(); ?>

      <?php get_template_part('components/blog-preview') ?>

      <?php endwhile; wp_reset_postdata();?>
    </div>
  </div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>