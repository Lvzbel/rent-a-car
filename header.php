<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo("charset"); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title><?php echo wp_get_document_title() ?></title>
</head>

<body <?php body_class();?>>

  <header class="nav">
    <div class="container nav__container">

      <a href="#" class="nav__logo">
        <span class="nav__brand">
          Lucero
        </span>Rent-A-Car
      </a>

      <!-- Display Main Navigation -->
      <?php 
          $args = array(
            'theme_location' => 'main-menu',
            'container' => 'nav',
            'container_class' => 'nav__links'
          );

          wp_nav_menu( $args );
        ?>
    </div>
  </header>