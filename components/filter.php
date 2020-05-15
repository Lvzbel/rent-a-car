<form method="GET" class="filter__form">

  <!-- Transmission Type -->
  <div class="filter__container">
    <h4 class="filter__title">Transmission</h4>
    <?php

$terms = get_terms([
'taxonomy' => 'trans',
'hide_empty' => false
]);

foreach ($terms as $term) :

?>

    <label>

      <input type="checkbox" name="trans[]" value="<?php echo $term->slug; ?>" <?php checked(
  (isset($_GET['trans']) && in_array($term->slug, $_GET['trans']))
) ?> />

      <?php echo $term->name; ?>

    </label>

    <?php endforeach; ?>
  </div>

  <!-- Brand Type -->
  <div class="filter__container">
    <h4 class="filter__title">Brand</h4>

    <?php

$terms = get_terms([
'taxonomy' => 'brand',
'hide_empty' => false
]);

foreach ($terms as $term) :

?>

    <label class="filter__label">



      <input type="checkbox" name="brand[]" value="<?php echo $term->slug; ?>" <?php checked(
  (isset($_GET['brand']) && in_array($term->slug, $_GET['brand']))
) ?> />

      <?php echo $term->name; ?>
      <span class="checkmark"></span>

    </label>

    <?php endforeach; ?>
  </div>

  <!-- Drive Train Type -->
  <div class="filter__container">
    <h4 class="filter__title">Drivetrain</h4>

    <?php

$terms = get_terms([
'taxonomy' => 'drive',
'hide_empty' => false
]);

foreach ($terms as $term) :

?>

    <label>

      <input type="checkbox" name="drive[]" value="<?php echo $term->slug; ?>" <?php checked(
  (isset($_GET['drive']) && in_array($term->slug, $_GET['drive']))
) ?> />

      <?php echo $term->name; ?>

    </label>

    <?php endforeach; ?>
  </div>

  <!-- Car Type -->
  <div class="filter__container">
    <h4 class="filter__title">Car Type</h4>
    <?php

$terms = get_terms([
'taxonomy' => 'type',
'hide_empty' => false
]);

foreach ($terms as $term) :

?>

    <label>

      <input type="checkbox" name="type[]" value="<?php echo $term->slug; ?>" <?php checked(
  (isset($_GET['type']) && in_array($term->slug, $_GET['type']))
) ?> />

      <?php echo $term->name; ?>

    </label>

    <?php endforeach; ?>
  </div>

  <div class="filter__btn-box">
    <button class="btn btn--primary" type="submit">Apply</button>
  </div>

</form>