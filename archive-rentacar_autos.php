<?php get_header(); ?>

<div class="container">
  <div class="filter">
    <div class="filter__bar">
      <h4>Filter Vehicles</h4>
      <button class="filter__btn"><i class="las la-angle-double-down"></i></button>
    </div>
    <!-- Filter Form -->
    <?php get_template_part( 'components/filter' ); ?>
  </div>

  <?php while(have_posts()): the_post(); ?>

  <?php get_template_part('components/auto-preview') ?>

  <?php endwhile; ?>
</div>

<!-- Pagination -->
<?php get_template_part('components/pagination') ?>
<?php get_footer(); ?>