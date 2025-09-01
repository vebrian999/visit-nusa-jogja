document.addEventListener("DOMContentLoaded", function () {
  const scrollBtn = document.getElementById("scroll-down-btn");
  const targetSection = document.getElementById("paket-wisata");
  if (scrollBtn && targetSection) {
    scrollBtn.addEventListener("click", function () {
      targetSection.scrollIntoView({ behavior: "smooth" });
    });
  }
});
