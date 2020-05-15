<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<div class="auto__item">

  <div class="auto__auto">
    <div class="auto__image">
      <?php the_post_thumbnail('auto_img'); ?>
    </div>
    <div class="auto__info">

      <h4 class="auto__price">
        $<?php the_field('price') ?>
        <span class="auto__perday">
          / day
        </span>
      </h4>
      <div class="auto__type">
        <?php echo get_field('car_type')->name; ?>
      </div>
    </div>
  </div>

  <div class="auto__desc">
    <h3 class="auto__title">
      <?php the_title(); ?> <?php echo get_field('brand')->name; ?>
    </h3>
    <p class="auto__description">
      <?php the_field('description') ?>
    </p>
    <div class="auto__options">

      <div class="auto__option">
        <div class="auto__icon">
          <i class="las la-gas-pump"></i>
        </div>
        <p class="auto__option-text">
          <?php the_field('fuel_type') ?>
        </p>
      </div>

      <div class="auto__option">
        <div class="auto__icon">
          <?php echo file_get_contents(get_template_directory_uri() . "/src/images/chassis.svg"); ?>
        </div>
        <p class="auto__option-text">
          <?php echo get_field('drive_train')->name; ?>
        </p>
      </div>

      <div class="auto__option">
        <div class="auto__icon">
          <?php echo file_get_contents(get_template_directory_uri() . "/src/images/gearshift.svg"); ?>
        </div>
        <p class="auto__option-text">
          <?php echo get_field('transmission_type')->name; ?>
        </p>
      </div>

      <div class="auto__option">
        <div class="auto__icon">
          <i class="las la-user-friends"></i>
        </div>
        <p class="auto__option-text">
          Passengers: <?php the_field('passenger_number') ?>
        </p>
      </div>
    </div>
    <div class="auto__btn">
      <a href="<?php the_permalink(); ?>" class="btn btn--primary">Details</a>
    </div>
  </div>

</div>

<?php endwhile; ?>

<?php get_footer(); ?>