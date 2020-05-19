<?php get_header() ?>

<section class="u-section-spacing about">

  <div class="container">

    <?php while(have_posts()): the_post(); ?>

    <h1><?php the_title(); ?></h1>

    <div class="about__content">
      <div class="about__section">
        <div class="about__img">
          image goes here
        </div>
        <div class="about__text">
          text goes here
        </div>
      </div>
      <div class="about__section">
        <div class="about__text">
          text goes here
        </div>
        <div class="about__img">
          image goes here
        </div>
      </div>
    </div>


    <?php endwhile; ?>

  </div>

</section>

<?php get_footer() ?>