// Navigation Logic
const navToggleButton = document.querySelectorAll(".nav-toggle")[0];
const navLinks = document.querySelectorAll(".nav__links")[0];

navToggleButton.addEventListener("click", () => {
  navLinks.classList.toggle("nav__active");
});
