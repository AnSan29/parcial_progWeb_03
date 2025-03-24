import hamburguerMenu from "./dom/menu-hamburguesa.js";

const d = document;

d.addEventListener("DOMContentLoaded", (e) => {
  hamburguerMenu(".panel-btn", ".panel", ".menu a");
});
