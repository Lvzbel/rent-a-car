jQuery(document).ready(function($) {
  // Modaal
  $(".inline").modaal();
  // bxSlider
  $(document).ready(function() {
    $(".showcase__slider").bxSlider({
      auto: true,
      autoControls: true,
      stopAutoOnClick: true,
      touchEnabled: false,
    });
  });
  $(document).ready(function() {
    $(".auto__slider").bxSlider({
      slideMargin: 6,
      controls: false,
    });
  });
  // Manific Popup
  $(".gallery").each(function() {
    // the containers for all your galleries
    $(this).magnificPopup({
      delegate: "a", // the selector for gallery item
      type: "image",
      gallery: {
        enabled: true,
      },
    });
  });
});

// Navigation Logic
const navToggleButton = document.querySelector(".nav-toggle");
const navLinks = document.querySelector(".nav__links");

navToggleButton.addEventListener("click", () => {
  navLinks.classList.toggle("nav__active");
});

// Filer Navigation
const filterButton = document.querySelector(".filter__btn");
const filterForm = document.querySelector(".filter__form");

if (filterButton) {
  filterButton.addEventListener("click", () => {
    filterForm.classList.toggle("filter__form-hide");
  });
}

window.addEventListener("DOMContentLoaded", (event) => {
  const viewport = document.querySelector(".bx-viewport");
  const newHeight = viewport.clientHeight - 100;
  viewport.style.height = `${newHeight}px`;
});
