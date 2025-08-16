const headersecundario = document.querySelector(".HeaderSecundario");

window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
       headersecundario.classList.add("active");
    } else {
        headersecundario.classList.remove("active");
    }
})