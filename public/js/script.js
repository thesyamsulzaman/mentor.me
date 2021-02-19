// Menu Dropdown Toggle
(function () {
  const hamburger = document.querySelector("#hamburger");
  const menu = document.querySelector("#menu");
  hamburger.addEventListener("click", function (e) {
    if (menu.classList.contains("hidden")) {
      menu.classList.remove("hidden");
    } else {
      menu.classList.add("hidden");
    }
  });
})();


// Carousel Slider
(function () {
  const slider = document.querySelector(".category-cards");
  let isDown = false;
  let startX;
  let scrollLeft;
  slider ? slider.classList.add("active") : null;
  if (!(slider == null)) {
    slider.addEventListener("mousedown", e => {
      isDown = true;
      slider.classList.add("active");
      startX = e.pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener("mouseleave", () => {
      isDown = false;
      slider.classList.remove("active");
    });

    slider.addEventListener("mouseup", () => {
      isDown = false;
      slider.classList.remove("active");
    });

    slider.addEventListener("mousemove", e => {
      if (!isDown) return; // stop the fn from running
      e.preventDefault();
      const x = e.pageX - slider.offsetLeft;
      const walk = (x - startX) * 3;
      slider.scrollLeft = scrollLeft - walk;
    });
  }
})();


