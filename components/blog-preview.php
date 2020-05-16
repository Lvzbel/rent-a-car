<div class="blog__item">
  <div class="blog__img-box">
    <a href="<?php the_permalink() ?>">
      <span class="u-sr-only"><?php the_title(); ?></span>
      <?php the_post_thumbnail('medium_large') ?>
    </a>
  </div>

  <div class="blog__content">
    <h4><a class="blog__title" href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
    <?php the_excerpt(); ?>
  </div>
  <div class="blog__footer">
    <div class="blog__tags">
      <?php the_tags(); ?>
    </div>
    <a href="<?php the_permalink() ?>" class="blog__link"><i class="las la-file-alt blog__link-icon"></i>Read
      More<span class="u-sr-only"> about <?php the_title(); ?></span></a>
  </div>
</div>