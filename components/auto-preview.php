<div class="auto-preview__item">

  <div class="auto-preview__auto">
    <a class="auto-preview__image" href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('auto_img'); ?>
    </a>
    <div class="auto-preview__info">

      <div class="auto-preview__price-box">
        <!-- If NOT on sale -->
        <?php if(!get_field('promo')): ?>
        <h4 class="auto-preview__price">
          $<?php the_field('price') ?>
          <span class="auto-preview__perday">
            / day
          </span>
        </h4>
        <?php else: ?>
        <!-- If on sale display both prices old and new -->
        <!-- Old Price -->
        <h4 class="auto-preview__price">
          <span class="auto-preview__old-price">
            $<?php the_field('price') ?>
          </span>
          <span class="auto-preview__perday">
            / day
          </span>
        </h4>

        <!-- Sale Price -->
        <h4 class="auto-preview__price auto-preview__price--sale">
          $<?php the_field('promo_price') ?>
          <span class="auto-preview__perday">
            / day
          </span>
        </h4>
        <?php endif; ?>
      </div>
      <div class="auto-preview__type">
        <?php echo get_field('car_type')->name; ?>
      </div>
    </div>
  </div>

  <div class="auto-preview__desc">
    <h3 class="auto-preview__title">
      <?php the_title(); ?> <?php echo get_field('brand')->name; ?>
    </h3>
    <p class="auto-preview__description">
      <?php the_field('description') ?>
    </p>
    <div class="auto-preview__options">

      <div class="auto-preview__option">
        <div class="auto-preview__icon">
          <i class="las la-gas-pump"></i>
        </div>
        <p class="auto-preview__option-text">
          <?php the_field('fuel_type') ?>
        </p>
      </div>

      <div class="auto-preview__option">
        <div class="auto-preview__icon">
          <?php echo file_get_contents(get_template_directory_uri() . "/src/images/chassis.svg"); ?>
        </div>
        <p class="auto-preview__option-text">
          <?php echo get_field('drive_train')->name; ?>
        </p>
      </div>

      <div class="auto-preview__option">
        <div class="auto-preview__icon">
          <?php echo file_get_contents(get_template_directory_uri() . "/src/images/gearshift.svg"); ?>
        </div>
        <p class="auto-preview__option-text">
          <?php echo get_field('transmission_type')->name; ?>
        </p>
      </div>

      <div class="auto-preview__option">
        <div class="auto-preview__icon">
          <i class="las la-user-friends"></i>
        </div>
        <p class="auto-preview__option-text">
          Passengers: <?php the_field('passenger_number') ?>
        </p>
      </div>
    </div>
    <div class="auto-preview__btn">
      <a href="<?php the_permalink(); ?>" class="btn btn--primary">Details</a>
    </div>
  </div>

</div>