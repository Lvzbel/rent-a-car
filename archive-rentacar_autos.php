<?php get_header(); ?>

<form method="GET">

  <!-- Transmission Type -->
  <div class="filter__container">
    <?php

  $terms = get_terms([
    'taxonomy' => 'trans',
    'hide_empty' => false
  ]);

  foreach ($terms as $term) :

  ?>

    <label>

      <input type="checkbox" name="trans[]" value="<?php echo $term->slug; ?>" <?php checked(
          (isset($_GET['trans']) && in_array($term->slug, $_GET['trans']))
        ) ?> />

      <?php echo $term->name; ?>

    </label>

    <?php endforeach; ?>
  </div>

  <!-- Brand Type -->
  <div class="filter__container">
    <?php

  $terms = get_terms([
    'taxonomy' => 'brand',
    'hide_empty' => false
  ]);

  foreach ($terms as $term) :

  ?>

    <label>

      <input type="checkbox" name="brand[]" value="<?php echo $term->slug; ?>" <?php checked(
          (isset($_GET['brand']) && in_array($term->slug, $_GET['brand']))
        ) ?> />

      <?php echo $term->name; ?>

    </label>

    <?php endforeach; ?>
  </div>

  <!-- Drive Train Type -->
  <div class="filter__container">
    <?php

  $terms = get_terms([
    'taxonomy' => 'drive',
    'hide_empty' => false
  ]);

  foreach ($terms as $term) :

  ?>

    <label>

      <input type="checkbox" name="drive[]" value="<?php echo $term->slug; ?>" <?php checked(
          (isset($_GET['drive']) && in_array($term->slug, $_GET['drive']))
        ) ?> />

      <?php echo $term->name; ?>

    </label>

    <?php endforeach; ?>
  </div>

  <!-- Car Type -->
  <div class="filter__container">
    <?php

  $terms = get_terms([
    'taxonomy' => 'type',
    'hide_empty' => false
  ]);

  foreach ($terms as $term) :

  ?>

    <label>

      <input type="checkbox" name="type[]" value="<?php echo $term->slug; ?>" <?php checked(
          (isset($_GET['type']) && in_array($term->slug, $_GET['type']))
        ) ?> />

      <?php echo $term->name; ?>

    </label>

    <?php endforeach; ?>
  </div>

  <button class="btn btn--primary" type="submit">Apply</button>

</form>

<div class="container">
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