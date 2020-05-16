<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<!-- CALL TO ACTION -->
<section class="cta">

  <h1 class="cta__header"><span class="cta__brandname">Lucero</span> Rent-A-Car
    <span class="cta__lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</span>
  </h1>
  <div class="cta__btn-container">
    <a class="btn btn--primary cta__btn" href="#">View our Inventory</a>
    <a href="#" class="btn btn--primary cta__btn">Contact Us</a>
  </div>

</section>

<!-- COMPANY SERVICES -->
<section class="services u-section-spacing">
  <div class="container">
    <div class="services__row">

      <div class="services__service">
        <div class="services__icon-box"
          style="background-image: url('<?php echo get_template_directory_uri() . '/src/images/stripes_background.png' ?>')">
          <i class="las la-plane-arrival services__icon"></i></div>
        <h3 class="services__title">
          Airport Delivery
        </h3>
        <p class="services__lead">Lorem ipsum dolor sit amet eleifend tincidunt
          tortor fringilla neque ut quam quis.</p>
      </div>

      <div class="services__service">
        <div class="services__icon-box"
          style="background-image: url('<?php echo get_template_directory_uri() . '/src/images/stripes_background.png' ?>')">
          <i class="las la-car-crash services__icon"></i></div>
        <h3 class="services__title">
          Fully Insured
        </h3>
        <p class="services__lead">Lorem ipsum dolor sit amet eleifend tincidunt
          tortor fringilla neque ut quam quis.</p>
      </div>

      <div class="services__service">
        <div class="services__icon-box"
          style="background-image: url('<?php echo get_template_directory_uri() . '/src/images/stripes_background.png' ?>')">
          <i class="las la-car-side services__icon"></i></div>
        <h3 class="services__title">
          Clean & Reliable
        </h3>
        <p class="services__lead">Lorem ipsum dolor sit amet eleifend tincidunt
          tortor fringilla neque ut quam quis.</p>
      </div>

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