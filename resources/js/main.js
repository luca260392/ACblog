// Creazione e aggiunta del pulsante di scroll-to-top alla pagina
window.addEventListener('DOMContentLoaded', () => {

    // Creazione dell'elemento per la freccia
  let scrollToTopButton = document.createElement('div');
  scrollToTopButton.innerHTML = '<i class="bi bi-arrow-up-square-fill fs-1"></i>';
  scrollToTopButton.id = 'scrollToTopButton';
  document.body.appendChild(scrollToTopButton);

  // Mostra il pulsante quando si scrolla giù
  window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
      scrollToTopButton.style.display = 'block';
    } else {
      scrollToTopButton.style.display = 'none';
    }
  });

  // Aggiunta del comportamento di scroll al click
  scrollToTopButton.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });
});