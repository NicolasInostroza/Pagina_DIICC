const flipCards = document.querySelectorAll('.flip-card-inner');
    flipCards.forEach(card => {
      card.addEventListener('click', () => {
        card.classList.toggle('flip');
      });
    });