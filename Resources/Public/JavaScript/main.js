document.querySelectorAll(".frame-type-pgae_fancycard").forEach((item) => {
  const headerElement = item.querySelector(".fancycard__header");

  if (headerElement) {
    headerElement.firstChild.style.background = headerElement.getAttribute("data-color");



    const btnToggle = headerElement.querySelector(".btn-toggle")
    if (btnToggle) {
      btnToggle.addEventListener("click", () => {
        const bodyElement = headerElement.parentElement.querySelector(".fancycard__body");
        bodyElement.classList.toggle("hidden");
      });
    }
  }
});
