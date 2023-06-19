var teacherCards = document.querySelectorAll("#teacher-carousel .single-teacher");

teacherCards.forEach(function(card) {
  card.addEventListener("touchstart", function() {
    this.querySelector(".card-inner").classList.toggle("flipped");
  });
});