<?php get_header(); ?>

<section class="post u-section-spacing">

  <div class="container">

    <?php while(have_posts()): the_post(); ?>

    <?php the_post_thumbnail('large'); ?>

    <div div class="post__content">
      <h1 class="header__secondary"><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </div>

    <?php endwhile; ?>

  </div>

</section>

<?php get_footer(); ?>