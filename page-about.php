<?php get_header() ?>

<section class="u-section-spacing about">

  <div class="container">

    <?php while(have_posts()): the_post(); ?>

    <h1 class="header__secondary"><?php the_title(); ?></h1>

    <div class="about__content">
      <div class="about__section">
        <h3 class="about__title"><?php the_field('section_1_title') ?></h3>
        <div class="about__img">
          <?php 
          $image = get_field('section_1_image');
          ?>
          <img src="<?php echo $image['sizes']['large'] ?>" alt="">
        </div>
        <div class="about__text">
          <?php the_field('section_1_text') ?>
        </div>
      </div>
      <?php if(get_field('section_2_title')): ?>
      <div class="about__section">
        <h3 class="about__title"><?php the_field('section_2_title') ?></h3>
        <div class="about__text">
          <?php the_field('section_2_text') ?>
        </div>
        <div class="about__img">
          <?php 
          $image = get_field('section_2_image');
          ?>
          <img src="<?php echo $image['sizes']['large'] ?>" alt="">
        </div>
      </div>
      <?php endif; ?>
    </div>


    <?php endwhile; ?>

  </div>

</section>

<?php get_footer() ?>