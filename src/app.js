jQuery(document).ready(function($) {
  // bxSlider
  // $(document).ready(function() {
  //   $(".showcase__slider").bxSlider({
  //     auto: true,
  //     autoControls: true,
  //     stopAutoOnClick: true,
  //   });
  // });
  // $(document).ready(function() {
  //   $(".auto__slider").bxSlider({
  //     slideMargin: 6,
  //     controls: false,
  //   });
  // });
  $(".showcase__slider")
    .slick({
      dots: true,
      infinite: true,
      speed: 700,
      slidesToShow: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      slidesToScroll: 1,
    })
    .on("setPosition", function(event, slick) {
      const slider = document.querySelector(".slick-track");
      // const slider = document.getElementsByClassName("slick-track");
      const height = document.querySelector(".auto-preview__item").clientHeight;
      slider.style.height = `${height}px`;
    });
  $(".auto__slider")
    .slick({
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 1,
    })
    .on("setPosition", function(event, slick) {
      const slider = document.querySelector(".slick-track");
      const list = document.querySelector(".slick-list");
      slider.style.height = "15rem";
      list.style.height = "15rem";
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
