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
          style="background-image: url('<?php echo get_template_directory_uri() . '/src\images\stripes_background.png' ?>')">
          <i class="las la-plane-arrival services__icon"></i></div>
        <h3 class="services__title">
          Airport Delivery
        </h3>
        <p class="services__lead">Lorem ipsum dolor sit amet eleifend tincidunt
          tortor fringilla neque ut quam quis.</p>
      </div>

      <div class="services__service">
        <div class="services__icon-box"
          style="background-image: url('<?php echo get_template_directory_uri() . '/src\images\stripes_background.png' ?>')">
          <i class="las la-car-crash services__icon"></i></div>
        <h3 class="services__title">
          Fully Insured
        </h3>
        <p class="services__lead">Lorem ipsum dolor sit amet eleifend tincidunt
          tortor fringilla neque ut quam quis.</p>
      </div>

      <div class="services__service">
        <div class="services__icon-box"
          style="background-image: url('<?php echo get_template_directory_uri() . '/src\images\stripes_background.png' ?>')">
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
    <div class="showcase__slider">
      <div class="showcase__item">Text One</div>
      <div class="showcase__item">Text Two</div>
      <div class="showcase__item">Text Three</div>
    </div>
  </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>