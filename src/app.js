// Navigation Logic
const navToggleButton = document.querySelector(".nav-toggle");
const navLinks = document.querySelector(".nav__links");

navToggleButton.addEventListener("click", () => {
  navLinks.classList.toggle("nav__active");
});

// Filer Navigation
const filterButton = document.querySelector(".filter__btn");
const filterForm = document.querySelector(".filter__form");

filterButton.addEventListener("click", () => {
  filterForm.classList.toggle("filter__form-hide");
});

jQuery(document).ready(function($) {
  // bxSlider
  $(document).ready(function() {
    $(".showcase__slider").bxSlider({
      auto: true,
      autoControls: true,
      stopAutoOnClick: true,
    });
  });
});
