document.querySelectorAll(".frame-type-pgae_fancycard").forEach((item) => {
  const headerElement = item.querySelector(".fancycard__header");

  item.addEventListener("click", () => {
    if (window.innerWidth > 992) {
      item.firstChild.setAttribute("data-toggle", "modal")
    } else {
      item.firstChild.removeAttribute("data-toggle")
    }
  });

  if (headerElement) {
    const btnToggle = headerElement.querySelector(".btn-toggle")
    if (btnToggle) {
      btnToggle.addEventListener("click", () => {
        const bodyElement = headerElement.parentElement.querySelector(".fancycard__body");
        bodyElement.classList.toggle("hidden");
      });
    }
  }
});
