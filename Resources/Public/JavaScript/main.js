document.querySelectorAll(".frame-type-pgae_fancycard").forEach((item) => {

  item.addEventListener("click", () => {
    if (window.innerWidth > 768) {
      item.firstChild.setAttribute("data-toggle", "modal")
    } else {
      item.firstChild.removeAttribute("data-toggle")
    }
  });

  const headerElement = item.querySelector(".fancycard__header");
  if (headerElement) {
    const btnToggle = headerElement.querySelector(".btn-toggle")
    if (btnToggle) {
      btnToggle.addEventListener("click", () => {
        const bodyElement = headerElement.parentElement.querySelector(".fancycard__body");
        bodyElement.classList.toggle("d-none");
      });
    }
  }

  const color = item.getAttribute("data-body-title-color");
  item.querySelectorAll(".fancycard__body").forEach((element) => {
    element.querySelectorAll("h1, h2, h3, h4, h5, h6").forEach((header) => {
      header.style.color = color;
    })
  })
});
