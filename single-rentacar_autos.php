<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>
<div class="auto">
  <div class="container">
    <h3 class="auto__title">
      <?php the_title(); ?> <?php echo get_field('brand')->name; ?>
    </h3>
    <div class="auto__item">
      <div class="auto__auto">
        <div class="auto__image">
          <?php the_post_thumbnail('auto_img'); ?>
        </div>
        <div class="auto__gallery">
          <div class="gallery auto__slider">
            <!-- Featured Image -->
            <a href="<?php echo get_the_post_thumbnail_url(null, 'large'); ?>">
              <?php the_post_thumbnail('thumbnail'); ?>
            </a>
            <!-- Gallery Images -->
            <?php 
            $images = get_field('gallery');
            if( $images ): ?>
            <?php foreach( $images as $image ): ?>
            <a href="<?php echo esc_url($image['sizes']["large"]); ?>">
              <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>"
                alt="<?php echo esc_attr($image['alt']); ?>" />
            </a>
            <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div class="auto__desc">
        <div class="auto__info">

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

          <div class="auto__type">
            <?php echo get_field('car_type')->name; ?>
          </div>
        </div>
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
          <a href="#inline" class="inline btn btn--primary">Call to reserve</a>
        </div>
      </div>

    </div>
  </div>
</div>
<?php endwhile; ?>

<!-- Modal -->
<div class="modal">
  <div id="inline" style="display:none;">
    <div class="modaal-container__brand-box">
      <p class="modaal-container__logo">
        <span class="modaal-container__brand">
          Lucero
        </span>Rent-A-Car
      </p>
    </div>
    <h3 class="modaal-container__lead">Call us to make your reservation!</h3>
    <div class="contact__phone">
      <?php 
      $args = array(
        'post_type' => 'rentacar_contacts',
        'post_per_page' => 1
      );

      $contact = new WP_Query($args);

      while($contact->have_posts()): $contact->the_post(); ?>

      <ul>
        <?php  while ( have_rows('whatsapp') ) : the_row();

        $number = get_sub_field('whatsapp_number');
        ?>
        <li><a target="_blank" rel="noopener"
            href="https://api.whatsapp.com/send?phone=+<?php echo sanitizePhoneNumber($number) ?>"><i
              class="lab la-whatsapp"></i><?= $number; ?></a></li>
        <?php endwhile; ?>
      </ul>

      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>