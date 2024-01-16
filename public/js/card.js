document.addEventListener("DOMContentLoaded", function () {
    function animateCard(card) {
      gsap.from(card, {
        opacity: 0,
        y: 90,
        duration: 0.8,
        ease: "power2.out",
      });
    }
    const cards = document.querySelectorAll(".card");
    cards.forEach((card) => {
      animateCard(card);
    });
  });