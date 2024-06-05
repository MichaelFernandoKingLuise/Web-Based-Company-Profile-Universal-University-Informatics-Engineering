document.addEventListener("DOMContentLoaded", function () {
  // Get the carousel element
  var carousel = document.getElementById("carouselExampleFade");

  // Get the logo elements
  var prevLogo = document.querySelector(".carousel-control-prev .arrow-prev");
  var nextLogo = document.querySelector(".carousel-control-next .arrow-next");

  // Set initial opacity to 0
  prevLogo.style.opacity = 0;
  nextLogo.style.opacity = 0;

  // Add event listeners for mouse enter and leave
  carousel.addEventListener("mouseenter", function () {
    prevLogo.style.opacity = 1;
    nextLogo.style.opacity = 1;
  });

  carousel.addEventListener("mouseleave", function () {
    prevLogo.style.opacity = 0;
    nextLogo.style.opacity = 0;
  });
});
