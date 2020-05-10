// Navigation Logic
const navToggleButton = document.querySelector(".nav-toggle");
const navLinks = document.querySelector(".nav__links");

navToggleButton.addEventListener("click", () => {
  navLinks.classList.toggle("nav__active");
});
