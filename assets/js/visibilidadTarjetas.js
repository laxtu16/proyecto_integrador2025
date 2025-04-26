// Crear un observer para observar cuando la tarjeta entra en el viewport
const observer = new IntersectionObserver(
  (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible"); // Añadir la clase visible cuando entra en la vista
        observer.unobserve(entry.target); // Deja de observar esta tarjeta una vez que se activó
      }
    });
  },
  { threshold: 0.5 }
); // 50% de la tarjeta debe estar visible para que el efecto se active

// Observar todas las tarjetas
document.querySelectorAll(".card").forEach((card) => {
  observer.observe(card);
});
