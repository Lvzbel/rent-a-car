<?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>

<section class="cta">

  <h1 class="cta__header"><span class="cta__brandname">Lucero</span> Rent-A-Car
    <span class="cta__lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</span>
  </h1>
  <a class="btn btn--primary cta__btn" href="#">View our Inventory</a>
  <button class="btn btn--primary">Contact Us</button>

</section>

<?php endwhile; ?>

<?php get_footer(); ?>