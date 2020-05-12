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
      <div class="showcase__item">

        <div class="showcase__auto">
          <div class="showcase__image">
            <img src="<?php echo get_template_directory_uri() . '/src\images\carrental2-cars-pic1.jpg' ?>" alt="">
          </div>
          <div class="showcase__info">

            <h4 class="showcase__price">
              $59
              <span class="showcase__perday">
                / day
              </span>
            </h4>
            <div class="showcase__type">
              Sedan
            </div>
          </div>
        </div>

        <div class="showcase__desc">
          <h3 class="showcase__title">
            Maecenas
          </h3>
          <p class="showcase__description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus necessitatibus assumenda similique eum
            veniam, at non odit, dignissimos repellendus recusandae harum sed facere culpa voluptate molestiae hic
            molestias quae unde?
          </p>
          <div class="showcase__options">

            <div class="showcase__option">
              <div class="showcase__icon">
                <i class="las la-gas-pump"></i>
              </div>
              <p class="showcase__option-text">
                Gasoline
              </p>
            </div>

            <div class="showcase__option">
              <div class="showcase__icon">
                <?php echo file_get_contents(get_template_directory_uri() . "/src\images\chassis.svg"); ?>
              </div>
              <p class="showcase__option-text">
                4x4: No
              </p>
            </div>

            <div class="showcase__option">
              <div class="showcase__icon">
                <?php echo file_get_contents(get_template_directory_uri() . "/src\images\gearshift.svg"); ?>
              </div>
              <p class="showcase__option-text">
                Automatic
              </p>
            </div>

            <div class="showcase__option">
              <div class="showcase__icon">
                <i class="las la-user-friends"></i>
              </div>
              <p class="showcase__option-text">
                Passengers: 5
              </p>
            </div>
          </div>
          <div class="showcase__btn">
            <a href="#" class="btn btn--primary">Details</a>
          </div>
        </div>

      </div>

      <div class="showcase__item">

        <div class="showcase__auto">
          <div class="showcase__image">
            <img src="<?php echo get_template_directory_uri() . '/src\images\carrental2-cars-pic2.jpg' ?>" alt="">
          </div>
          <div class="showcase__info">

            <h4 class="showcase__price">
              $89
              <span class="showcase__perday">
                / day
              </span>
            </h4>
            <div class="showcase__type">
              SUV
            </div>
          </div>
        </div>

        <div class="showcase__desc">
          <h3 class="showcase__title">
            Delta X5
          </h3>
          <p class="showcase__description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus necessitatibus assumenda similique eum
            veniam, at non odit, dignissimos repellendus recusandae harum sed facere culpa voluptate molestiae hic
            molestias quae unde?
          </p>
          <div class="showcase__options">

            <div class="showcase__option">
              <div class="showcase__icon">
                <i class="las la-gas-pump"></i>
              </div>
              <p class="showcase__option-text">
                Diesel
              </p>
            </div>

            <div class="showcase__option">
              <div class="showcase__icon">
                <?php echo file_get_contents(get_template_directory_uri() . "/src\images\chassis.svg"); ?>
              </div>
              <p class="showcase__option-text">
                4x4: Yes
              </p>
            </div>

            <div class="showcase__option">
              <div class="showcase__icon">
                <?php echo file_get_contents(get_template_directory_uri() . "/src\images\gearshift.svg"); ?>
              </div>
              <p class="showcase__option-text">
                Manual
              </p>
            </div>

            <div class="showcase__option">
              <div class="showcase__icon">
                <i class="las la-user-friends"></i>
              </div>
              <p class="showcase__option-text">
                Passengers: 5
              </p>
            </div>
          </div>
          <div class="showcase__btn">
            <a href="#" class="btn btn--primary">Details</a>
          </div>
        </div>

      </div>

      <div class="showcase__item">

        <div class="showcase__auto">
          <div class="showcase__image">
            <img src="<?php echo get_template_directory_uri() . '/src\images\carrental2-cars-pic2.jpg' ?>" alt="">
          </div>
          <div class="showcase__info">

            <h4 class="showcase__price">
              $129
              <span class="showcase__perday">
                / day
              </span>
            </h4>
            <div class="showcase__type">
              SUV
            </div>
          </div>
        </div>

        <div class="showcase__desc">
          <h3 class="showcase__title">
            Vestibulum
          </h3>
          <p class="showcase__description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus necessitatibus assumenda similique eum
            veniam, at non odit, dignissimos repellendus recusandae harum sed facere culpa voluptate molestiae hic
            molestias quae unde?
          </p>
          <div class="showcase__options">

            <div class="showcase__option">
              <div class="showcase__icon">
                <i class="las la-gas-pump"></i>
              </div>
              <p class="showcase__option-text">
                Gasoline
              </p>
            </div>

            <div class="showcase__option">
              <div class="showcase__icon">
                <?php echo file_get_contents(get_template_directory_uri() . "/src\images\chassis.svg"); ?>
              </div>
              <p class="showcase__option-text">
                4x4: No
              </p>
            </div>

            <div class="showcase__option">
              <div class="showcase__icon">
                <?php echo file_get_contents(get_template_directory_uri() . "/src\images\gearshift.svg"); ?>
              </div>
              <p class="showcase__option-text">
                Manual
              </p>
            </div>

            <div class="showcase__option">
              <div class="showcase__icon">
                <i class="las la-user-friends"></i>
              </div>
              <p class="showcase__option-text">
                Passengers: 2
              </p>
            </div>
          </div>
          <div class="showcase__btn">
            <a href="#" class="btn btn--primary">Details</a>
          </div>
        </div>

      </div>


    </div>
  </div>
</section>

<section class="blog">
  <div class="container">
    <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 6
        );

        $blog = new WP_Query($args);
        while($blog->have_posts()): $blog->the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php endwhile; ?>
  </div>
</section>
<?php endwhile; ?>

<?php get_footer(); ?>