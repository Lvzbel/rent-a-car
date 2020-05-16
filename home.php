<?php get_header(); ?>
<section class="home u-section-spacing">
  <div class="container">
    <h1 class="home__title">Blog</h1>

    <div class="home__content">
      <?php while(have_posts()): the_post(); ?>

      <?php get_template_part('components/blog-preview') ?>

      <?php endwhile; ?>
    </div>
  </div>
  <!-- Pagination -->
  <?php get_template_part('components/pagination') ?>
</section>

<?php get_footer(); ?>