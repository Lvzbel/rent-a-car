<?php get_header(); ?>

<div class="container">
  <div class="filter">
    <div class="filter__bar">
      <h4>Filter</h4>
      <button>Open</button>
    </div>
    <!-- Filter Form -->
    <?php get_template_part( 'components/filter' ); ?>
  </div>

  <?php while(have_posts()): the_post(); ?>

  <div class="showcase__item">

    <div class="showcase__auto">
      <a class="showcase__image" href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('auto_img'); ?>
      </a>
      <div class="showcase__info">

        <h4 class="showcase__price">
          $<?php the_field('price') ?>
          <span class="showcase__perday">
            / day
          </span>
        </h4>
        <div class="showcase__type">
          <?php echo get_field('car_type')->name; ?>
        </div>
      </div>
    </div>

    <div class="showcase__desc">
      <h3 class="showcase__title">
        <?php the_title(); ?> <?php echo get_field('brand')->name; ?>
      </h3>
      <p class="showcase__description">
        <?php the_field('description') ?>
      </p>
      <div class="showcase__options">

        <div class="showcase__option">
          <div class="showcase__icon">
            <i class="las la-gas-pump"></i>
          </div>
          <p class="showcase__option-text">
            <?php the_field('fuel_type') ?>
          </p>
        </div>

        <div class="showcase__option">
          <div class="showcase__icon">
            <?php echo file_get_contents(get_template_directory_uri() . "/src/images/chassis.svg"); ?>
          </div>
          <p class="showcase__option-text">
            <?php echo get_field('drive_train')->name; ?>
          </p>
        </div>

        <div class="showcase__option">
          <div class="showcase__icon">
            <?php echo file_get_contents(get_template_directory_uri() . "/src/images/gearshift.svg"); ?>
          </div>
          <p class="showcase__option-text">
            <?php echo get_field('transmission_type')->name; ?>
          </p>
        </div>

        <div class="showcase__option">
          <div class="showcase__icon">
            <i class="las la-user-friends"></i>
          </div>
          <p class="showcase__option-text">
            Passengers: <?php the_field('passenger_number') ?>
          </p>
        </div>
      </div>
      <div class="showcase__btn">
        <a href="<?php the_permalink(); ?>" class="btn btn--primary">Details</a>
      </div>
    </div>

  </div>

  <?php endwhile; ?>
</div>

<?php get_footer(); ?>